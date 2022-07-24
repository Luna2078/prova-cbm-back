<?php

namespace App\DTO;


class FormacaoDTO
{
  public function __construct(
   readonly int $instituicao_id,
   readonly string $nome
  )
  {
  }
  
  public function toArray()
  {
    return [
     'instituicao_id' => $this->instituicao_id,
     'nome' => $this->nome
    ];
  }
}