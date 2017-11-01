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
  Route::get("/novo", "PessoasController@novoView");
  Route::post('/store', 'PessoasController@store');
  Route::get('/{id}/editar', 'PessoasController@editarView');
  Route::get('/{id}/excluir', 'PessoasController@excluirView');
  Route::get('/{id}/destroy', 'PessoasController@destroy');
  Route::post('/update', 'PessoasController@update');


  });

//Route::get("/", function () {
//    return view("template.app");
//});


//Route::group(['prefix' => 'pessoas'], function () {
//  Route::get('/', 'PessoasController@index');
//});
