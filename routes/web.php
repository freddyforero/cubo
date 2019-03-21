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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::redirect('/', 'cubo');


Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::post('ingresar', 'cubo\CuboController@update')->name('ingresar');
Route::get('funcionar', 'cubo\CuboController@show')->name('funcionar');

Route::get('reset', 'cubo\CuboController@edit')->name('reset');
Route::resource('/', 'cubo\CuboController');