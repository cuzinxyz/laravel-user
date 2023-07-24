<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'check.role'])->group(function () {
    Route::get('/admin', function () {
        return view('welcome');
    });
});

Route::get('/', function () {
    return view('welcome');
});

Route::controller(LoginController::class)->group(function () {
    Route::get('login', 'login')->name('login');
    Route::post('login', 'auth')->name('auth');
    Route::get('logout', 'logout')->name('logout');
});
