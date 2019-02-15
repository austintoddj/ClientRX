<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::group(['middleware' => ['auth', 'verified']], function () {
    // Dashboard routes...
    Route::get('/', 'DashboardController')->name('dashboard');

    // User routes...
    Route::prefix('user')->group(function () {
        Route::get('{id}', 'UserController@show')->name('user.show');
        Route::post('user', 'UserController@update')->name('user.update');
    });

    // Client routes...
    Route::prefix('client')->group(function () {
        Route::get('', 'ClientController@index')->name('client.index');
        Route::get('create', 'ClientController@create')->name('client.create');
    });

    // Settings routes...
    Route::prefix('settings')->group(function () {
        Route::get('/', 'SettingsController@index')->name('settings.index');
    });
});
