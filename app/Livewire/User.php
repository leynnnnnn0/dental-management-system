<?php

namespace App\Livewire;

use App\Livewire\Forms\UserForm;
use App\Models\User as ModelsUser;
use Livewire\Component;
use Livewire\WithPagination;

class User extends Component
{
    use WithPagination;
    public UserForm $form;
    public function render()
    {
        $users = ModelsUser::paginate(10);
        return view('livewire.user', [
            'users' => $users
        ]);
    }
}
