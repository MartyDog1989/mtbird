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
Route::get('list/{city}', 'ConstructionController@cityList');
Route::get('list/launch/{launch}', 'ConstructionController@launchList');
Route::put('update_fundamental/{id}', 'ConstructionController@updateFundamental');