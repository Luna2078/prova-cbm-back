<?php

namespace App\Services;

use App\Models\Signo;
use Illuminate\Contracts\Pagination\Paginator;

class SignoService
{
  public function listarSignos(): Paginator
  {
    return Signo::query()->simplePaginate();
  }
  
}