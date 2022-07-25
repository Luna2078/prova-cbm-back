<?php

use App\Models\TipoSanguineo;
use App\Services\TipoSanguineoService;
use Illuminate\Pagination\Paginator;

test('OK - Testa a lista de tipos sanguíneos', function () {
  $tipoSanguineoModel = Mockery::mock(TipoSanguineo::class);
  $tipoSanguineoModel->shouldReceive('newQuery')->andReturnSelf()->shouldReceive('simplePaginate')
   ->andReturn(new Paginator(new TipoSanguineo([
    "nome" => "Cypress",
    "created_at" => now(),
    "updated_at" => now()
   ]),5));
  $service = new TipoSanguineoService($tipoSanguineoModel);
  expect($service->listarTiposSanguineos()->isEmpty())->toBeFalse();
  expect($service->listarTiposSanguineos())->toBeInstanceOf(Paginator::class);
});

test('Fail - Testa a lista de tipos sanguíneos', function () {
  $tipoSanguineoModel = Mockery::mock(TipoSanguineo::class);
  $tipoSanguineoModel->shouldReceive('newQuery')->andReturnSelf()->shouldReceive('simplePaginate')
   ->andReturn(new Paginator(null,5));
  $service = new TipoSanguineoService($tipoSanguineoModel);
  expect($service->listarTiposSanguineos()->isEmpty())->toBeTrue();
  expect($service->listarTiposSanguineos())->toBeInstanceOf(Paginator::class);
});
