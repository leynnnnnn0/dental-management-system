<?php

namespace App\Livewire\Patient;

use App\Livewire\Forms\PatientForm;
use App\Models\Patient;
use App\Traits\HasUpdateAction;
use Livewire\Component;

class Edit extends Component
{
    use HasUpdateAction;
    public PatientForm $form;

    public function getRouteName(): string
    {
        return 'patients.index';
    }

    public function getSuccessMessage(): string
    {
        return 'Patient Details Updated Successfully';
    }
    public function mount($id)
    {
        $this->form->setUserForm(Patient::findOrFail($id));
    }
    public function render()
    {
        return view('livewire.patient.edit');
    }
}
