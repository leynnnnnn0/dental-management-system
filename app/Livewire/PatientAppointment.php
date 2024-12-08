<?php

namespace App\Livewire;

use App\Models\Appointment;
use App\Traits\HasDeleteAction;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

class PatientAppointment extends Component
{
    use WithPagination;
    public $keyword;
    #[Layout('layouts.patient')]
    public function render()
    {
        $query = Appointment::query();
        if ($this->keyword)
            $query->whereAny(['appointment_number'], 'like', "%{$this->keyword}%");
        $appointments = $query->paginate(10);
        return view('livewire.patient-appointment', [
            'appointments' => $appointments
        ]);
    }
}
