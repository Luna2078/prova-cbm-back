<?php

namespace App\Http\Controllers;

use App\Services\SignoService;
use App\Services\TipoSanguineoService;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TipoSanguineosController extends Controller
{
  public function __construct(private readonly TipoSanguineoService $service)
  {
  }
  
  public function listarTiposSanguineos(): JsonResponse
  {
   return response()->json([$this->service->listarTiposSanguineos()], Response::HTTP_OK);
  }
}
