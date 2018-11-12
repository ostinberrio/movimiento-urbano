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

if (version_compare(PHP_VERSION, '7.2.0', '>=')) {
  // Ignores notices and reports all other kinds... and warnings
  error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
  // error_reporting(E_ALL ^ E_WARNING); // Maybe this is enough
}

Route::get('/', function () {
  return redirect('home');
});


Auth::routes();

Route::get('/home', 'HomeController@index');


Route::resource('tbpais', 'tbpaisController');

Route::resource('tbtipodocumentos', 'tbtipodocumentoController');

Route::resource('tbdepartamentos', 'tbdepartamentosController');

Route::resource('tbciudades', 'tbciudadesController');

Route::resource('tbpersonas', 'tbpersonasController');