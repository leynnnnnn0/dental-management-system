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
    public $keyword;
    public function render()
    {
        $query = ModelsUser::query();
        if ($this->keyword)
            $query->whereAny(['name'], 'like', "%{$this->keyword}%");
        $users = $query->latest()->paginate(10);
        return view('livewire.user', [
            'users' => $users
        ]);
    }

    public function delete($id)
    {
        $user = ModelsUser::findOrFail($id);
        $user->delete();
        session()->flash('success', 'User Deleted Successfully');
        return $this->redirect(route('users.index'), true);
    }
}
