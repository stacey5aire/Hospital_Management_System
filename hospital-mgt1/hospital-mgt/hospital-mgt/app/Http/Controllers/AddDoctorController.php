<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AddDoctorController extends Controller
{
    public function index()
    {
        return view("admin.doctor.add_doctor");
    }


    public function edit($id)
    {
        $doctor = Doctor::findOrFail($id); // Assuming you have Doctor model
        return view("admin.doctor.edit_doctor", compact('doctor'));
    }

    public function delete(Request $request, $id)
    {
        $doctor = Doctor::findOrFail($id);
        $doctor->delete();
        return redirect()->route('admin.doctor')->with('success', '');
        // return response()->json(['message' => 'Doctor deleted successfully']);
    }
}