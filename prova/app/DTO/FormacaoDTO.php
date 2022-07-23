<?php

namespace App\DTO;


class FormacaoDTO
{
  public function __construct(
   readonly int $instituicao_id,
   readonly int $perfil_id,
   readonly string $nome
  )
  {
  }
  
  public function toArray()
  {
    return [
     'instituicao_id' => $this->instituicao_id,
     'perfil_id' => $this->perfil_id,
     'nome' => $this->nome
    ];
  }
}