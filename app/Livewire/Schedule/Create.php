<?php

namespace App\Livewire\Schedule;

use App\Livewire\Forms\ScheduleForm;
use App\Traits\HasCreateAction;
use Livewire\Component;

class Create extends Component
{
    use HasCreateAction;
    public ScheduleForm $form;

    public function getRouteName(): string
    {
        return 'schedules.index';
    }

    public function getMessage(): string
    {
        return 'New Schedule Created Successfully!';
    }

    public function render()
    {
        return view('livewire.schedule.create');
    }
}
