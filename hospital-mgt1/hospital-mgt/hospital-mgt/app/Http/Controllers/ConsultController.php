<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsultController extends Controller
{
    public function consult()
    {
        return view('user.consult');
    }
}
