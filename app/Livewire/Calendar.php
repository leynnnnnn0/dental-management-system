<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Appointment; // Assuming you have an Appointment model
use Illuminate\Support\Facades\Auth;

class Calendar extends Component
{
    public $appointments = [];

    public function mount()
    {
        $this->loadApprovedAppointments();
    }

    public function loadApprovedAppointments()
    {
        $this->appointments = Appointment::where('patient_id', auth()->id())
            ->where('status', 'approved')
            ->get()
            ->map(function ($appointment) {
                return [
                    'title' => "My Appointment",
                    'start' => $appointment->date
                ];
            });
    }

    public function render()
    {
        return view('livewire.calendar', [
            'appointments' => $this->appointments
        ]);
    }
}
