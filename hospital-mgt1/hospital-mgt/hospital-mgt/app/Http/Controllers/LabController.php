<?php

namespace App\Http\Controllers;

use App\Models\Lab;
use Illuminate\Http\Request;

class LabController extends Controller
{
    public function index()
    {
        $lab_orders = Lab::all();
        return view("admin.lab.laboratory", compact('lab_orders'));
    }
}
