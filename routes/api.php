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

Route::group(['prefix' => 'v1.0/'], function () {
    // List activities
    Route::get('activities', 'ActivityController@index');
    // List single activity
    Route::get('activity/{id}', 'ActivityController@show');
    // Create new activity
    Route::post('activity', 'ActivityController@store');
    // Update activity
    Route::put('activity', 'ActivityController@update');
    // Delete activity
    Route::delete('activities', 'ActivityController@destroy');

    // List bottles in inventory
    Route::get('inventory', 'InventoryController@index');
    // List single bottle in inventory
    Route::get('inventory/{id}', 'InventoryController@show');
    // Create new bottle in inventory
    Route::post('inventory', 'InventoryController@store');
    // Update bottle in inventory
    Route::put('inventory', 'InventoryController@update');
    // Delete bottle in inventory
    Route::delete('inventory', 'InventoryController@destroy');

    // List movements
    Route::get('movements', 'MovementController@index');
    // List single movement
    Route::get('movement/{id}', 'MovementController@show');
    // Create new movement
    Route::post('movement', 'MovementController@store');
    // Update movement
    Route::put('movement', 'MovementController@update');
    // Delete movement
    Route::delete('movements', 'MovementController@destroy');

    // List orders
    Route::get('orders', 'OrderController@index');
    // List single order
    Route::get('order/{id}', 'OrderController@show');
    // Create new order
    Route::post('order', 'OrderController@store');
    // Update order
    Route::put('order', 'OrderController@update');
    // Delete order
    Route::delete('orders', 'OrderController@destroy');
});

// List bottles
Route::get('bottles', 'BottleController@index');
// List single bottle
Route::get('bottle/{id}', 'BottleController@show');
// Create new bottle
Route::post('bottle', 'BottleController@store')->name('bottle.store');
// Update bottle
Route::put('bottle', 'BottleController@update');
// Delete bottle
Route::delete('bottles', 'BottleController@destroy');