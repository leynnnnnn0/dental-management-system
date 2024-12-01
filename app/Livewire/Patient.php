<?php

namespace App\Livewire;

use App\Models\Patient as ModelsPatient;
use App\Traits\HasDeleteAction;
use Livewire\Component;

class Patient extends Component
{
    use HasDeleteAction;
    public $keyword;

    public function getRouteName(): string
    {
        return 'dentists.index';
    }

    public function getModel()
    {
        return ModelsPatient::class;
    }

    public function getSuccessMessage(): string
    {
        return 'Patient Deleted Successfully';
    }
    public function render()
    {
        $query = ModelsPatient::query();

        if ($this->keyword)
            $query->whereAny(['first_name', 'last_name'], 'like', "%{$this->keyword}%");

        $patients = $query->paginate(10);
        return view('livewire.patient', [
            'patients' => $patients
        ]);
    }
}
