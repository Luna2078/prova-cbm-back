<?php

namespace App\Http\Controllers;

use App\Services\SignoService;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SignoController extends Controller
{
  public function __construct(private readonly SignoService $service)
  {
  }
  
  public function listarSignos(): JsonResponse
  {
   return response()->json([$this->service->listarSignos()], Response::HTTP_OK);
  }
}
