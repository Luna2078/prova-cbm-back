<?php

namespace App\Http\Actions;

use App\Http\Controllers\Controller;
use App\Services\TipoSanguineoService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class TipoSanguineos extends Controller
{
  public function __invoke(TipoSanguineoService $service): JsonResponse
  {
   return response()->json($service->listarTiposSanguineos());
  }
}
