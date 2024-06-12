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
        $notification = DB::table('notifications')->get();

        return view('user.doctors', compact('doctor', 'notification'));
    }
    public function doctorList(Request $request)
    {
        $doctorList = Doctor::all();
        $x = DB::select("SELECT * FROM doctors");
        $notification = DB::table('notifications')->get();

        // dd($doctorList);
        return view('admin.doctor.doctor', compact('doctorList', 'notification'));
    }

    public function addDoctor($request)
    {

        $notification = DB::table('notifications')->get();
        // $notification = DB::table('notifications')->get();

        return view('admin.doctor.doctor', compact('notification'));
        // return view();
    }

    public function doctorDetails(Request $request)
    {
        $doctorsData = DB::select("SELECT * FROM doctors WHERE id =?", [$request->id]);
        $notification = DB::table('notifications')->get();

        // dd($doctorsData);
        return view('admin.doctor.edit', compact('doctorsData', 'notification'));
    }
}