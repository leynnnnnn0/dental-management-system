<?php

namespace App\Livewire\Patient;

use App\Livewire\Forms\PatientForm;
use App\Traits\HasCreateAction;
use Livewire\Component;

class Create extends Component
{
    use HasCreateAction;
    public PatientForm $form;

    public function getRouteName(): string
    {
        return 'patients.index';
    }

    public function getMessage(): string
    {
        return 'New Patient Created Successfully!';
    }
    public function render()
    {
        return view('livewire.patient.create');
    }
}
