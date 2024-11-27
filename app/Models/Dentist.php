<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dentist extends Model
{
    /** @use HasFactory<\Database\Factories\DentistFactory> */
    use HasFactory;

    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'specialization',
        'license_number',
        'contact_number',
        'email',
        'password'
    ];
}
