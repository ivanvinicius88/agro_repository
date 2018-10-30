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
    return view('Pessoa');
});

Route::get('/todosLavoura', function () {
    return view('Lavoura');
});

Route::get('/todosSafra', function () {
    return view('Safra');
});
