<?php

namespace App\Http\Actions;

use App\Http\Controllers\Controller;
use App\Services\TipoSanguineoService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class TipoSanguineos extends Controller
{
  public function __construct(private readonly TipoSanguineoService $service)
  {
  }
  
  public function __invoke(): JsonResponse
  {
   return response()->json([$this->service->listarTiposSanguineos()], Response::HTTP_OK);
  }
}
