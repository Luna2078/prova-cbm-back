<?php

namespace App\Http\Actions;

use App\Http\Controllers\Controller;
use App\Services\SignoService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class Signo extends Controller
{
  public function __construct(private readonly SignoService $service)
  {
  }
  
  public function __invoke(): JsonResponse
  {
   return response()->json([$this->service->listarSignos()], Response::HTTP_OK);
  }
}
