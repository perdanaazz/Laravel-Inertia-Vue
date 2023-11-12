<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [IndexController::class, 'index']);
Route::get('/about', [IndexController::class, 'about']);
Route::get('/admin', [IndexController::class, 'admin']);
