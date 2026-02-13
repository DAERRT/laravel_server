<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

Route::get('/register', [RegisterController::class, 'create'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);



Route::get('/', [LoginController::class, 'create'])->name('login');
Route::post('/', [LoginController::class, 'store']);

Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');

Route::get('/account', [AccountController::class,'index'])->name('account')->middleware('auth');

Route::get('/home', [HomeController::class,'index'])->name('home')->middleware('auth');

Route::get('/account/change-password', [AccountController::class,'showChangePass'])->name('changepass')->middleware('auth');
Route::post('/account/change-password', [AccountController::class,'changePass'])->middleware('auth');

Route::get('/account/update', [AccountController::class,'showUpdate'])->name('update')->middleware('auth');
Route::post('/account/update', [AccountController::class,'update'])->middleware('auth');
