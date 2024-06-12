<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointments extends Model
{
    use HasFactory;

    protected $table = "appointments";


    // protected $fillable = ['name', 'phone', 'speciality', 'room', 'time', 'day', 'fee', 'description', 'image'];

}