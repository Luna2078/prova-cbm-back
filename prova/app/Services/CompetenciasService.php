<?php

namespace App\Services;

use App\Models\CompetenciaPerfis;
use Illuminate\Contracts\Pagination\Paginator;

class CompetenciasService
{
  public function listarCompetencias(): Paginator
  {
    return CompetenciaPerfis::query()->simplePaginate();
  }
  
}