<?php

namespace App\Livewire;

use App\Models\User as ModelsUser;
use Livewire\Component;

class User extends Component
{
    public function render()
    {
        $users = ModelsUser::all();
        return view('livewire.user', [
            'users' => $users
        ]);
    }
}
