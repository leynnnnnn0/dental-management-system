<?php

namespace App\Livewire;

use App\Livewire\Forms\PatientForm;
use App\Traits\HasCreateAction;
use Livewire\Attributes\Layout;
use Livewire\Component;

class PatientSignup extends Component
{
    use HasCreateAction;

    public function getRouteName(): string
    {
        return 'patient-login';
    }

    public function getMessage(): string
    {
        return 'Account Created Successfully!';
    }
    public PatientForm $form;
    #[Layout('layouts.auth')]
    public function render()
    {
        return view('livewire.patient-signup');
    }
}
