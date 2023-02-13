<?php

namespace App\Http\Livewire\Member;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class BookingHistory extends Component
{
    public $booking;

    public function render()
    {

        $url = config('services.api_url');   
        $token = session()->get('app_token');    

        $response = Http::withToken($token)->get('http://127.0.0.1:8001/api/booking_hostory');
        $response = $response->collect(); 

        $this->booking = $response;        
       

        return view('livewire.member.booking-history');
    }
}
