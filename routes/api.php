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

// List wines
Route::get('wines', 'WineController@index');
// List single wine
Route::get('wine/{id}', 'WineController@show');
// Create new wine
Route::post('wine', 'WineController@store');
// Update wine
Route::put('wine', 'WineController@store');
// Delete wine
Route::delete('wines', 'WineController@destroy'); 