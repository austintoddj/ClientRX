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

Route::group(['middleware' => ['auth']], function () {
    // Dashboard routes...
    Route::get('/', 'DashboardController')->name('dashboard');

    // User routes...
    Route::get('user', 'UserController@index')->name('user.index');
    Route::post('user', 'ProfileController@update')->name('user.update');
});
