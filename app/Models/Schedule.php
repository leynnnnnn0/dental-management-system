<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    /** @use HasFactory<\Database\Factories\ScheduleFactory> */
    use HasFactory;

    protected $casts = [
        'from' => 'datetime:H:i',
        'to' => 'datetime:H:i'
    ];

    public function getFromAttribute($value)
    {
        return \Carbon\Carbon::createFromFormat('H:i:s', $value)->format('g:i A');
    }

    public function getToAttribute($value)
    {
        return \Carbon\Carbon::createFromFormat('H:i:s', $value)->format('g:i A');
    }

    public function appointment()
    {
        return $this->hasMany(Appointment::class);
    }

    public function getTimeslotAttribute()
    {
        return "$this->from - $this->to";
    }
}
