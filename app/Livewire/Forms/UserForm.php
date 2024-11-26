<?php

namespace App\Livewire\Forms;

use App\Models\User;
use Livewire\Attributes\Validate;
use Livewire\Form;

class UserForm extends Form
{
    public $name;
    public $email;
    public $password;

    public function rules()
    {
        return [
            'name' => ['required'],
            'email' => ['required'],
            'password' => ['required']
        ];
    }

    public function store()
    {
        $this->validate();
        return User::create($this->all());
    }
}
