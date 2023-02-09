<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;

class LoginComponent extends Component
{
    public $email,
           $password;

    public function render()
    {
        return view('livewire.auth.login-component');
    }

    public function login(){

        // dd($this->email);
    }
}
