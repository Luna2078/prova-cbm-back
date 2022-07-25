<?php

namespace App\Http\Controllers;

use App\Factories\PerfilFactory;
use App\Http\Requests\PerfilRequest;
use App\Http\Requests\UpdatePerfilRequest;
use App\Http\Resources\PerfilResource;
use App\Services\PerfilService;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class PerfilController extends Controller
{
  public function __construct(private readonly PerfilService $service)
  {
  }
  
  /**
   * @return JsonResponse
   */
  public function listar(): JsonResponse
  {
    return response()->json($this->service->listarPerfis());
  }
  
  /**
   * @param PerfilRequest $request
   * @return JsonResponse
   * @throws Exception
   */
  public function criar(PerfilRequest $request): JsonResponse
  {
    return (new PerfilResource($this->service->fluxoPerfil(PerfilFactory::toDTO($request->toArray()))))
     ->response()->setStatusCode(Response::HTTP_CREATED);
  }
  
  public function apagar(int $perfil_id): JsonResponse
  {
    return response()->json($this->service->apagarPerfil($perfil_id));
  }
  
  public function atualizar(UpdatePerfilRequest $request, int $perfil_id): PerfilResource
  {
    return (new PerfilResource($this->service->atualizarPerfil($request->toArray(),$perfil_id)));
  }
  
  public function pegarPerfil(int $perfil_id)
  {
    return response()->json($this->service->pegarPerfil($perfil_id));
  }
}
