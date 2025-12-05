<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [AuthController::class, 'register_page'])->name('register-page');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::get('/login', [AuthController::class, 'login_page'])->name('login-page');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::prefix('/user')->middleware(['auth'])->group(function() {
    Route::get('/index', [UserController::class, 'index'])->name('user.index');

    Route::get('/products', [UserController::class, 'products'])->name('products.index');

    Route::get('/profile', [UserController::class, 'profile'])->name('profile.index');

    

});

Route::prefix('/admin')->middleware(['auth', 'admin'])->group(function() {
    Route::get('/index', [AdminController::class, 'index'])->name('admin.index');

    Route::resource('/products', ProductController::class);

});