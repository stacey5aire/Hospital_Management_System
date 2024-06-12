<?php

namespace App\Http\Controllers;

use App\Models\Appointments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class AppointmentsController extends Controller
{
    public function appointments()
    {
        $userid = Auth::user()->id;

        $appoint = Appointments::where('user_id', $userid)->get();

        return view('user.appointment.myappointment', compact('appoint'));
    }

    public function cancel_appoint($id)
    {
        $appoint = Appointments::find($id);
        $appoint->delete();

        return redirect()->back();
    }

    public function adminCancelAppointment(Request $request)
    {
        // dd($request->id);
        $appointment = Appointments::find($request->id);

        if (!$appointment) {
            return response()->json(['error' => 'Appointment not found'], 404);
        }
        $appointment->status = 'Cancelled';
        $appointment->save();
        return redirect()->back();
    }

    public function adminDeleteAppointment(Request $request)
    {
        $appointment = Appointments::find($request->id);
        if (!$appointment) {
            return response()->json(['error' => 'Appointment not found'], 404);
        }
        $appointment->status = 'Completed';
        $appointment->save();
        return redirect()->back();
    }

    public function adminMarkCompleteAppointment(Request $request)
    {
        // dd($request->id);
        $appointment = Appointments::find($request->id);

        if (!$appointment) {
            return response()->json(['error' => 'Appointment not found'], 404);
        }
        $appointment->delete();
        return redirect()->back();
        // return response()->json(['message' => 'Appointment cancelled successfully'], 200);
    }
}
