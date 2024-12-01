<?php

namespace App\Livewire;

use App\Models\Appointment as ModelsAppointment;
use App\Traits\HasDeleteAction;
use Livewire\Component;
use Livewire\WithPagination;

class Appointment extends Component
{
    use HasDeleteAction, WithPagination;
    public $keyword;
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
        $query = ModelsAppointment::query();
        if ($this->keyword)
            $query->whereAny(['appointment_number'], 'like', "%{$this->keyword}%");
        $appointments = $query->paginate(10);
        return view('livewire.appointment', [
            'appointments' => $appointments
        ]);
    }
}
