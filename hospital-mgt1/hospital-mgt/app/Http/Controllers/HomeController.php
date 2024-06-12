<?php

namespace App\Http\Controllers;


use App\Models\Appointments;
use Illuminate\Http\Request;
use App\Models\Doctor;
use Illuminate\Support\Facades\Auth;





class HomeController extends Controller
{
    public function home()
    {
        $doctor = doctor::all();
        
        return view('user.home', compact('doctor'));
    }

    public function appointment(Request $request)
{
    // Create a new appointment instance
    $data = new Appointments;

    // Assign values from the request
    $data->name = $request->name;
    $data->email = $request->email;
    $data->phone = $request->number;
    $data->doctor = $request->doctor;
    $data->date = $request->date;
    $data->message = $request->message;
    $data->status = "In progress";

    // Check if the user is authenticated
    if (Auth::check()) {
        $data->user_id = Auth::user()->id;
    }


    // Find the doctor
    $doctor = Doctor::where('name', $request->doctor)->first();


    // Check if the doctor is found
    if ($doctor) {
        $data->doctor_id = $doctor->id;
        $data->fee = $doctor->fee;
    }

    // Save the appointment data
    $data->save();

    // Redirect back to the previous page
    return redirect()->back()->with('message', 'Appointment Request successful, we will get back to you shortly.');
}

}
