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

Route::get('/', 'StudentController@index');
Route::get('/students/create', 'StudentController@create');
Route::post('/store','StudentController@store');
Route::get('/delete/{id}', 'StudentController@destroy');
Route::get('/edit/{id}', 'StudentController@edit');
Route::post('/update/{id}', 'StudentController@update');