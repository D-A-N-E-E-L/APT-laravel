<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
Route::controller(UserController::class)->group(function() {
        Route::get('/register', 'register')->name('register');
        Route::post('/store', 'store')->name('store');
        Route::get('/login', 'login')->name('login');
        Route::post('/authenticate', 'authenticate')->name('authenticate');
        Route::get('/', 'home')->name('home');
        Route::get('/info', 'info')->name('info');
        Route::get('/contacts', 'contacts')->name('contacts');
        Route::post('/logout', 'logout')->name('logout');
});


