<?php

namespace App\Livewire\MedicalHistory;

use App\Livewire\Forms\MedicalHistoryForm;
use App\Models\Dentist;
use App\Models\Patient;
use App\Traits\HasCreateAction;
use Livewire\Component;

class Create extends Component
{
    use HasCreateAction;
    public MedicalHistoryForm $form;
    public $patients;
    public $dentists;
    public function getMessage(): string
    {
        return 'New Medical History Created Successfully!';
    }

    public function getRouteName(): string
    {
        return 'medical-histories.index';
    }

    public function mount()
    {
        $this->patients = Patient::select(['first_name', 'last_name', 'id'])->get()->pluck('full_name', 'id');


        $this->dentists = Dentist::select(['first_name', 'last_name', 'id'])->get()->pluck('full_name', 'id');
    }
    public function render()
    {
        return view('livewire.medical-history.create');
    }
}
