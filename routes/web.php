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

Route::get('/', 'ConstructionController@index'); 

Route::resource('constructions', 'ConstructionController');
Route::resource('progress', 'ProgressController');
Route::get('list/{city}', 'ConstructionController@cityList');
Route::get('list/launch/{launch}', 'ConstructionController@launchList');
Route::get('list/roadworks/{roadworks_flg}', 'ConstructionController@roadworksList');
Route::get('output_excel', 'ConstructionController@outputExcel');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
