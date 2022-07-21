<?php

namespace App\Factories;

use App\DTO\PerfilDTO;
use App\Enums\SignoEnum;
use App\Enums\TiposSanguineoEnum;
use Carbon\Carbon;

class PerfilFactory
{
  public static function toDTO(array $dados)
  {
  return new PerfilDTO(
   tipos_sanguineo_enum: TiposSanguineoEnum::from($dados['tipos_sanguineo_id']),
   signo_enum: SignoEnum::from($dados['signo_id']),
   cpf: $dados['cpf'],
   nome: $dados['nome'],
   data_nascimento: Carbon::createFromFormat('Y-m-d',$dados['data_nascimento']),
   email: $dados['email'],
   telefone: $dados['telefone'],
   resumo: $dados['resumo'] ?:null
  );
  }
  
}