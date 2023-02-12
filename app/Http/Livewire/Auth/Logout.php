<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;

class Logout extends Component
{
    public function render()
    {
        return view('livewire.auth.logout');
    }

    public function logout(){

        $url = config('services.api_url');   
        $token = session()->get('app_token');       

        $response = Http::withHeaders(['Accept' => 'application/json'])
                            ->withToken($token)
                            ->post($url . '/logout');           

        // Forget session token
        session()->forget(['app_token']);        
        session()->flush();

        Redirect::route('front.home_page');
    }
}
