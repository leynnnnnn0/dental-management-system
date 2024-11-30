<?php

namespace App\Livewire\Forms;

use App\Models\Schedule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ScheduleForm extends Form
{
    public $schedule_id;
    public $from;
    public $to;

    public function rules()
    {
        return [
            'from' => ['required'],
            'to' => ['required']
        ];
    }

    public function store()
    {
        $this->validate();
        return Schedule::create($this->all());
    }

    public function setScheduleForm(Schedule $schedule)
    {
        $this->schedule_id = $schedule->id;
        $this->from = $schedule->from;
        $this->to = $schedule->to;
    }

    public function update()
    {
        $this->validate();
        $user = Schedule::findOrFail($this->schedule_id);
        $user->update($this->all());
        return $user->fresh();
    }
}
