<?php

namespace App\Livewire;

use App\Models\Schedule as ModelsSchedule;
use Livewire\Component;
use Livewire\WithPagination;

class Schedule extends Component
{
    use WithPagination;
    public function render()
    {
        $schedules = ModelsSchedule::paginate(10);
        return view('livewire.schedule', [
            'schedules' => $schedules
        ]);
    }
}
