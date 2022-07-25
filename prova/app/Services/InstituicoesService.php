<?php

namespace App\Services;

use App\Models\Instituicao;
use Illuminate\Contracts\Pagination\Paginator;

class InstituicoesService
{
  public function __construct(private readonly Instituicao $instituicao)
  {
  }
  public function listarInstituicoes(): Paginator
  {
    return $this->instituicao->newQuery()->simplePaginate();
  }
  
}