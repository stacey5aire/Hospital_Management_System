<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class Doctor extends Model
{
    use HasFactory;
    use HasApiTokens;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    protected $table = "doctors";

    protected $fillable = ['name', 'gender', 'date_of_birth', 'speciality', 'membership', 'adress', 'state', 'working_time', 'contact'];

    protected $doctor = ['name', 'gender', 'date_of_birth', 'speciality', 'membership', 'adress', 'state', 'working_time', 'contact'];
}
