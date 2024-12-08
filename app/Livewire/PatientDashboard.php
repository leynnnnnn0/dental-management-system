<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

class PatientDashboard extends Component
{
    #[Layout('layouts.patient')]
    public function render()
    {
        return view('livewire.patient-dashboard');
    }
}
