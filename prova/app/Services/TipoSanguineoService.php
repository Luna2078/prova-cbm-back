<?php

namespace App\Services;

use App\Models\TipoSanguineo;
use Illuminate\Contracts\Pagination\Paginator;

class TipoSanguineoService
{
  public function listarTiposSanguineos(): Paginator
  {
    return TipoSanguineo::query()->simplePaginate();
  }
  
}