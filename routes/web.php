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

Route::get('/', 'PageController@index')->name('index');
Route::get('service', 'PageController@service')->name('service');
Route::get('total_amount_of_poverty', 'PageController@total_amount_of_poverty')->name('total_amount_of_poverty');
Route::get('invalids_and_population', 'PageController@invalids_and_population')->name('invalids_and_population');
