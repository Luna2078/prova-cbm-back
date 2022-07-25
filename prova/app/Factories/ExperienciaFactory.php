<?php

namespace App\Factories;

use App\DTO\ExperienciaDTO;
use Carbon\Carbon;

class ExperienciaFactory
{
  public static function toDTO(array $dados)
  {
    return new ExperienciaDTO(
     empresa: $dados['empresa'],
     inicio: Carbon::createFromFormat('Y-m-d',$dados['inicio']),
     atual_trabalho: $dados['atual_trabalho'],
     cargo: $dados['cargo'],
     fim: $dados['fim']? Carbon::createFromFormat('Y-m-d',$dados['fim']):null,
    );
  }
  
}