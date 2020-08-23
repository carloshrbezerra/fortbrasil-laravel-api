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

Route::group(['middleware' => ['jwt.auth']], function () {

    Route::name('usuario.')->group(function () {
        Route::resource('usuario', 'UsuarioController');
    });

    Route::name('estabelecimento.')->group(function () {
        Route::get('estabelecimento/buscar-localizacao/{localizacao}', 'EstabelecimentoController@findByLocalizacao');
        Route::resource('estabelecimento', 'EstabelecimentoController');
    });

});

Route::post('login', 'AuthController@login');

Route::apiResource('menu', 'MenuController');
Route::apiResource('permissao', 'PermissaoController');
Route::apiResource('perfil', 'PerfilController');

