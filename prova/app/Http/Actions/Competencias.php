<?php

namespace App\Http\Actions;

use App\Http\Controllers\Controller;
use App\Services\CompetenciasService;
use Illuminate\Http\JsonResponse;

class Competencias extends Controller
{
  public function __invoke(CompetenciasService $service): JsonResponse
  {
   return response()->json($service->listarCompetencias());
  }
}
