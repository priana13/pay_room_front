<?php

namespace App\Http\Livewire\Booking;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;

class BookingPayment extends Component
{
    public $booking;
    public $hotel;
    public $discount;
    public $total, $total_bayar;

    public function mount($temp_booking){

        $this->booking  = $temp_booking;

    }
    public function render()
    {
        // dd($this->booking);

        // "temp_code" => "63f4e6a2d5342"
        // "name" => "Priana Saputra"
        // "phone_number" => "+6289504932111"
        // "warga_negara" => "wni"
        // "start_date" => "2023-02-21"
        // "end_date" => "2023-02-21"
        // "day_qty" => 1
        // "room" => 1
        // "guest" => 1
        // "hotel_id" => 3
        // "slug" => "voluptatibus-aut-quod-quibusdam-et-beatae"
        // "transaction_code" => null

        $url = config('services.api_url');       

        $response = Http::get($url . '/house/' . $this->booking->slug);
        $response = $response->collect();

        $this->hotel = collect($response['data']);

        $this->total = $this->hotel['price'] * $this->booking->day_qty;

        $this->total_bayar = $this->hotel['price_discount'] * $this->booking->day_qty;

        $this->discount = ($this->hotel['discount'] / 100 ) * $this->total;


        return view('livewire.booking.booking-payment');
    }

    public function pay($bank){

        // create order and get midtrans token

        $url = config('services.api_url'); 
        
        $data = [
            "payment_method" => 1,
            "qty" => 1,
            "hotel_id" => $this->hotel['hotel_id'],
            "checkin" => $this->booking->start_date,
            "checkout" => $this->booking->end_date,
            "email" => $this->booking->email,
            "name" =>  $this->booking->name,
            "phone_number"  => $this->booking->phone_number

        ]; 

        $response = Http::withHeaders([
            'Accept' => 'application/json'           
        ])->post($url . '/booking', $data);

        $response = $response->collect();     

        // $data_booking = collect($response['data']);

        Redirect::to(route('thankyou'));   


    }
}
