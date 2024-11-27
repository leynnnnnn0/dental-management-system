<?php

namespace App\Livewire\Dentist;

use App\Livewire\Forms\DentistForm;
use App\Traits\HasCreateAction;
use Livewire\Component;

class Create extends Component
{
    use HasCreateAction;

    public DentistForm $form;
    public function getMessage(): string
    {
        return 'New Dentist Created Successfully!';
    }

    public function getRouteName(): string
    {
        return 'dentists.index';
    }

    public function render()
    {
        return view('livewire.dentist.create');
    }
}
