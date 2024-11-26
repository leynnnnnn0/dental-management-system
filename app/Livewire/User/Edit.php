<?php

namespace App\Livewire\User;

use App\Livewire\Forms\UserForm;
use App\Models\User;
use Livewire\Component;

class Edit extends Component
{
    public UserForm $form;
    public function mount($id)
    {
        $this->form->setUserForm(User::findOrFail($id));
    }
    public function render()
    {
        return view('livewire.user.edit');
    }

    public function submit()
    {
        $this->form->update();
        return redirect()->route('users.index')->with('success', 'User Details Updated Successfully!');
    }
}
