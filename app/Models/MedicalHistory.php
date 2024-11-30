<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalHistory extends Model
{
    /** @use HasFactory<\Database\Factories\MedicalHistoryFactory> */
    use HasFactory;

    protected $fillable = [
        'patient_id',
        'dentist_id',
        'concern',
        'treatment',
        'remarks'
    ];


    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function dentist()
    {
        return $this->belongsTo(Dentist::class);
    }
}
