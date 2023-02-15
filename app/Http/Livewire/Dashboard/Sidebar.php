<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Sidebar extends Component
{
    public $user;

    public function render()
    {

        $url = config('services.api_url');   
        $token = session()->get('app_token');    

        $response = Http::withToken($token)->get($url . '/user');
        $response = $response->collect();     

        $this->user = $response['data'];       

        return view('livewire.dashboard.sidebar');
    }
}
