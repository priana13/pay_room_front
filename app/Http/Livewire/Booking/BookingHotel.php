<?php

namespace App\Http\Livewire\Booking;

use App\Models\TempBooking;
use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;

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
           $warga_negara = 'wni';

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

    public function payment(){

        $temp_booking = TempBooking::create([
           "temp_code" => uniqid(),
           "name" => $this->name,
           "phone_number" => $this->phone_number,
           "warga_negara" => $this->warga_negara,
           "start_date" => $this->data['start_date'],
           "end_date" => $this->data['end_date'],
           "day_qty" => $this->data['qty'],
           "room" => 1,
           "guest" => $this->data['guest'],
           "hotel_id" => $this->hotel['hotel_id'],
           "slug" => $this->hotel['slug']
        ]);

        // redirect to Payment Page with temp_booking id

        Redirect::to(route('payment', $temp_booking->temp_code));
      
    }
}
