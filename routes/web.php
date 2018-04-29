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

Route::get('/', 'PageController@dashboard');

Route::get('/about', 'PageController@about');

Route::get('/inventory', 'PageController@inventory');

Route::get('/inventory/bws', 'PageController@bws');

Route::post('/inventory/bws', 'LCBOController@getQueried')->name('queryReturn');

Auth::routes();
