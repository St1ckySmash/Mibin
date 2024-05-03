<?php

use App\Http\Controllers\LogInController;
use Illuminate\Support\Facades\Route;
use App\Providers\RouteServiceProvider;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/user', 'LogInController@title');

Route::get('/user', [LogInController::class, 'title'])->name('LogIn');
