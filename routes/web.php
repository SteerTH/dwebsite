<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registro\registrosctr;
Route::get('/', function () {
    return view('welcome');
});

Route::get("registrar",[registrosctr::class,"vistaregistrar"]);


use App\Http\Controllers\Auth\RegisterController;

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
