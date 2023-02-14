<?php

namespace App\Http\Livewire\Member;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class BookingHistory extends Component
{
    public $booking;
    public $status = 'Aktif'; // Aktif, Done

    public function render()
    {

        $url = config('services.api_url');   
        $token = session()->get('app_token');    

        $response = Http::withToken($token)->get($url.'/booking_history',[
            'status' => $this->status
        ]);

        $response = $response->collect(); 

        $this->booking = $response['data'];         
       

        return view('livewire.member.booking-history');
    }

    public function status($status){

        $this->status = $status;
    }
}
