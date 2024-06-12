<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;

class AboutController extends Controller
{
    public function about()
    {
        $doctor = doctor::all();

        return view('user.about', compact('doctor'));
    }
}
