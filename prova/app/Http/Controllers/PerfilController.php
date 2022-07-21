<?php

namespace App\Http\Controllers;

use App\Factories\PerfilFactory;
use App\Http\Requests\PerfilRequest;
use App\Http\Resources\PerfilResource;
use App\Services\PerfilService;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PerfilController extends Controller
{
  public function __construct(private readonly PerfilService $service)
  {
  }
  
  /**
   * @return JsonResponse
   */
  public function listarPerfis(): JsonResponse
  {
    return response()->json([$this->service->listarPerfis()], Response::HTTP_OK);
  }
  
  /**
   * @param PerfilRequest $request
   * @return JsonResponse
   * @throws Exception
   */
  public function criarPerfil(PerfilRequest $request): JsonResponse
  {
    return (new PerfilResource($this->service->criarPerfil(PerfilFactory::toDTO($request->toArray()))))
     ->response()->setStatusCode(Response::HTTP_CREATED);
  }
}
