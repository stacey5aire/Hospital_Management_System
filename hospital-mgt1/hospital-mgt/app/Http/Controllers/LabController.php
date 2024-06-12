<?php

namespace App\Http\Controllers;

use App\Models\Lab;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LabController extends Controller
{
    public function index()
    {
        $lab_orders = Lab::all();
        $notification = DB::table('notifications')->get();

        return view("admin.lab.laboratory", compact('lab_orders', 'notification'));
    }
}
