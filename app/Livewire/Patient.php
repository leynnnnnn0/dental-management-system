<?php

namespace App\Livewire;

use App\Models\Patient as ModelsPatient;
use Livewire\Component;

class Patient extends Component
{
    public function render()
    {
        $patients = ModelsPatient::paginate(10);
        return view('livewire.patient', [
            'patients' => $patients
        ]);
    }
}
