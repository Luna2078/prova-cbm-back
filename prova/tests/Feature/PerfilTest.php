<?php

use App\Models\Experiencia;
use App\Models\Formacao;
use App\Models\Perfil;
use function Pest\Laravel\delete;
use function Pest\Laravel\get;
use function Pest\Laravel\post;

test('OK - Pega o perfil criado pelo ID', function () {
  $perfil = Perfil::factory()->create();
  get("/api/prova/perfis/{$perfil->id}")->assertOk();
  $perfil->forceDelete();
});

test('OK - Lista todos os perfis')->get('/api/prova/perfis')->assertOk();

test('OK - Deletar o perfil criado pelo ID', function () {
  $perfil = Perfil::factory()->create();
  delete("/api/prova/perfis/{$perfil->id}")->assertOk();
  $perfil->forceDelete();
});

test( 'OK - Criar um perfil com o metodo POST', function () {
  $perfil = Perfil::factory()->make()->attributesToArray();
  $experiencia = Experiencia::factory()->make()->attributesToArray();
  $experiencia['inicio'] = '2020-01-02';
  $experiencia['fim'] = '';
  $formacao = Formacao::factory()->make()->attributesToArray();
  $perfil['experiencia'] = [$experiencia];
  $perfil['formacao'] = [$formacao];
  $perfil['data_nascimento'] = '1999-01-11';
  post('/api/prova/perfis', $perfil)->assertCreated();
});

test('Fail - Deletar o perfil criado pelo ID, sem ID na rota', function () {
  $perfil = Perfil::factory()->create();
  delete("/api/prova/perfis/")->assertStatus(405);
  $perfil->forceDelete();
});

test( 'Fail - Criar um perfil com o metodo POST, pois a data esta no formato errado', function () {
  $perfil = Perfil::factory()->make()->attributesToArray();
  $experiencia = Experiencia::factory()->make()->attributesToArray();
  $formacao = Formacao::factory()->make()->attributesToArray();
  $perfil['experiencia'] = [$experiencia];
  $perfil['formacao'] = [$formacao];
  post('/api/prova/perfis', $perfil)->assertStatus(422);
});

test('Fail - Lista todos os perfis com o metodo errado na rota')
 ->put('/api/prova/perfis')->assertStatus(405);

test('Fail - Pega o perfil criado pelo ID inválido', function () {
  $perfil = Perfil::factory()->create();
  get("/api/prova/perfis/maria")->assertStatus(500);
  $perfil->forceDelete();
});
