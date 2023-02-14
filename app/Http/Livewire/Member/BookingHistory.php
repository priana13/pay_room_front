<?php

namespace App\Http\Livewire\Member;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class BookingHistory extends Component
{
    public $booking_aktif;
    public $booking_selesai;
    public $status = 'Aktif'; // Aktif, Done

    public function render()
    {

        $url = config('services.api_url');   
        $token = session()->get('app_token');    

        $response = Http::withToken($token)->get($url.'/booking_history',[
            'status' => "Aktif"
        ]);
        $response = $response->collect(); 
        $this->booking_aktif = $response['data'];  

        
        $response2 = Http::withToken($token)->get($url.'/booking_history',[
            'status' => "Done"
        ]);
        $response2 = $response2->collect(); 
        $this->booking_selesai = $response2['data']; 
       

        return view('livewire.member.booking-history');
    }

    public function status($status){

        $this->status = $status;
    }
}
