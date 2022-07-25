<?php

use App\Models\Competencia;
use function Pest\Laravel\get;

test('OK - Endpoint com o banco de listar competências')
 ->get('/api/prova/competencias')->assertOk();

test('OK - Endpoint listar o nome DaRussia', function () {
  $signo = Competencia::factory()->create(['nome' => 'Cypress']);
  get('/api/prova/competencias')->assertSee('Cypress');
  $signo->forceDelete();
});

test('Fail - Verbo errado POST do endpoint de listar competências')
 ->post('/api/prova/competencias',['Maria'])->assertStatus(405);

test('Fail - Verbo errado PUT do endpoint de listar competências')
 ->put('/api/prova/competencias',['Maria'])->assertStatus(405);

test('Fail - Verbo errado PATCH do endpoint de listar competências')
 ->patch('/api/prova/competencias',['Maria'])->assertStatus(405);

test('Fail - Verbo errado DELETE do endpoint de listar competências')
 ->delete('/api/prova/competencias',['Maria'])->assertStatus(405);
