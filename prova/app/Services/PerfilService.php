<?php

namespace App\Services;

use App\DTO\ExperienciaDTO;
use App\DTO\FormacaoDTO;
use App\DTO\PerfilDTO;
use App\Models\Experiencia;
use App\Models\Formacao;
use App\Models\Perfil;
use Exception;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Support\Facades\DB;

class PerfilService
{
  public function listarPerfis(): Paginator
  {
    return Perfil::query()->simplePaginate();
  }
  
  /**
   * @throws Exception
   */
  public function fluxoPerfil(PerfilDTO $perfilDTO): PerfilDTO
  {
    return DB::transaction(function () use($perfilDTO){
      if (!($perfilDTO->data_nascimento->age >= 18)) {
        throw new Exception('A idade precisa ser superior a 18 anos.', 404);
      }
      try {
        $novoPerfil = $this->cadastrarPerfil($perfilDTO);
        $this->cadastrarExperiencia($perfilDTO->experiencias,$novoPerfil->id);
        $this->cadastrarFormacao($perfilDTO->formacao,$novoPerfil->id);
      } catch (Exception $e){
        throw new Exception($e->getMessage());
      }
      return $perfilDTO;
    });
  }
  
  public function apagarPerfil(int $perfil_id): bool
  {
    return Perfil::query()->find($perfil_id)->delete();
  }
  
  public function atualizarPerfil(array $dados, int $perfil_id)
  {
    $perfil = Perfil::query()->find($perfil_id);
    $perfil->update($dados);
    return $perfil;
  }
  
  /**
   * @param $campo
   * @return string|array|null
   */
  private function formatarDados($campo): string|array|null
  {
    return preg_replace("/[^0-9]/", "", $campo);
  }
  
  /**
   * @param PerfilDTO $perfilDTO
   * @return Perfil
   */
  private function cadastrarPerfil(PerfilDTO $perfilDTO): Perfil
  {
    return Perfil::query()->create([
     'tipos_sanguineo_id' => $perfilDTO->tipos_sanguineo_enum,
     'signo_id' => $perfilDTO->signo_enum,
     'cpf' => $this->formatarDados($perfilDTO->cpf),
     'nome' => $perfilDTO->nome,
     'data_nascimento' => $perfilDTO->data_nascimento,
     'email' => $perfilDTO->email,
     'telefone' => $this->formatarDados($perfilDTO->telefone)])->get()->first();
  }
  
  private function cadastrarExperiencia(array $experiencoesArray,int $perfil_id): array
  {
    $experienciasDTO = [];
    /** @var ExperienciaDTO $experiencia */
    foreach ($experiencoesArray as $experiencia) {
      $experiencia['perfil_id'] = $perfil_id;
      $experienciasDTO[] = Experiencia::query()->insert($experiencia);
    }
    return $experienciasDTO;
  }
  
  private function cadastrarFormacao(array $formacoesArray,int $perfil_id):array
  {
    $formacoesDTO = [];
    /** @var FormacaoDTO $formacao */
    foreach ($formacoesArray as $formacao) {
      $formacao['perfil_id'] = $perfil_id;
      $formacoesDTO[] = Formacao::query()->insert($formacao);
    }
    return $formacoesDTO;
  }
  
  public function pegarPerfil(int $perfil_id)
  {
    return Perfil::query()->with(['tipoSanguineo','signo','competencias','experiencia','formacao'])->find($perfil_id);
  }
}