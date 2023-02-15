<?php

namespace App\Http\Livewire\Member;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Livewire\WithFileUploads;

class ProfileComponent extends Component
{
    use WithFileUploads;

    public $user;

    public $name,
            $gender,
            $tanggal_lahir,
            $city,
            $status,
            $phone_number,
            $email,
            $photo;

    protected $listeners = ['refresh' => '$refresh'];


    public function mount(){

        $url = config('services.api_url');   
        $token = session()->get('app_token');    

        $response = Http::withToken($token)->get($url . '/user');
        $response = $response->collect();       

        $this->user = $response['data'];

        $this->name = $this->user['name'];
        $this->phone_number = $this->user['phone_number'];
        $this->email = $this->user['email'];
        $this->photo = $this->user['photo'];


    }

    public function render()
    {  

        return view('livewire.member.profile-component');
    }

    public function update(){

        $url = config('services.api_url');   
        $token = session()->get('app_token');

        $response = Http::withToken($token)->post($url . '/user/update', [
            'name' => $this->name,
            'phone_number' => $this->phone_number,
            // 'photo' => $this->photo
        ]);
        
        $this->emit('refresh');

        session()->flash('message', 'Data Berhasil Di Update.');
    }
}
