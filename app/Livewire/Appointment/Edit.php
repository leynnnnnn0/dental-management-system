<?php

namespace App\Livewire\Appointment;

use App\Livewire\Forms\AppointmentForm;
use App\Models\Appointment;
use App\Models\Dentist;
use App\Models\Patient;
use App\Models\Schedule;
use App\Traits\HasUpdateAction;
use Livewire\Component;

class Edit extends Component
{
    use HasUpdateAction;
    public $patients;
    public $dentists;
    public $schedules;
    public $statuses = ['pending' => 'pending', 'approved' => 'approved'];
    public AppointmentForm $form;
    public function getRouteName(): string
    {
        return 'appointments.index';
    }

    public function getSuccessMessage(): string
    {
        return 'Appoinment Details Updated Successfully';
    }

    public function mount($id)
    {
        $this->patients = Patient::select(['first_name', 'last_name', 'id'])->get()->pluck('full_name', 'id');


        $this->dentists = Dentist::select(['first_name', 'last_name', 'id'])->get()->pluck('full_name', 'id');

        $this->schedules = Schedule::select(['id', 'from', 'to'])->get()->pluck('timeslot', 'id');

        $this->form->setAppointmentForm(Appointment::findOrFail($id));
    }
    public function render()
    {
        return view('livewire.appointment.edit');
    }
}
