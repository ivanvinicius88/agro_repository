<?php
use Illuminate\Http\Request;

/**
 * @author Ivan Vinicius Boneti
 * @package agro
 * @subpackage routes
 * @since 2018
 */

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: *');

Route::middleware('auth:api')->get('/', function (Request $request) {
    return $request->user();
});


Route::group(['prefix' => 'maquinario'], function () {

    Route::get('',        'ControllerMaquinario@todosMaquinario');

    Route::get('{id}',    'ControllerMaquinario@getMaquinario');

    Route::post('',       'ControllerMaquinario@addMaquinario');

    Route::put('{id}',    'ControllerMaquinario@atualizarMaquinario');

    Route::delete('{id}', 'ControllerMaquinario@deletarMaquinario');

});

Route::group(['prefix' => 'pessoa'], function () {

    Route::get('',        'ControllerPessoao@todosPessoao');

    Route::get('{id}',    'ControllerPessoao@getPessoao');

    Route::post('',       'ControllerPessoao@addPessoao');

    Route::put('{id}',    'ControllerPessoao@atualizarPessoao');

    Route::delete('{id}', 'ControllerPessoao@deletarPessoao');

});

Route::group(['prefix' => 'lavoura'], function () {

    Route::get('',        'ControllerLavoura@todosLavoura');

    Route::get('{id}',    'ControllerLavoura@getLavoura');

    Route::post('',       'ControllerLavoura@addLavoura');

    Route::put('{id}',    'ControllerLavoura@atualizarLavoura');

    Route::delete('{id}', 'ControllerLavoura@deletarLavoura');

});

Route::group(['prefix' => 'safra'], function () {

    Route::get('',        'ControllerSafra@todosSafra');

    Route::get('{id}',    'ControllerSafra@getSafra');

    Route::post('',       'ControllerSafra@addSafra');

    Route::put('{id}',    'ControllerSafra@atualizarSafra');

    Route::delete('{id}', 'ControllerSafra@deletarSafra');

});


