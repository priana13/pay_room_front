<?php

namespace App\Http\Livewire\Member;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Livewire\WithFileUploads;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class ProfileComponent extends Component
{
    use WithFileUploads;
    use LivewireAlert;

    public $user;

    public $name,
            $gender,
            $tanggal_lahir,
            $city,
            $status,
            $phone_number,
            $email,
            $photo,
            $profesi;

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
        $this->profesi = $this->user['profesi'];        


    }

    public function render()
    {  

        return view('livewire.member.profile-component');
    }

    public function update(){

        $url = config('services.api_url');   
        $token = session()->get('app_token');

        $path = $this->photo->store('public/profile');
        $path_ex = explode('public/', $path);         

        $photo_url = url('storage/' . $path_ex[1]);       

        $response = Http::withHeaders([ 'Content-Type' => 'multipart/form-data' ])
                        ->withToken($token)->attach(
                            'photo', $photo_url
                        )->post($url . '/user/update', [
                            'name' => $this->name,
                            'phone_number' => $this->phone_number,
                            'profesi' => $this->profesi         
                        ]);

        // dd($response->collect());
                        
        $this->alert('success', 'Update Success', [
            'toast' => false
        ]);
    }
}
