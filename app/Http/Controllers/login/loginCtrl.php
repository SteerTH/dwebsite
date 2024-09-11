<?php

namespace App\Http\Controllers\login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class loginCtrl extends Controller
{
    public function vistalogin(){

        return view('login/frmLogin');

    }
}
