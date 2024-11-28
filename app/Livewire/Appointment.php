<?php

namespace App\Livewire;

use App\Models\Appointment as ModelsAppointment;
use App\Traits\HasDeleteAction;
use Livewire\Component;
use Livewire\WithPagination;

class Appointment extends Component
{
    use HasDeleteAction, WithPagination;
    public function getRouteName(): string
    {
        return 'appointments.index';
    }

    public function getModel()
    {
        return ModelsAppointment::class;
    }

    public function getSuccessMessage(): string
    {
        return 'Appointment Deleted Successfully';
    }
    public function render()
    {
        $appointments = ModelsAppointment::paginate(10);
        return view('livewire.appointment', [
            'appointments' => $appointments
        ]);
    }
}
