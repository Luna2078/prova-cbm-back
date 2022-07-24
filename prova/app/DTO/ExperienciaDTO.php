<?php

namespace App\DTO;

use Carbon\Carbon;

class ExperienciaDTO
{
  public function __construct(
   readonly string $empresa,
   readonly Carbon $inicio,
   readonly bool $atual_trabalho,
   readonly string $cargo,
   readonly ?Carbon $fim = null
  )
  {
  }
  
  public function toArray()
  {
    return [
     'empresa' => $this->empresa,
     'inicio' => $this->inicio,
     'atual_trabalho' => $this->atual_trabalho,
     'cargo' => $this->cargo,
     'fim' => $this?->fim
    ];
  }
}