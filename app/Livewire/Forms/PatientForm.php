<?php

namespace App\Livewire\Forms;

use App\Models\Patient;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class PatientForm extends Form
{
    public $patient_id;
    public $first_name;
    public $middle_name;
    public $last_name;
    public $contact_number;
    public $email;
    public $password;

    public function rules()
    {
        return [
            'first_name' => ['required'],
            'last_name' => ['required'],
            'middle_name' => ['sometimes'],
            'email' => ['required', 'email', 'max:255',  Rule::unique('patients')->ignore($this->patient_id)],
            'contact_number' => ['required', 'regex:/^09\d{9}$/'],
            'password' => ['required', 'min:8']
        ];
    }

    public function setUserForm(Patient $patient)
    {
        $this->patient_id = $patient->id;
        $this->first_name = $patient->first_name;
        $this->middle_name = $patient->middle_name;
        $this->last_name = $patient->last_name;
        $this->email = $patient->email;
        $this->contact_number = $patient->contact_number;
    }

    public function update()
    {

        $patient = Patient::findOrFail($this->patient_id);
        $patient->update($this->all());
        return $patient->fresh();
    }

    public function store()
    {
        $this->validate();
        if ($this->password) {
            $this->password = Hash::make($this->password);
        }
        return Patient::create($this->all());
    }
}
