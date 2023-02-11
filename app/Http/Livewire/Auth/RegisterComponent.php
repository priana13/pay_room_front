<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class RegisterComponent extends Component
{
    public 
        $name,
        $phone_number,
        $email,
        $password;

    public function render()
    {
        return view('livewire.auth.register-component');
    }


    public function register (){

        $this->validate([
            'name' => 'required',
            'phone_number' => 'required',
            'email' => 'email|required',
            'password' => 'required'
        ]);


        $url = config('services.api_url');       

        $response = Http::post($url . '/register'); 

        $response = Http::withHeaders([
                        'Accept' => 'application/json'           
                    ])->post($url . '/register', [
                        'name' =>  $this->name,
                        'email' => $this->email,
                        'password' => $this->password
                    ]);

        dd($response['data']);        

    }
}
