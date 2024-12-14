<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Appointment;
use Carbon\Carbon;
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
        $this->appointments = Appointment::where('patient_id', auth('patient')->id())
            ->where('status', 'approved')
            ->get()
            ->map(function ($appointment) {
                return [
                    'title' => "My Appointment",
                    'start' => Carbon::createFromFormat('F d, Y', $appointment->date)->format('Y-m-d'),
                ];
            })->toArray();
    }

    public function render()
    {
        return view('livewire.calendar');
    }
}
