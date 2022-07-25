<?php

namespace App\Services;

use App\Models\TipoSanguineo;
use Illuminate\Contracts\Pagination\Paginator;

class TipoSanguineoService
{
  public function __construct(private readonly TipoSanguineo $tipoSanguineo)
  {
  }
  
  public function listarTiposSanguineos(): Paginator
  {
    return $this->tipoSanguineo->newQuery()->simplePaginate();
  }
  
}