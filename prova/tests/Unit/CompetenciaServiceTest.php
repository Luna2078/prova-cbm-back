<?php

use App\Models\Competencia;
use App\Services\CompetenciasService;
use Illuminate\Pagination\Paginator;

test('OK - Testa a lista de competências', function () {
  $competenciaModel = Mockery::mock(Competencia::class);
  $competenciaModel->shouldReceive('newQuery')->andReturnSelf()->shouldReceive('simplePaginate')
   ->andReturn(new Paginator(new Competencia([
    "nome" => "Cypress",
    "created_at" => now(),
    "updated_at" => now()
   ]),5));
  $service = new CompetenciasService($competenciaModel);
  expect($service->listarCompetencias()->isEmpty())->toBeFalse();
  expect($service->listarCompetencias())->toBeInstanceOf(Paginator::class);
});

test('Fail - Testa a lista de competências', function () {
  $competenciaModel = Mockery::mock(Competencia::class);
  $competenciaModel->shouldReceive('newQuery')->andReturnSelf()->shouldReceive('simplePaginate')
   ->andReturn(new Paginator(null,5));
  $service = new CompetenciasService($competenciaModel);
  expect($service->listarCompetencias()->isEmpty())->toBeTrue();
  expect($service->listarCompetencias())->toBeInstanceOf(Paginator::class);
});
