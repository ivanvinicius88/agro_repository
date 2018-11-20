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
Route::get('/agro', function () {
    return view('ViewPadrao');
 });


//listando
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

//adicionando
Route::get('/addMaquinario', function () {
    return view('MaquinarioManutencao');
 });
 
 Route::get('/addPessoa', function () {
     return view('PessoaManutencao');
 });

Route::get('/addLavoura', function () {
    return view('LavouraManutencao');
});

Route::get('/addSafra', function () {
    return view('SafraManutencao');
});