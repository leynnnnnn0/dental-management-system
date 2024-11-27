<?php

namespace App\Livewire\Dentist;

use App\Livewire\Forms\DentistForm;
use App\Models\Dentist;
use App\Traits\HasUpdateAction;
use Livewire\Component;

class Edit extends Component
{
    use HasUpdateAction;
    
    public DentistForm $form;

    public function getRouteName(): string
    {
        return 'dentists.index';
    }

    public function getSuccessMessage(): string
    {
        return 'Dentist Details Updated Successfully';
    }
    public function mount($id)
    {
        $this->form->setUserForm(Dentist::findOrFail($id));
    }

    public function render()
    {
        return view('livewire.dentist.edit');
    }
}
