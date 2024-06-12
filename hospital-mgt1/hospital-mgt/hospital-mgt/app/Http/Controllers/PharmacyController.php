<?php

namespace App\Http\Controllers;

use App\Models\Pharmachies;
use Illuminate\Http\Request;

class PharmacyController extends Controller
{
    public function index()
    {
        $pharmacies = Pharmachies::all();
        return view("admin.pharmacy.pharmacy", compact('pharmacies'));
    }
    public function create()
    {
        return view("admin.pharmacy.add_purchase");
    }

    // public function store(Request $request)
    // {
    // }
}