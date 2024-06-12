<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;

class LandingController extends Controller
{
    public function landing()
    {   
        $doctor = doctor::all();

        return view('welcome', compact('doctor'));
    }
}
