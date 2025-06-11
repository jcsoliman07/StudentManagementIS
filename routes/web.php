<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('register', [AuthController::class, 'register']);
Route::post('register', [AuthController::class, 'registerpost'])->name('register.post'); //This will be call in form