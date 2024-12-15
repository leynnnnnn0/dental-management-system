<?php

namespace App\Livewire;

use App\Models\Appointment;
use App\Traits\HasDeleteAction;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

class PatientAppointment extends Component
{
    use WithPagination, HasDeleteAction;
    public $keyword;

    public function getRouteName(): string
    {
        return 'patient-appointments.index';
    }

    public function getModel()
    {
        return Appointment::class;
    }

    public function getSuccessMessage(): string
    {
        return 'Appointment Deleted Successfully';
    }

    #[Layout('layouts.patient')]
    public function render()
    {
    
        $query = Appointment::query()->where('patient_id', auth('patient')->id());
        if ($this->keyword)
            $query->whereAny(['appointment_number'], 'like', "%{$this->keyword}%");
        $appointments = $query->latest()->paginate(10);
        return view('livewire.patient-appointment', [
            'appointments' => $appointments
        ]);
    }
}
