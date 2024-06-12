<?php

namespace App\Http\Controllers;

use App\Models\Appointments;
use Illuminate\Http\Request;

class PatientsController extends Controller
{
    public function index()
    {
        $appointments = Appointments::all();
        return view("admin.patients.patients", compact('appointments'));
    }
}