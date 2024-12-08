<?php

namespace App\Livewire\PatientPage;

use App\Livewire\Forms\AppointmentForm;
use App\Models\Appointment;
use App\Models\Dentist;
use App\Models\Schedule;
use App\Traits\HasUpdateAction;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Edit extends Component
{
    use HasUpdateAction;
    public $dentists;
    public $schedules;
    public AppointmentForm $form;

    public function getRouteName(): string
    {
        return 'patient-appointments.index';
    }

    public function getSuccessMessage(): string
    {
        return 'Appoinment Details Updated Successfully';
    }

    public function mount($id)
    {
        $this->dentists = Dentist::select(['first_name', 'last_name', 'id'])->get()->pluck('full_name', 'id');

        $this->schedules = Schedule::select(['id', 'from', 'to'])->get()->pluck('timeslot', 'id');

        $this->form->setAppointmentForm(Appointment::findOrFail($id));
    }

    #[Layout('layouts.patient')]
    public function render()
    {
        return view('livewire.patient-page.edit');
    }
}
