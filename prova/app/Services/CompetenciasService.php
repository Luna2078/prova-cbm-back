<?php

namespace App\Services;

use App\Models\Competencia;
use Illuminate\Contracts\Pagination\Paginator;

class CompetenciasService
{
  public function __construct(private readonly Competencia $competencia)
  {
  }
  
  public function listarCompetencias(): Paginator
  {
    return $this->competencia->newQuery()->simplePaginate();
  }
  
}