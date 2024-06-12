<?php

namespace App\Http\Controllers;

use App\Models\MedicOrders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashBoardController extends Controller
{
    public function index()
    {

        $medical_order_expenses = DB::select("SELECT sum(price*quantity) as expense FROM `medi_orders`  ");
        $doctor_salary_expenses = DB::select("SELECT sum(fee) as doctor_expenses FROM `doctors`");
        $total_lab_order_income = DB::select("SELECT sum(price) as total_lab_order_income FROM `lab_orders` where delivery_status != ?", ["cancelled"]);

        // dd($_SESSION['notification']);
        return view('admin.home', compact('medical_order_expenses', 'doctor_salary_expenses', 'total_lab_order_income'));
    }
}