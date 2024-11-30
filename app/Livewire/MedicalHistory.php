<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class MedicalHistory extends Component
{
    use WithPagination;
    public function render()
    {
        $medicalHistories = \App\Models\MedicalHistory::with(['dentist', 'patient'])->paginate(10);
        return view('livewire.medical-history', [
            'medicalHistories' => $medicalHistories
        ]);
    }
}
