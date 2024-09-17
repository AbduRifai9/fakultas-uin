<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(
    ['register' => false]
);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::resource('user', UserController::class);
    Route::resource('home', HomeController::class);
    Route::resource('pengumuman', PengumumanController::class);
});
