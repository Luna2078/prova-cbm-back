<?php

use App\Models\Signo;
use function Pest\Laravel\get;

test('OK - Endpoint com o banco de listar signos')
 ->get('/api/prova/signos')->assertOk();

test('OK - Endpoint listar o nome DaRussia', function () {
  $signo = Signo::factory()->create(['nome' => 'DaRussia']);
  get('/api/prova/signos')->assertSee('DaRussia');
  $signo->forceDelete();
});

test('Fail - Verbo errado POST do endpoint de listar signos')
 ->post('/api/prova/signos',['Maria'])->assertStatus(405);

test('Fail - Verbo errado PUT do endpoint de listar signos')
 ->put('/api/prova/signos',['Maria'])->assertStatus(405);

test('Fail - Verbo errado PATCH do endpoint de listar signos')
 ->patch('/api/prova/signos',['Maria'])->assertStatus(405);

test('Fail - Verbo errado DELETE do endpoint de listar signos')
 ->delete('/api/prova/signos',['Maria'])->assertStatus(405);
