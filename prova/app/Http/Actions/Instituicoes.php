<?php

namespace App\Http\Actions;

use App\Http\Controllers\Controller;
use App\Services\InstituicoesService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class Instituicoes extends Controller
{
  public function __construct(private readonly InstituicoesService $service)
  {
  }
  
  public function __invoke(): JsonResponse
  {
   return response()->json([$this->service->listarInstituicoes()], Response::HTTP_OK);
  }
}
