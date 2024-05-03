<?php

use App\Http\Controllers\LogInController;
use Illuminate\Support\Facades\Route;
use App\Providers\RouteServiceProvider;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/i', function () {
    return view('index');
});
Route::get('/user', [LogInController::class, 'title'])->name('LogIn');


Route::get('/map', function () {
    return view('maps123');
});

