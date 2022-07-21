<?php

use App\Http\Controllers\CompetenciasController;
use App\Http\Controllers\InstituicoesController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\TipoSanguineosController;
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

Route::prefix('prova/')->group(function () {
  Route::get('signos', [CompetenciasController::class, 'listarSignos']);
  Route::get('tipo-sanguineos', [TipoSanguineosController::class, 'listarTiposSanguineos']);
  Route::get('instituicoes', [InstituicoesController::class, 'listarInstituicoes']);
  Route::get('competencias', [CompetenciasController::class, 'listarCompetencias']);
  Route::get('listarPerfis', [PerfilController::class, 'listarPerfis']);
  Route::post('criarPerfil', [PerfilController::class, 'criarPerfil']);
});
