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

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();

Route::middleware(['user'])->group(function () {
    Route::get('/dashboard', 'HomeController@index')->name('home');
    Route::resource('/data', DataController::class)->names('data');
    Route::get('/data/{data}/print', 'DataController@print')->name('data.print');
    Route::get('/change-password', 'ChangePasswordController@index')->name('settings.changepassword');
    Route::post('/change-password', 'ChangePasswordController@store')->name('settings.changepassword');
});
