<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Register;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [Register::class, 'register'])->name('register');

Route::post('/register/product', [Register::class, 'registerData'])->name('register.data');

Route::get('/home', [Register::class, 'HomePage'])->name('home');
