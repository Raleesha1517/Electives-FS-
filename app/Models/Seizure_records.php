<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seizure_records extends Model
{
    use HasFactory;

    protected $table = 'seizure_records';

    protected $fillable = [
        'patient_id',
        'date',
        'time',
        'temperature',
        'fever',
        'duration',
        'episode_number',
        'description',
    ];
    public function patient()
    {
        return $this->belongsTo(Patients::class);
    }
}
