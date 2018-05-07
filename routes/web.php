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

Route::get('/', 'PageController@welcome');

Route::get('/test', function () {
	  return view('pages.test');
});

Route::get('/about', 'PageController@about');

Route::get('/welcome', 'PageController@welcome');

Route::get('/inventory', 'PageController@inventory');

Route::get('/inventory/bws', 'PageController@bws');

Auth::routes();

Route::get('/dashboard', 'PageController@dashboard');

Route::get('inventory/bws', 'LCBOController@getQueried');

Route::get('inventory/bws', 'WineController@getTable)')->name('wine.data');