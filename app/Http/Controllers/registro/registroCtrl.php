<?php

namespace App\Http\Controllers\registro;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class registroCtrl extends Controller
{
    public function vistaregistrar(){

        return view('registro/frmRegistro');

    }
}
