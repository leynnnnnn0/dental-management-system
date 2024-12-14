<?php

namespace App\Livewire;

use App\Models\Appointment;
use Livewire\Attributes\Layout;
use Livewire\Component;

class PatientDashboard extends Component
{
    public $approvedAppointments;
    public $pendingAppointments;
    public $completedAppointments;

    public function mount()
    {
        $this->approvedAppointments = Appointment::where('patient_id', auth('patient')->id())->where('status', 'approved')->count();
        $this->pendingAppointments = Appointment::where('patient_id', auth('patient')->id())->where('status', 'pending')->count();
        $this->completedAppointments = Appointment::where('patient_id', auth('patient')->id())->where('status', 'completed')->count();
    }
    #[Layout('layouts.patient')]
    public function render()
    {
        return view('livewire.patient-dashboard');
    }
}
