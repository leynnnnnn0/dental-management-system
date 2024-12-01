<?php

namespace App\Livewire\Appointment;

use App\Livewire\Forms\AppointmentForm;
use App\Models\Appointment;
use App\Models\Dentist;
use App\Models\Patient;
use App\Models\Schedule;
use App\Traits\HasCreateAction;
use Livewire\Component;

class Create extends Component
{
    use HasCreateAction;
    public AppointmentForm $form;
    public $patients;
    public $dentists;
    public $schedules;
    public $statuses = ['pending' => 'pending', 'approved' => 'approved'];
    public function getMessage(): string
    {
        return 'New Appointment Created Successfully!';
    }

    public function getRouteName(): string
    {
        return 'appointments.index';
    }

    public function mount()
    {
        $this->patients = Patient::select(['first_name', 'last_name', 'id'])->get()->pluck('full_name', 'id');


        $this->dentists = Dentist::select(['first_name', 'last_name', 'id'])->get()->pluck('full_name', 'id');

        $this->schedules = Schedule::select(['id', 'from', 'to'])->get()->pluck('timeslot', 'id');
    }
    public function render()
    {
        return view('livewire.appointment.create');
    }
}
