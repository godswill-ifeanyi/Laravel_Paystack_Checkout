<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;

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

    Route::get('/products', [UserController::class, 'products'])->name('user.products');

    Route::get('/profile', [UserController::class, 'profile'])->name('profile.index');

});

Route::prefix('/admin')->middleware(['auth', 'admin'])->group(function() {
    Route::get('/index', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/users', [AdminController::class, 'users'])->name('admin.users');
    //Route::get('/products', [AdminController::class, 'products'])->name('admin.products');
    Route::get('/orders', [AdminController::class, 'orders'])->name('admin.orders');
    Route::get('/profile', [AdminController::class, 'profile'])->name('admin.profile');
    Route::get('/settings', [AdminController::class, 'settings'])->name('admin.settings');

    Route::resource('/products', ProductController::class);

});