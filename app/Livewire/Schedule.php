<?php

namespace App\Livewire;

use App\Models\Schedule as ModelsSchedule;
use App\Traits\HasDeleteAction;
use Livewire\Component;
use Livewire\WithPagination;

class Schedule extends Component
{
    use WithPagination, HasDeleteAction;
    public function getRouteName(): string
    {
        return 'schedules.index';
    }

    public function getModel()
    {
        return ModelsSchedule::class;
    }

    public function getSuccessMessage(): string
    {
        return 'Dentist Deleted Successfully';
    }
    public function render()
    {
        $schedules = ModelsSchedule::paginate(10);
        return view('livewire.schedule', [
            'schedules' => $schedules
        ]);
    }
}
