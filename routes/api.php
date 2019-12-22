<?php

use Illuminate\Http\Request;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('siswa', 'SiswaController@index');
Route::post('siswa', 'SiswaController@create');
Route::put('siswa/{id}', 'SiswaController@update');
Route::delete('siswa/{id}', 'SiswaController@delete');


Route::get('guru', 'GuruController@index');
Route::post('guru', 'GuruController@create');
Route::put('guru/{id}', 'GuruController@update');
Route::delete('guru/{id}', 'GuruController@delete');
