<?php

namespace App\Livewire;

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;

class PatientLogin extends Component
{
    public LoginForm $form;
    #[Layout('layouts.auth')]
    public function render()
    {
        return view('livewire.patient-login');
    }

    public function login()
    {
        $this->validate();

        if (Auth::guard('patient')->attempt([
            'email' => $this->form->email,
            'password' => $this->form->password
        ])) {
            session()->flash('success', 'Login successful!');
            return redirect()->route('patient-dashboard');
        }
        $this->form->addError('email', 'The provided credentials do not match our records.');
    }
}
