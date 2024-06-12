<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicOrders extends Model
{
    use HasFactory;

    protected $table = "medi_orders";


    // protected $fillable = ['name', 'phone', 'speciality', 'room', 'time', 'day', 'fee', 'description', 'image'];
}
