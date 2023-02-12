<?php

namespace App\Http\Livewire\Member;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class ProfileComponent extends Component
{
    public $user;

    public $name,
            $gender,
            $tanggal_lahir,
            $city,
            $status,
            $phone_number,
            $email;



    public function mount(){

        $url = config('services.api_url');   
        $token = session()->get('app_token');    

        $response = Http::withToken($token)->get($url . '/user');
        $response = $response->collect();       

        $this->user = $response;

    }

    public function render()
    {  

        $this->name = $this->user['name'];
        $this->phone_number = $this->user['phone_number'];
        $this->email = $this->user['email'];

        return view('livewire.member.profile-component');
    }

    public function update(){

        dd('oke');
    }
}
