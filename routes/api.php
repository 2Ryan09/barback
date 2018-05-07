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

Route::group(['prefix' => 'bws/'], function() {
	 // List bottles
	 Route::get('bottles', 'BottleController@index');
     // List single bottle	  
	 Route::get('bottle/{id}', 'BottleController@show');
     // Create new bottle
	 Route::post('bottle', 'BottleController@store');
	 // Update bottle
	 Route::put('bottle', 'BottleController@store');
	 // Delete bottle
	 Route::delete('bottles', 'BottleController@destroy');
});