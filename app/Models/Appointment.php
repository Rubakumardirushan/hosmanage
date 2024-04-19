<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $fillable = [
        'patient_name',
        'doctor_name',
        'hospital_name',
        'date',
        'appointment_number',
        'payment_reference',
        'status',
        'speciality',
    ];
}
