<?php

use App\Http\Controllers\LogInController;
use App\Http\Controllers\ThrashController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Providers\RouteServiceProvider;


Route::get('/user', [UserController::class, 'user_show'])->name('user_show');
Route::get('/thrash',[ThrashController::class, 'thrash_show'])->name('thrash_show');


