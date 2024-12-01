<?php

namespace App\Livewire\Forms;

use App\Models\Appointment;
use Illuminate\Support\Number;
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
    public $appointment_number;

    public function rules()
    {
        return [
            'patient_id' => ['required'],
            'dentist_id' => ['required'],
            'schedule_id' => ['required'],
            'concern' => ['required'],
            'remarks' => ['sometimes'],
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
        $this->appointment_number = 'AN-' . random_int(100000, 999999);
        return Appointment::create($this->all());
    }

    public function update()
    {
        $this->validate();
        $appointment = Appointment::find($this->appointment_id);
        $appointment->update($this->all());
        return $appointment->fresh();
    }

    public function setAppointmentForm(Appointment $appointment)
    {
        $this->appointment_id = $appointment->id;
        $this->patient_id = $appointment->patient_id;
        $this->dentist_id = $appointment->dentist_id;
        $this->schedule_id = $appointment->schedule_id;
        $this->concern = $appointment->concern;
        $this->remarks = $appointment->remarks;
        $this->status = $appointment->status;
    }
}
