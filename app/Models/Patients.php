<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patients extends Model
{
    use HasFactory;

    protected $table = 'patients';

    protected $fillable = [
        'doctor_id',
        'user_id',
        'name',
        'date_of_birth',
        'age',
        'gender',
        'address',
        'blood_group',
        'home_telephone',
        'mobile_number',
        'guardian_name',
        'guardian_relationship',
        'guardian_nic',
        'remarks',
    ];
}
