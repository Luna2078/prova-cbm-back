<?php

namespace App\Services;

use App\Models\Instituicao;
use Illuminate\Contracts\Pagination\Paginator;

class InstituicoesService
{
  public function listarInstituicoes(): Paginator
  {
    return Instituicao::query()->simplePaginate();
  }
  
}