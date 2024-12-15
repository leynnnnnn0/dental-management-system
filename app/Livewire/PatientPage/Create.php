<?php

namespace App\Livewire\PatientPage;

use App\Livewire\Forms\AppointmentForm;
use App\Models\Dentist;
use App\Models\Patient;
use App\Models\Schedule;
use App\Traits\HasCreateAction;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Create extends Component
{
    use HasCreateAction;
    public AppointmentForm $form;
    public $dentists;
    public $schedules;

    public function getMessage(): string
    {
        return 'New Appointment Created Successfully!';
    }

    public function getRouteName(): string
    {
        return 'patient-appointments.index';
    }

    public function mount()
    {
        $this->form->patient_id = Auth::guard('patient')->user()->id;
        $this->form->status = 'pending';
        $this->dentists = Dentist::select(['first_name', 'last_name', 'id'])->get()->pluck('full_name', 'id');

        $this->schedules = Schedule::select(['id', 'from', 'to'])->get()->pluck('timeslot', 'id');
    }


    #[Layout('layouts.patient')]
    public function render()
    {
        return view('livewire.patient-page.create');
    }
}
