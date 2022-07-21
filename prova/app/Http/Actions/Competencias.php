<?php

namespace App\Http\Actions;

use App\Http\Controllers\Controller;
use App\Services\CompetenciasService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class Competencias extends Controller
{
  public function __construct(private readonly CompetenciasService $service)
  {
  }
  
  public function __invoke(): JsonResponse
  {
   return response()->json([$this->service->listarCompetencias()], Response::HTTP_OK);
  }
}
