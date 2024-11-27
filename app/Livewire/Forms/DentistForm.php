<?php

namespace App\Livewire\Forms;

use App\Models\Dentist;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class DentistForm extends Form
{
    public $dentist_id;
    public $first_name;
    public $middle_name;
    public $last_name;
    public $specialization;
    public $license_number;
    public $contact_number;
    public $email;
    public $password;
    public function rules()
    {
        return [
            'first_name' => ['required'],
            'last_name' => ['required'],
            'middle_name' => ['sometimes'],
            'specialization' => ['required'],
            'license_number' => ['required'],
            'email' => ['required', 'email', 'max:255',  Rule::unique('users')->ignore($this->dentist_id)],
            'contact_number' => ['required'],
            'password' => ['required']
        ];
    }

    public function setUserForm(Dentist $dentist)
    {
        $this->dentist_id = $dentist->id;
        $this->first_name = $dentist->first_name;
        $this->middle_name = $dentist->middle_name;
        $this->last_name = $dentist->last_name;
        $this->email = $dentist->email;
        $this->contact_number = $dentist->contact_number;
        $this->specialization = $dentist->specialization;
        $this->license_number = $dentist->license_number;
    }

    public function store()
    {
        $this->validate();
        return Dentist::create($this->all());
    }
}
