<?php
/**
 * @author Ivan Vinicius Boneti
 * @package agro
 * @subpackage routes
 * @since 2018
 */

Route::get('/', function () {
    return view('welcome');
});

//Listar Todos
Route::get('/todosMaquinario', function () {
   return view('Maquinario');
});

Route::get('/todosPessoa', function () {
    return view('pessoa/Pessoa');
});

Route::get('/todosLavoura', function () {
    return view('lavoura/Lavoura');
});

Route::get('/todosSafra', function () {
    return view('safra/Safra');
});
