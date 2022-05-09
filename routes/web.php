<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\TodoController;

Route::get('/', function () {
    return view('site.index');
});

// auth rout for all users, when they logged in
Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
});

Route::get('/admin', 'App\Http\Controllers\AdminController@index')->name('dashboard.newtodo');

// routes for admin only
Route::group(['middleware' => ['auth', 'role:admin']], function () {
    Route::get('/dashboard/userlist', 'App\Http\Controllers\AdminController@userlist')->name('dashboard.userlist');
    Route::get('/registerr', 'App\Http\Controllers\RegisterUserController@create')->name('registerr');
    Route::post('/registerr', 'App\Http\Controllers\RegisterUserController@store')->name('registerr');    
});

require __DIR__.'/auth.php';
