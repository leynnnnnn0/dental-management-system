<?php

namespace App\Livewire;

use App\Traits\HasDeleteAction;
use Livewire\Component;
use Livewire\WithPagination;

class MedicalHistory extends Component
{
    use HasDeleteAction, WithPagination;
    public function getRouteName(): string
    {
        return 'appointments.index';
    }

    public function getModel()
    {
        return \App\Models\MedicalHistory::class;
    }

    public function getSuccessMessage(): string
    {
        return 'Medical History Deleted Successfully';
    }
    public function render()
    {
        $medicalHistories = \App\Models\MedicalHistory::with(['dentist', 'patient'])->latest()->paginate(10);
        return view('livewire.medical-history', [
            'medicalHistories' => $medicalHistories
        ]);
    }
}
