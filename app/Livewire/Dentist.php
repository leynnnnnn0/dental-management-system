<?php

namespace App\Livewire;

use App\Models\Dentist as ModelsDentist;
use Livewire\Component;

class Dentist extends Component
{
    public function render()
    {
        $dentists = ModelsDentist::paginate(10);
        return view('livewire.dentist', [
            'dentists' => $dentists
        ]);
    }
}
