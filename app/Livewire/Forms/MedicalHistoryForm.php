<?php

namespace App\Livewire\Forms;

use App\Models\MedicalHistory;
use Livewire\Attributes\Validate;
use Livewire\Form;

class MedicalHistoryForm extends Form
{
    public $medical_history_id;
    public $patient_id;
    public $dentist_id;
    public $concern;
    public $treatment;
    public $remarks;

    public function rules()
    {
        return [
            'patient_id' => ['required'],
            'dentist_id' => ['required'],
            'treatment' => ['required'],
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
        return MedicalHistory::create($this->all());
    }

    public function update()
    {
        $this->validate();
        $appointment = MedicalHistory::find($this->medical_history_id);
        $appointment->update($this->all());
        return $appointment->fresh();
    }

    public function setAppointmentForm(MedicalHistory $medicalHistory)
    {
        $this->medical_history_id = $medicalHistory->id;
        $this->patient_id = $medicalHistory->patient_id;
        $this->dentist_id = $medicalHistory->dentist_id;
        $this->concern = $medicalHistory->concern;
        $this->remarks = $medicalHistory->remarks;
    }
}
