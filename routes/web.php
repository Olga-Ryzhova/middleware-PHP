<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main.index');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

Auth::routes();

