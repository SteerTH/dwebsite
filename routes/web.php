<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registro\registrosctr;
Route::get('/', function () {
    return view('welcome');
});

Route::get("registrar",[registrosctr::class,"vistaregistrar"]);
