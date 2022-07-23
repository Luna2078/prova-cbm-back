<?php

namespace App\Services;

use App\DTO\ExperienciaDTO;
use App\DTO\FormacaoDTO;
use App\DTO\PerfilDTO;
use App\Models\Experiencia;
use App\Models\Perfil;
use Exception;
use Illuminate\Contracts\Pagination\Paginator;

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
    if (!($perfilDTO->data_nascimento->age >= 18)) {
      throw new Exception('A idade precisa ser superior a 18 anos.', 404);
    }
    $this->cadastrarPerfil($perfilDTO);
    $this->cadastrarExperiencia($perfilDTO->experiencias);
    $this->cadastrarFormacao($perfilDTO->formacao);
    return $perfilDTO;
  }
  
  public function apagarPerfil(int $perfil_id): bool
  {
    return Perfil::query()->find($perfil_id)->delete();
  }
  
  public function atualizarPerfil(PerfilDTO $perfilDTO, int $perfil_id)
  {
    $perfil = Perfil::query()->find($perfil_id);
    $perfil->update($perfilDTO->toArray());
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
  
  private function cadastrarExperiencia(array $experiencoesArray): array
  {
    $experienciasDTO = [];
    /** @var ExperienciaDTO $experiencia */
    foreach ($experiencoesArray as $experiencia) {
      $experienciasDTO[] = Experiencia::query()->insert($experiencia->toArray());
    }
    return $experienciasDTO;
  }
  
  private function cadastrarFormacao(array $formacoesArray):array
  {
    $formacoesDTO = [];
    /** @var FormacaoDTO $formacao */
    foreach ($formacoesArray as $formacao) {
      $formacoesDTO[] = Experiencia::query()->insert($formacao->toArray());
    }
    return $formacoesDTO;
  }
}