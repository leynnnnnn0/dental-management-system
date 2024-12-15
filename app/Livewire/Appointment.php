<?php

namespace App\Livewire;

use App\Models\Appointment as ModelsAppointment;
use App\Traits\HasDeleteAction;
use Livewire\Component;
use Livewire\WithPagination;

class Appointment extends Component
{
    use HasDeleteAction, WithPagination;
    public $keyword;

    public function approve($id)
    {
        ModelsAppointment::findOrFail($id)->update([
            'status' => 'approved'
        ]);
        session()->flash('success', 'Appointment Approved!');
        return $this->redirect(route('appointments.index'), true);
    }

    public function complete($id)
    {
        ModelsAppointment::findOrFail($id)->update([
            'status' => 'completed'
        ]);
        session()->flash('success', 'Appointment Complete!');
        return $this->redirect(route('appointments.index'), true);
    }

    public function decline($id)
    {
        ModelsAppointment::findOrFail($id)->update([
            'status' => 'declined'
        ]);
        session()->flash('success', 'Appointment Declined!');
        return $this->redirect(route('appointments.index'), true);
    }
    public function getRouteName(): string
    {
        return 'appointments.index';
    }

    public function getModel()
    {
        return ModelsAppointment::class;
    }

    public function getSuccessMessage(): string
    {
        return 'Appointment Deleted Successfully';
    }
    public function render()
    {
        $query = ModelsAppointment::query();
        if ($this->keyword)
            $query->whereAny(['appointment_number'], 'like', "%{$this->keyword}%");
        $appointments = $query->latest(10)->paginate(10);
        return view('livewire.appointment', [
            'appointments' => $appointments
        ]);
    }
}
