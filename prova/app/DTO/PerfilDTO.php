<?php

namespace App\DTO;

use App\Enums\SignoEnum;
use App\Enums\TiposSanguineoEnum;
use Carbon\Carbon;

class PerfilDTO
{
  public function __construct(
   readonly TiposSanguineoEnum $tiposSanguineoEnum,
   readonly SignoEnum $signoEnum,
   readonly string $cpf,
   readonly string $nome,
   readonly Carbon $data_nascimento,
   readonly string $email,
   readonly string $telefone,
   readonly ?string $resumo = null
  )
  {}
}