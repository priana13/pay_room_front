<?php

namespace App\Http\Livewire\Member;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class DashboardPanel extends Component
{
    public $is_order = FALSE;
    public $user;   

    public function mount($user){        

       $this->user = $user;      

    }

    public function render()
    {      

        $url = config('services.api_url');   
        $token = session()->get('app_token');    

        $response = Http::withToken($token)->get($url . '/orders');
        $response = $response->collect();       

        if(count($response) > 0){
            $this->is_order = TRUE;
        }

        return view('livewire.member.dashboard-panel');
    }
}
