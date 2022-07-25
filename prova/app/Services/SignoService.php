<?php

namespace App\Services;

use App\Models\Signo;
use Illuminate\Contracts\Pagination\Paginator;

class SignoService
{
  public function __construct(private readonly Signo $signo)
  {
  }
  public function listarSignos(): Paginator
  {
    return $this->signo->newQuery()->simplePaginate();
  }
}