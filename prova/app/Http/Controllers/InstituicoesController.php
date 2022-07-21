<?php

namespace App\Http\Controllers;

use App\Services\InstituicoesService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class InstituicoesController extends Controller
{
  public function __construct(private readonly InstituicoesService $service)
  {
  }
  
  public function listarInstituicoes(): JsonResponse
  {
   return response()->json([$this->service->listarInstituicoes()], Response::HTTP_OK);
  }
}
