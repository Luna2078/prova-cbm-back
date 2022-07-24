<?php

namespace App\Http\Actions;

use App\Http\Controllers\Controller;
use App\Services\InstituicoesService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class Instituicoes extends Controller
{
  public function __invoke(InstituicoesService $service): JsonResponse
  {
   return response()->json($service->listarInstituicoes());
  }
}
