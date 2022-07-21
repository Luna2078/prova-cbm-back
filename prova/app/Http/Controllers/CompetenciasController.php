<?php

namespace App\Http\Controllers;

use App\Services\CompetenciasService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class CompetenciasController extends Controller
{
  public function __construct(private readonly CompetenciasService $service)
  {
  }
  
  public function listarCompetencias(): JsonResponse
  {
   return response()->json([$this->service->listarCompetencias()], Response::HTTP_OK);
  }
}
