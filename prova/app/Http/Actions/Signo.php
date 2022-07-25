<?php

namespace App\Http\Actions;

use App\Http\Controllers\Controller;
use App\Services\SignoService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class Signo extends Controller
{
  public function __invoke(SignoService $service): JsonResponse
  {
   return response()->json($service->listarSignos());
  }
}
