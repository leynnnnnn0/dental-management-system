<?php

namespace App\Livewire\Schedule;

use App\Livewire\Forms\ScheduleForm;
use App\Models\Schedule;
use App\Traits\HasUpdateAction;
use Livewire\Component;

class Edit extends Component
{
    use HasUpdateAction;
    
    public ScheduleForm $form;

    public function getRouteName(): string
    {
        return 'schedules.index';
    }

    public function getSuccessMessage(): string
    {
        return 'Schedule Details Updated Successfully';
    }
    public function mount($id)
    {
        $this->form->setScheduleForm(Schedule::findOrFail($id));
    }
    public function render()
    {
        return view('livewire.schedule.edit');
    }
}
