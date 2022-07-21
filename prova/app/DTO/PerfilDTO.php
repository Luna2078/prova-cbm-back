<?php

namespace App\DTO;

use App\Enums\SignoEnum;
use App\Enums\TiposSanguineoEnum;
use Carbon\Carbon;

class PerfilDTO
{
  public function __construct(
   readonly TiposSanguineoEnum $tipos_sanguineo_enum,
   readonly SignoEnum $signo_enum,
   readonly string $cpf,
   readonly string $nome,
   readonly Carbon $data_nascimento,
   readonly string $email,
   readonly string $telefone,
   readonly ?string $resumo = null
  )
  {}
  
  public function toArray()
  {
    return [
     'tipos_sanguineo_id' => $this->tipos_sanguineo_enum,
      'signo_id' => $this->signo_enum,
     'cpf' => $this->cpf,
     'nome' => $this->nome,
     'data_nascimento' => $this->data_nascimento,
     'email' => $this->email,
     'telefone' => $this->telefone,
     'resumo' => $this?->resumo
    ];
  }
}