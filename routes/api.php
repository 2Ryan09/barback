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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('products/{name}', 'ProductController@search')->where('name', '[A-Za-z]+');
Route::resource('products', 'ProductController');

Route::get('offerings/{name}', 'OfferingController@search')->where('name', '[A-Za-z]+');
Route::resource('offerings', 'OfferingController');

Route::get('bottles/{name}', 'BottleController@search')->where('name', '[A-Za-z]+');
Route::resource('bottles', 'BottleController');

Route::get('locations/{name}', 'LocationController@search')->where('name', '[A-Za-z]+');
Route::resource('locations', 'LocationController');
