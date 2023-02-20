<?php

namespace App\Http\Livewire\Booking;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class BookingHotel extends Component
{
    public $data;
    public $hotel;
    public $discount;
    public $total, $total_bayar;

    // form
    public $name,
           $phone_number,
           $email,
           $warga_negara;

    public function mount($data){

        $this->data = $data;

    }
    public function render()
    {
        $url = config('services.api_url');       

        $response = Http::get($url . '/house/' . $this->data['slug']);
        $response = $response->collect();

        $this->hotel = collect($response['data']);

        $this->total = $this->hotel['price'] * $this->data['qty'];

        $this->total_bayar = $this->hotel['price_discount'] * $this->data['qty'];

        $this->discount = ($this->hotel['discount'] / 100 ) * $this->total;


        return view('livewire.booking.booking-hotel');
    }
}
