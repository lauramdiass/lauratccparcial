<?php


Route::get('/', function () {
    return view('home');
});

Route::auth();


Route::get('/home', 'HomeController@index');

/* PCDS */

Route::get('/PCD/novo', 'PCDController@novo');
Route::post('/PCD/adiciona', 'PCDController@adiciona');
Route::get('/PCD/lista', 'PCDController@lista');
Route::get('/PCD/detalhes', 'PCDController@mostra');
Route::get('/PCD/desvincula/{id}', 'PCDController@desvincula');
Route::get('/PCD/ativa/{id}', 'PCDController@ativa');
Route::get('/PCD/ingressa/{id}', 'PCDController@ingressa');
Route::get('/PCD/edita/{id}', 'PCDController@edita');
Route::get('/PCD/edita2/{id}', 'PCDController@edita2');
Route::post('/PCD/motivoSaida/{id}', 'PCDController@motivoSaida');


/* USERS */

Route::get('/Usuario/solicitacoes', 'UserController@listaNaoAutorizados');
Route::get('/Usuario/solicitacoes/rejeita/{id}', 'UserController@rejeita');
Route::get('/Usuario/solicitacoes/aceita/{id}', 'UserController@aceita');

Route::get('/Usuario/lista', 'UserController@lista');
Route::get('/Usuario/exclui/{id}', 'UserController@exclui');
Route::get('/Usuario/edita/{id}', 'UserController@edita');
Route::post('/Usuario/edita2/{id}', 'UserController@edita2');
Route::post('/Usuario/adiciona', 'UserController@adiciona');
Route::post('/Usuario/atribuiPapel/{users}', 'UserController@atribuiPapel');


/* GERAL */

Route::get('/emConstrucao', function () {
    return view('emConstrucao');
});

Route::get('/login-unauthorized', function () {
    return view('authRequired');
});

