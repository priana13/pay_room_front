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
           "email" => $this->email,
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

        $url = config('services.api_url'); 
        
        $data = [
            "payment_method" => 1,
            "qty" => 1,
            "hotel_id" => $temp_booking->hotel_id,
            "checkin" => $temp_booking->start_date,
            "checkout" => $temp_booking->end_date,
            "email" => $temp_booking->email,
            "name" =>  $temp_booking->name,
            "phone_number"  => $temp_booking->phone_number

        ]; 

        $response = Http::withHeaders([
            'Accept' => 'application/json'           
        ])->post($url . '/booking', $data);

        $response = $response->collect();

        $temp_booking->payment_token = $response['payment_token'];
        $temp_booking->transaction_code = $response['order']['transaction_code'];
        $temp_booking->save();      

        Redirect::to(route('invoice', $temp_booking->temp_code));
      
    }
}
