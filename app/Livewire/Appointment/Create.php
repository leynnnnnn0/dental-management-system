<?php

namespace App\Livewire\Appointment;

use App\Livewire\Forms\AppointmentForm;
use App\Traits\HasCreateAction;
use Livewire\Component;

class Create extends Component
{
    use HasCreateAction;
    public AppointmentForm $form;
    public function getMessage(): string
    {
        return 'New Appointment Created Successfully!';
    }

    public function getRouteName(): string
    {
        return 'appointments.index';
    }
    public function render()
    {
        return view('livewire.appointment.create');
    }
}
