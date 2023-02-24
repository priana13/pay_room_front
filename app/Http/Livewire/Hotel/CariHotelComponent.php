<?php

namespace App\Http\Livewire\Hotel;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class CariHotelComponent extends Component
{
    public $hotel;
    public $list_kota;

    // form
    public $kota, $tipe, $min_price, $max_price;
    public $filter;

    public function render()
    {

        $url = config('services.api_url');       

        $response = Http::get($url . '/houses' , $this->filter);
        $response = $response->collect();
        $data = collect($response['data']);
        $this->hotel = $data->take(6);

        // get list kota
        $response_kota = Http::get($url . '/list_kota');
        $response_kota = $response_kota->collect();        
        $this->list_kota = $response_kota;

        return view('livewire.hotel.cari-hotel-component');
    }

    public function cari(){

        $filter = [];

        if($this->kota){
            $filter['kota_id'] = $this->kota;
           
        }

        if($this->min_price){
            $filter['min_price'] = $this->min_price;
        }

        if($this->max_price){
            $filter['max_price'] = $this->max_price;
        }

        $this->filter  = $filter;

        // $url = config('services.api_url');       

        // $response = Http::withHeaders([
        //     'Accept' => 'application/json'           
        // ])->get($url . '/houses', $filter);
        // $response = $response->collect();
        
        // $data = collect($response['data']) ;

        // $this->hotel = $data->take(6);

    }
}
