<?php

namespace App\DTO;

use App\Enums\SignoEnum;
use App\Enums\TiposSanguineoEnum;
use App\Factories\ExperienciaFactory;
use App\Factories\FormacaoFactory;
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
   readonly array $experiencias,
   readonly array $formacao,
   readonly ?string $resumo = null
  )
  {
  }
  
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
     'experiencias' => $this->experiencias($this->experiencias),
     'formacao' => $this->formacoes($this->formacao),
     'resumo' => $this?->resumo,
    ];
  }
  
  public function experiencias(array $experiencias)
  {
    $experienciasDTO = [];
    foreach ($experiencias as $experiencia){
      $experienciasDTO[] = ExperienciaFactory::toDTO($experiencia);
    }
    return $experienciasDTO;
  }
  
  public function formacoes(array $formacoes)
  {
    $formacoesDTO = [];
    foreach ($formacoes as $formacao){
      $formacoesDTO[] = FormacaoFactory::toDTO($formacao);
    }
    return $formacoesDTO;
  }
}