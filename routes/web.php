<?php

use App\Http\Controllers\registro\registroCtrl;
use App\Http\Controllers\login\loginCtrl;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/registro",[registroCtrl::class,"vistaregistrar"]);
Route::get("/login",[loginCtrl::class,"vistalogin"]);
