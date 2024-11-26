<?php

namespace App\Livewire\User;

use App\Livewire\Forms\UserForm;
use Livewire\Component;

class Create extends Component
{
    public UserForm $form;
    public function render()
    {
        return view('livewire.user.create');
    }

    public function submit()
    {
        $this->form->store();
        return redirect()->route('users.index')->with('success', 'User Created Successfully!');
    }

    public function isFormComplete()
    {
        return !empty($this->form->name) &&
            !empty($this->form->email) &&
            !empty($this->form->password);
    }
}
