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



Route::group(["prefix" => "pessoas", 'middleware' => 'auth'], function () {
  Route::get('/', 'PessoasController@index')->name('pessoa.index');
  Route::get('/novo', 'PessoasController@create')->name('pessoa.new');
  Route::post('/', 'PessoasController@store')->name('pessoa.save');
  Route::get('/{model}/edit', 'PessoasController@edit')->name('pessoa.edit');
  Route::get('/{model}', 'PessoasController@show')->name('pessoa.show');
  Route::delete('/{model}', 'PessoasController@destroy')->name('pessoa.delete');
  Route::put('/{model}', 'PessoasController@update')->name('pessoa.update');


  });

  Auth::routes();

  Route::get('/home', 'HomeController@index')->name('home');
