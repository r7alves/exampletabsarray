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

Auth::routes();

//Route::resource('pessoas', 'PessoaController');
//Route::post('/pessoas/store', 'PessoaController@store');
//Route::post('/pessoas/{id}/editar', 'PessoaController@edit')->where('id','[0-9]+');
Route::resource('pessoas', 'PessoaController');
Route::get('/home', 'HomeController@index')->name('home');
