<?php

namespace App\Http\Livewire\Hotel;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;


class ReviewHotel extends Component
{
  
    public $hotelId;
    public $reviews;
    public $jumlah, $limit = 4;
    public $total_bintang;

    public function mount($hotelId){

        $this->hotelId = $hotelId;

    }
    public function render()
    {

        $url = config('services.api_url');       

        $response = Http::get($url . '/house/' . $this->hotelId . '/reviews');
        $response = $response->collect();

        $data = collect($response['data']) ;
        $this->jumlah = count($data);

        $this->total_bintang = $data->average('bintang');      

        $data = $data->chunk($this->limit);

        $this->reviews = $data[0];

        return view('livewire.hotel.review-hotel');
    }

    public function lainnya(){

        $this->limit += 4;
    }
}
