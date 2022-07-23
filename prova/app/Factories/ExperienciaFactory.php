<?php

namespace App\Factories;

use App\DTO\ExperienciaDTO;

class ExperienciaFactory
{
  public static function toDTO(array $dados)
  {
    return new ExperienciaDTO(
     perfil_id: $dados['perfil_id'],
     empresa: $dados['empresa'],
     inicio: $dados['inicio'],
     atual_trabalho: $dados['atual_trabalho'],
     cargo: $dados['cargo'],
     fim: $dados['fim'],
    );
  }
  
}