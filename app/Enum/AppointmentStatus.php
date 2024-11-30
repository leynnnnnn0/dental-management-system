<?php

namespace App\Enum;

enum AppointmentStatus
{
    public static function values()
    {
        return [
            'approved',
            'pending'
        ];
    }
}
