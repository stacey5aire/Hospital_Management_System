<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Doctor;
use Illuminate\Support\Facades\DB;

class DoctorController extends Controller
{
    public function doctor()
    {
        $doctor = doctor::all();
        return view('user.doctors', compact('doctor'));
    }
    public function doctorList(Request $request)
    {
        $doctorList = Doctor::all();
        $x = DB::select("SELECT * FROM doctors");
        // dd($doctorList);
        return view('admin.doctor.doctor', compact('doctorList'));
    }

    public function addDoctor($request)
    {
        return view('admin.doctor.doctor');
        // return view();
    }
}
