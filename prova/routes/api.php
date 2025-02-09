<?php

use App\Http\Actions\Competencias;
use App\Http\Actions\Instituicoes;
use App\Http\Actions\Signo;
use App\Http\Actions\TipoSanguineos;
use App\Http\Controllers\PerfilController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('prova')->group(function () {
  Route::get('signos', Signo::class);
  Route::get('tipo-sanguineos', TipoSanguineos::class);
  Route::get('instituicoes', Instituicoes::class);
  Route::get('competencias', Competencias::class);
  Route::controller(PerfilController::class)->group(function () {
    Route::get('perfis','listar');
    Route::get('perfis/{id}','pegarPerfil');
    Route::post('perfis','criar');
    Route::delete('perfis/{id}','apagar');
    Route::put('perfis/{id}','atualizar');
  });
});
