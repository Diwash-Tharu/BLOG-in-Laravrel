<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Register;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/register', [Register::class, 'register'])->name('register');

Route::post('/register/product', [Register::class, 'registerData'])->name('register.data');

Route::get('/', [Register::class, 'HomePage'])->name('home');

Route::get('/product/view/{id}', [Register::class, 'productView'])->name('product.view');

Route::get('/product/edit/delete',[Register::class, 'editDelete'])->name('product.edit.delete');

Route::delete('/product/delete/{id}', [Register::class, 'delete'])->name('products.delete');

Route::get('/product/edit/{id}', [Register::class, 'edit'])->name('product.edit');

Route::put('/product/update/{id}', [Register::class, 'update'])->name('product.update');

Route::post('/product/search', [Register::class, 'search'])->name('product.search');

Route::get('/user/login', [Register::class, 'search'])->name('user.login');

Route::post('/user/login', [Register::class, 'login'])->name('user.login.data');

Route::get('/user/register', [Register::class, 'logout'])->name('user.register');



