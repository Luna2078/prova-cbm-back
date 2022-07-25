<?php

use App\Models\TipoSanguineo;
use function Pest\Laravel\get;

test('OK - Endpoint com o banco de listar tipos sanguineos')
 ->get('/api/prova/tipo-sanguineos')->assertOk();

test('OK - Endpoint listar o nome DaRussia', function () {
  $signo = TipoSanguineo::factory()->create(['nome' => 'Jose+']);
  get('/api/prova/tipo-sanguineos')->assertSee('Jose+');
  $signo->forceDelete();
});

test('Fail - Verbo errado POST do endpoint de listar tipos sanguineos')
 ->post('/api/prova/tipo-sanguineos',['Maria'])->assertStatus(405);

test('Fail - Verbo errado PUT do endpoint de listar tipos sanguineos')
 ->put('/api/prova/tipo-sanguineos',['Maria'])->assertStatus(405);

test('Fail - Verbo errado PATCH do endpoint de listar tipos sanguineos')
 ->patch('/api/prova/tipo-sanguineos',['Maria'])->assertStatus(405);

test('Fail - Verbo errado DELETE do endpoint de listar tipos sanguineos')
 ->delete('/api/prova/tipo-sanguineos',['Maria'])->assertStatus(405);
