<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    /** @use HasFactory<\Database\Factories\AppointmentFactory> */
    use HasFactory;

    protected $fillable = [
        'patient_id',
        'dentist_id',
        'schedule_id',
        'date',
        'appointment_number',
        'concern',
        'remarks',
        'status'
    ];
    

    public function getDateAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->format('F d, Y');
    }


    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function dentist()
    {
        return $this->belongsTo(Dentist::class);
    }

    public function schedule()
    {
        return $this->belongsTo(Schedule::class);
    }
}
