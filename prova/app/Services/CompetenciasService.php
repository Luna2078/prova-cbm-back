<?php

namespace App\Services;

use App\Models\Competencia;
use Illuminate\Contracts\Pagination\Paginator;

class CompetenciasService
{
  public function listarCompetencias(): Paginator
  {
    return Competencia::query()->simplePaginate();
  }
  
}