<?php

namespace App\Livewire\Forms;

use App\Models\User;
use Illuminate\Validation\Rule;
use Livewire\Form;

class UserForm extends Form
{
    public $user_id;
    public $name;
    public $email;
    public $password;

    public function rules()
    {
        return [
            'name' => ['required'],
            'email' => ['required', 'email', 'max:255',  Rule::unique('users')->ignore($this->user_id)],
            'password' => ['required']
        ];
    }

    public function store()
    {
        $this->validate();
        return User::create($this->all());
    }

    public function update()
    {

        $user = User::findOrFail($this->user_id);
        $user->update($this->except('password'));
        return $user->fresh();
    }

    public function setUserForm(User $user)
    {
        $this->user_id = $user->id;
        $this->name = $user->name;
        $this->email = $user->email;
    }
}
