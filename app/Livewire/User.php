<?php

namespace App\Livewire;

use App\Livewire\Forms\UserForm;
use App\Models\User as ModelsUser;
use Livewire\Component;

class User extends Component
{
    public UserForm $form;
    public function render()
    {
        $users = ModelsUser::all();
        return view('livewire.user', [
            'users' => $users
        ]);
    }
}
