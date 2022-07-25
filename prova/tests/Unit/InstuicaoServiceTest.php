<?php

use App\Models\Instituicao;
use App\Services\InstituicoesService;
use Illuminate\Pagination\Paginator;

test('OK - Testa a lista de instituições', function () {
  $instituicaoModel = Mockery::mock(Instituicao::class);
  $instituicaoModel->shouldReceive('newQuery')->andReturnSelf()->shouldReceive('simplePaginate')
   ->andReturn(new Paginator(new Instituicao([
    "nome" => "Estacio",
    "created_at" => now(),
    "updated_at" => now()
   ]),5));
  $service = new InstituicoesService($instituicaoModel);
  expect($service->listarInstituicoes()->isEmpty())->toBeFalse();
  expect($service->listarInstituicoes())->toBeInstanceOf(Paginator::class);
});

test('Fail - Testa a lista de instituições', function () {
  $instituicaoModel = Mockery::mock(Instituicao::class);
  $instituicaoModel->shouldReceive('newQuery')->andReturnSelf()->shouldReceive('simplePaginate')
   ->andReturn(new Paginator(null,5));
  $service = new InstituicoesService($instituicaoModel);
  expect($service->listarInstituicoes()->isEmpty())->toBeTrue();
  expect($service->listarInstituicoes())->toBeInstanceOf(Paginator::class);
});
