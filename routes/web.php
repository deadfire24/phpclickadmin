<?php

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

Route::get('/', 'App\Http\Controllers\DashboardController@view')->middleware('isLogin')->name("dashboard");


Route::prefix('auth')->group(function () {
    Route::get('/login', 'App\Http\Controllers\Authentification@login_view')->name('auth.login');
    Route::post('/login', 'App\Http\Controllers\Authentification@login_post');
});
