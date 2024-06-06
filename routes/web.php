<?php

use Illuminate\Support\Facades\Route;



use App\Http\Controllers\RegisterController;
use App\Http\Controllers\usercontroller;
use App\Http\Middleware\user;

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('dashboard');
Route::post('/register', [RegisterController::class, 'register'])->name('register');

Route::get('/show', [usercontroller::class, 'showuser']);

Route::get('/user/{email}', [usercontroller::class, 'singleuser'])->name('view.user');
Route::get('/delete/{email}', [usercontroller::class, 'deleteuser'])->name('delete.user');
Route::post('/updatepage/{email}', [usercontroller::class, 'updatepage'])->name('update.page');
Route::get('/updatepage/{email}', [usercontroller::class, 'updateuser'])->name('update.user');

