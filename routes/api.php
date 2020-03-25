<?php

use Illuminate\Http\Request;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::resource('usuario', 'UsuarioController');
Route::resource('informacao', 'InformacaoController');
Route::resource('formulario', 'FormularioController');
Route::resource('medico', 'MedicoController');
Route::resource('empresa', 'EmpresaController');
Route::resource('avaliacao', 'AvaliacaoController');
Route::resource('alternativa', 'AlternativaController');