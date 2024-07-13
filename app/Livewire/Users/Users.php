<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;

class Users extends Component
{

    public $name, $email, $users;

    public function mount()
    {
        $this->users = User::all();
    }
    public function render()
    {
        return view('livewire.users.users');
    }
}
