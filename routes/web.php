<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [AuthController::class, 'register_page'])->name('register-page');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::get('/login', [AuthController::class, 'login_page'])->name('login-page');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::prefix('/user')->group(function() {
    Route::get('/index', [UserController::class, 'index'])->name('user.index');

});