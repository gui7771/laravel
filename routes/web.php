<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cliente', 'ClientController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/clientes', 'ClientController@index')->name('clients.index');

Route::get('/clientes-inserir', 'ClientController@create');


Route::get('/clientes/{name}', function ($name){
	return 'Seja Bem vindo mito ' . $name;
});
