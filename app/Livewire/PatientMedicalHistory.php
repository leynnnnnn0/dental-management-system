<?php

namespace App\Livewire;

use App\Traits\HasDeleteAction;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

class PatientMedicalHistory extends Component
{
    use WithPagination;

    #[Layout('layouts.patient')]
    public function render()
    {
        $medicalHistories = \App\Models\MedicalHistory::with(['dentist', 'patient'])->where('patient_id', Auth::user()->id)->paginate(10);
        return view('livewire.patient-medical-history', [
            'medicalHistories' => $medicalHistories
        ]);
    }
}
