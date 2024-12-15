<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class PatientSidebar extends Component
{
    public function render()
    {
        return view('livewire.patient-sidebar');
    }

    public function logout()
    {
        Auth::guard('patient')->logout();

        Session::invalidate();
        Session::regenerateToken();
        return redirect('patient-login');
    }
}
