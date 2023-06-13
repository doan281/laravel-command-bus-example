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
    //return view('welcome');
    return redirect(route('users.index'));
});

Route::prefix('users')->group(function() {
    Route::get('/', '\App\Http\Controllers\User\Controllers\UserController@index')->name('users.index');

    Route::get('/create', '\App\Http\Controllers\User\Controllers\UserController@create')->name('users.create');
    Route::post('/store', '\App\Http\Controllers\User\Controllers\UserController@store')->name('users.store');

    Route::get('/edit', '\App\Http\Controllers\User\Controllers\UserController@edit')->name('users.edit');
    Route::post('/update', '\App\Http\Controllers\User\Controllers\UserController@update')->name('users.update');

    Route::get('/delete', '\App\Http\Controllers\User\Controllers\UserController@delete')->name('users.delete');
});
