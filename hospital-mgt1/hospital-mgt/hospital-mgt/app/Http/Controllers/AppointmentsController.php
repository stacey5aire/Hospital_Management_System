<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppointmentsController extends Controller
{
    public function appointments()
    {
        return view('user.appointment.myappointment');
    }
}
