<?php

namespace App\Http\Controllers;

use App\Models\Appointments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PatientsController extends Controller
{
    public function index()
    {
        $appointments = Appointments::all();
        $notification = DB::table('notifications')->get();

        return view("admin.patients.patients", compact('appointments', 'notification'));
    }
}
