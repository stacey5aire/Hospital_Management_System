<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lab extends Model
{
    use HasFactory;

    protected $table = "lab_orders";


    // protected $fillable = ['name', 'phone', 'speciality', 'room', 'time', 'day', 'fee', 'description', 'image'];
}
