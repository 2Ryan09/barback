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

Route::group(['middleware' => 'web'], function () {
    Route::get('/', 'PageController@welcome');

    Route::get('/test', function () {
        return view('pages.test');
    });

    Route::get('/about', 'PageController@about');

    Route::get('/kiosk', 'PageController@kiosk')->name('kiosk.home');
    Route::get('/kiosk/reqSheet/{id}', 'PageController@reqSheet');

    Auth::routes();
    Route::get('auth/logout', 'Auth\LoginController@logout')->name('logout');

    Route::middleware('web')->group(function () {
        Route::get('/admin', 'PageController@admin');
        Route::get('/admin/locations', 'PageController@adminLocations');

        Route::get('/inventory', 'PageController@inventory')->name('inventory.home');
        Route::get('/inventory/offerings', 'PageController@offerings')->name('inventory.offerings');
        Route::get('/inventory/create', 'PageController@invcreate')->name('inventory.create');
        Route::get('/inventory/offerings/create', 'PageController@offcreate')->name('offerings.create');

        Route::get('/bws/overview', 'PageController@overview')->name('bws.overview');
        Route::get('/bws/create', 'PageController@bwscreate')->name('bws.create');

        Route::get('/suppliers', 'PageController@supplier')->name('supplier.overview');
        Route::get('/suppliers/create', 'PageController@suppliercreate')->name('supplier.create');
    });
});
