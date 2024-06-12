<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AddDoctorController extends Controller
{
    public function index()
    {
        $notification = DB::table('notifications')->get();

        return view("admin.doctor.add_doctor", compact("notification"));
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

    public function addNewDoctor(Request $request)
    {

        // dd($request->image);
        $doctor = new Doctor();

        $doctor->name = $request->name;
        $doctor->email = $request->email;
        $doctor->gender = $request->gender;
        $doctor->dob = $request->dob;
        $doctor->speciality = $request->speciality;
        $doctor->address = $request->address;
        $doctor->image = $request->image;
        $doctor->state = $request->state;
        $doctor->time = $request->working_time;
        $doctor->phone = $request->contact;
        $doctor->day = $request->working_days;
        $doctor->fee = $request->fee;
        $doctor->membership = $request->membership;
        $doctor->description = $request->description;
        $doctor->room = $request->room;

        $doctor->save();

        return redirect()->back();
    }


    public function editDoctor(Request $request)
    {
        // dd($request->id);
        // $doctor = new Doctor();
        $doctor = Doctor::find($request->id);

        $doctor->name = $request->name;
        $doctor->email = $request->email;
        $doctor->gender = $request->gender;
        $doctor->dob = $request->dob;
        $doctor->speciality = $request->speciality;
        $doctor->address = $request->address;
        $doctor->image = $request->image;
        $doctor->state = $request->state;
        $doctor->time = $request->working_time;
        $doctor->phone = $request->contact;
        $doctor->day = $request->working_days;
        $doctor->fee = $request->fee;
        $doctor->membership = $request->membership;
        $doctor->description = $request->description;
        $doctor->room = $request->room;

        $doctor->save();

        return redirect()->route('admin.doctor');
    }
}
