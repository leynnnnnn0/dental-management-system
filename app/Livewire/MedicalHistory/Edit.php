<?php

namespace App\Livewire\MedicalHistory;

use App\Livewire\Forms\MedicalHistoryForm;
use App\Models\Dentist;
use App\Models\MedicalHistory;
use App\Models\Patient;
use App\Traits\HasUpdateAction;
use Livewire\Component;

class Edit extends Component
{
    use HasUpdateAction;
    public $patients;
    public $dentists;
    public MedicalHistoryForm $form;
    public function getRouteName(): string
    {
        return 'medical-histories.index';
    }

    public function getSuccessMessage(): string
    {
        return 'Medical History Details Updated Successfully';
    }

    public function mount($id)
    {
        $this->patients = Patient::select(['first_name', 'last_name', 'id'])->get()->pluck('full_name', 'id');


        $this->dentists = Dentist::select(['first_name', 'last_name', 'id'])->get()->pluck('full_name', 'id');

        $this->form->setMedicalHistoryForm(MedicalHistory::findOrFail($id));
    }
    public function render()
    {
        return view('livewire.medical-history.edit');
    }
}
