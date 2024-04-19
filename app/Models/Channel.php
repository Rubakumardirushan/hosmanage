<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    use HasFactory;
    protected $fillable = [
        'hospital_name',
        'doctor_name',
        'date',
        'start_time',
        'end_time',
        'maximum_patients_perday',
        'channel_type',
        'channel_fee',
    ];
}
