<?php

namespace App\Livewire;

use Livewire\Component;

class Calendar extends Component
{
    public function getAppointments()
    {
        return [];
    }

    public function render()
    {
        return view('livewire.calendar');
    }
}
