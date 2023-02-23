<?php

namespace App\Http\Livewire\Booking;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class BookingInvoice extends Component
{
    public $booking;
    public $hotel;
    public $discount;
    public $total, $total_bayar;

    public $data_booking;
    public $data_order;

    public function mount($temp_booking){

        $this->booking  = $temp_booking;   

    }

    public function render()
    {

        $url = config('services.api_url');
        $response = Http::get($url . '/house/' . $this->booking->slug);
        $response = $response->collect();
        $this->hotel = collect($response['data']);

        
        $order = Http::get($url . '/booking/' . $this->booking->transaction_code);
        $order = $order->collect();
        $this->data_order = collect($order['data']); 

        $this->total = $this->hotel['price'] * $this->booking->day_qty;

        $this->total_bayar = $this->hotel['price_discount'] * $this->booking->day_qty;

        $this->discount = ($this->hotel['discount'] / 100 ) * $this->total;


        return view('livewire.booking.booking-invoice');
    }


     // public function pay($bank){

    //     // create order and get midtrans token

    //     $url = config('services.api_url'); 
        
    //     $data = [
    //         "payment_method" => 1,
    //         "qty" => 1,
    //         "hotel_id" => $this->hotel['hotel_id'],
    //         "checkin" => $this->booking->start_date,
    //         "checkout" => $this->booking->end_date,
    //         "email" => $this->booking->email,
    //         "name" =>  $this->booking->name,
    //         "phone_number"  => $this->booking->phone_number

    //     ]; 

    //     $response = Http::withHeaders([
    //         'Accept' => 'application/json'           
    //     ])->post($url . '/booking', $data);

    //     $response = $response->collect();  
        
    //     $this->data_booking = $response;

    //     // dd($this->data_booking['payment_token']);

    //     // $this->emit('getSnap',$this->data_booking['payment_token']);

    //     $this->dispatchBrowserEvent('getSnap', ['token' => $this->data_booking['payment_token'] ]);

    //     // Redirect::to(route('thankyou'));   


    // }

}
