<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Consult;
use App\Models\Contact;

class ConsultController extends Controller
{
    public function consult()
    {
        return view('user.consult');
    }

    public function make_consultation(Request $request)
    {
        // Create a consultation instance
        $data = new Contact;

        // Assign values from the request
        $data->name = $request->name;
        $data->email = $request->email;
        $data->subject = $request->subject;
        $data->message = $request->message;
        $data->status = "Pending";
        $data->user_id = Auth::user()->id;

        // Save the get_in_touch data
        $data->save();

        // Redirect back to the previous page
        return redirect()->back()->with('message', 'Consultation submitted successfully, we will get back to you shortly.');
    }
}
