<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicOrders extends Model
{
    use HasFactory;

    protected $table = "medi_orders";


    protected $fillable = [
        'u_name',
        'm_name',
        'email',
        'phone',
        'user_id',
        'm_id',
        'price',
        'quantity',
        'vendor',
        'date',
        'payment_status',
        'delivery_status',
    ];
}