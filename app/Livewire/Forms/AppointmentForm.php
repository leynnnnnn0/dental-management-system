<?php

namespace App\Livewire\Forms;

use App\Models\Appointment;
use Livewire\Attributes\Validate;
use Livewire\Form;

class AppointmentForm extends Form
{
    public $appointment_id;
    public $patient_id;
    public $dentist_id;
    public $schedule_id;
    public $concern;
    public $remarks;
    public $status;

    public function rules()
    {
        return [
            'patient_id' => ['required'],
            'dentist_id' => ['required'],
            'schedule_id' => ['required'],
            'concern' => ['required'],
            'remarks' => ['sometimes'],
            'status' => ['required']
        ];
    }

    public function messages()
    {
        return [
            'patient_id.required' => 'The patient field is required',
            'dentist_id.required' => 'The dentist field is required',
        ];
    }

    public function store()
    {
        $this->validate();
        return Appointment::create($this->all());
    }

    public function update()
    {
        $this->validate();
        $appointment = Appointment::find($this->appointment_id);
        $appointment->update($this->all());
        return $appointment->fresh();
    }
}
