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

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'RecordsController@list');
Route::get('/verification', 'RecordsController@list');
Route::get('/verification/create', 'RecordsController@create');
Route::post('/verification/store', 'RecordsController@store');
Route::get('/verification/{record}/edit', 'RecordsController@edit');
Route::patch('/verification/{record}', 'RecordsController@update');
Route::delete('/verification/{record}', 'RecordsController@destroy');