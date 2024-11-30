<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    /** @use HasFactory<\Database\Factories\ScheduleFactory> */
    use HasFactory;

    protected $fillable = [
        'from',
        'to'
    ];

    public function appointment()
    {
        return $this->hasMany(Appointment::class);
    }

    public function getTimeslotAttribute()
    {
        return "$this->from - $this->to";
    }
}
