<?php

use App\Models\Signo;
use App\Services\SignoService;
use Illuminate\Pagination\Paginator;

test('OK - Testa a lista de signos', function () {
  $signoModel = Mockery::mock(Signo::class);
  $signoModel->shouldReceive('newQuery')->andReturnSelf()->shouldReceive('simplePaginate')
   ->andReturn(new Paginator(new Signo([
   "nome" => "Áries",
   "created_at" => now(),
   "updated_at" => now()
  ]),5));
  $service = new SignoService($signoModel);
  expect($service->listarSignos()->isEmpty())->toBeFalse();
  expect($service->listarSignos())->toBeInstanceOf(Paginator::class);
});

test('Fail - Testa a lista de signos', function () {
  $signoModel = Mockery::mock(Signo::class);
  $signoModel->shouldReceive('newQuery')->andReturnSelf()->shouldReceive('simplePaginate')
   ->andReturn(new Paginator(null,5));
  $service = new SignoService($signoModel);
  expect($service->listarSignos()->isEmpty())->toBeTrue();
  expect($service->listarSignos())->toBeInstanceOf(Paginator::class);
});
