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

            // Redirect to patient dashboard or intended page
            return redirect()->route('dashboard');
        }

        // Authentication failed
        $this->addError('email', 'The provided credentials do not match our records.');
    }
}
