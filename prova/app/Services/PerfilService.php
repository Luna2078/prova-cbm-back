<?php

namespace App\Services;

use App\Models\Instituicao;
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
  public function criarPerfil(array $perfil): Perfil
  {
    $cpfFormatado = $this->formatarDados($perfil['cpf']);
    $telefoneFormatado = $this->formatarDados($perfil['telefone']);
    $novoPerfil = new Perfil();
    $novoPerfil->tipo_sanguineo_id = $perfil['tipo_sanguineo_id'];
    $novoPerfil->signo_id = $perfil['signo_id'];
    $novoPerfil->cpf = $cpfFormatado;
    $novoPerfil->nome = $perfil['nome'];
    $novoPerfil->data_nascimento = $perfil['data_nascimento'];
    if (!($novoPerfil->data_nascimento->age() >= 18)){
      throw new Exception('A idade precisa ser superior a 18 anos.',404);
    }
    $novoPerfil->email = $perfil['email'];
    $novoPerfil->telefone = $telefoneFormatado;
    $novoPerfil->save();
    dd($novoPerfil);
    return $novoPerfil;
  }
  
  /**
   * @param $campo
   * @return string|array|null
   */
  private function formatarDados($campo): string|array|null
  {
    return preg_replace("/[^0-9]/", "", $campo);
  }
}