<?php

namespace App\Factories;

use App\DTO\FormacaoDTO;

class FormacaoFactory
{
  public static function toDTO(array $dados)
  {
    return new FormacaoDTO(
     instituicao_id: $dados['instituicao_id'],
     perfil_id: $dados['perfil_id'],
     nome: $dados['nome']
    );
  }
  
}