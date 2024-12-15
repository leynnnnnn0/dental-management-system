<?php

namespace App\Livewire;

use App\Models\Dentist as ModelsDentist;
use App\Traits\HasDeleteAction;
use Livewire\Component;

class Dentist extends Component
{
    use HasDeleteAction;
    public $keyword;

    public function getRouteName(): string
    {
        return 'dentists.index';
    }

    public function getModel()
    {
        return ModelsDentist::class;
    }

    public function getSuccessMessage(): string
    {
        return 'Dentist Deleted Successfully';
    }
    public function render()
    {
        $query = ModelsDentist::query();

        if ($this->keyword)
            $query->whereAny(['first_name', 'last_name'], 'like', "%{$this->keyword}%");

        $dentists = $query->latest()->paginate(10);

        return view('livewire.dentist', [
            'dentists' => $dentists
        ]);
    }
}
