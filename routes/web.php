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

  Route::get('/', function (){
    return view('welcome');
});

Route::group(["prefix" => "pessoas"], function () {
  Route::get("/", "PessoasController@index");
  Route::get("/create", "PessoasController@novoView");
  Route::post('/store', 'PessoasController@store');
  Route::get('/{id}/edit', 'PessoasController@editarView');
  Route::get('/{id}/excluir', 'PessoasController@excluirView');
  Route::get('/{id}/destroy', 'PessoasController@destroy');
  Route::post('/update', 'PessoasController@update');


  });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
