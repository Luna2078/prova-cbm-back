<?php

namespace App\Services;

use App\DTO\PerfilDTO;
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
  public function criarPerfil(PerfilDTO $perfilDTO): Perfil
  {
    if (!($perfilDTO->data_nascimento->age >= 18)) {
      throw new Exception('A idade precisa ser superior a 18 anos.', 404);
    }
    $novoPerfil = $this->obterDados($perfilDTO);
    $novoPerfil->save();
    return $novoPerfil;
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
  private function obterDados(PerfilDTO $perfilDTO): Perfil
  {
    $novoPerfil = new Perfil();
    $novoPerfil->tipos_sanguineo_id = $perfilDTO->tipos_sanguineo_enum;
    $novoPerfil->signo_id = $perfilDTO->signo_enum;
    $novoPerfil->cpf = $this->formatarDados($perfilDTO->cpf);
    $novoPerfil->nome = $perfilDTO->nome;
    $novoPerfil->data_nascimento = $perfilDTO->data_nascimento;
    $novoPerfil->email = $perfilDTO->email;
    $novoPerfil->telefone = $this->formatarDados($perfilDTO->telefone);
    return $novoPerfil;
  }
}