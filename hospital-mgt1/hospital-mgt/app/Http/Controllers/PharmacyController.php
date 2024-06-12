<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\MedicOrders;
use App\Models\Pharmachies;
use Illuminate\Http\Request;
// use DB;
use Illuminate\Support\Facades\DB;

class PharmacyController extends Controller
{
    public function index()
    {
        $doctors = Doctor::all();
        $notification = DB::table('notifications')->get();

        $pharmacies = Pharmachies::all();
        return view("admin.pharmacy.pharmacy", compact('pharmacies', 'notification', 'doctors'));
    }

    public function makePurchase(Request $request)
    {
        $string = $request->username;

        // Find the position of the ')' character
        $position = strpos($string, ')');

        if ($position !== false) {
            $extractedString = substr($string, $position + 1);
            $extractedString = trim($extractedString);
        } else {
            echo "Closing bracket ')' not found in the string.";
        }
        $userID = intval($extractedString);

        $parts = explode('(', $string);
        // Extract the part before the '(' character for username
        $extractedString = $parts[0];
        $extractedString = trim($extractedString);
        $user_name = $extractedString;

        $notification = DB::table('notifications')->get();

        // dd($request->payment_status);
        $doctor = Doctor::find($userID);

        $order = new MedicOrders();
        $order->u_name = $user_name;
        $order->m_name = $request->input('medicine');
        $order->email = $doctor->email;
        $order->phone = $doctor->phone;
        $order->user_id = $userID;
        $order->m_id = $request->input('medic_id');
        $order->price = $request->input('price');
        $order->quantity = $request->input('quantity');
        $order->vendor = $request->input('vendor');
        $order->date = $request->input('date');
        $order->payment_status = $request->payment_status;
        $order->delivery_status = $request->input('delivery_status');
        $order->save();

        return view("admin.pharmacy.purchase", compact('notification'));
    }
}