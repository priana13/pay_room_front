<?php

namespace App\Http\Livewire\Hotel;

use Carbon\Carbon;
use Livewire\Component;
use Symfony\Component\HttpFoundation\RequestMatcher\HostRequestMatcher;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class DetailHotel extends Component
{
    public $slug;
    public $hotel;
    public $desc, $limit = 20;
    public $label = "Lihat Selengkapnya"; 

    // form
    public $start_date,
           $end_date,
           $qty,
           $guest,
           $total;

    public $gallery;

    public function mount($slug){
        $this->slug = $slug;
        $this->start_date = date('Y-m-d');
        $this->end_date = date('Y-m-d');
        $this->guest = 1;

    }
    public function render()
    {
        $url = config('services.api_url');       

        $response = Http::get($url . '/house/' . $this->slug);
        $response = $response->collect();

        $data = collect($response['data']) ;          

        $this->hotel = $data;
        $this->desc = Str::limit($this->hotel['desc'], $this->limit) ;

        // hitung nominal hari
        $selisih = strtotime($this->end_date)  - strtotime($this->start_date);

        $this->qty = ($selisih / 60 / 60 / 24) + 1;

        $this->total = $this->hotel['price_discount'] * $this->qty;

        // Gallery Hotel

        $gallery_response = Http::get($url . '/house/' . $this->slug . '/gallery');
        $gallery_response = $gallery_response->collect();

        $this->gallery = $gallery_response->pluck('url');

        return view('livewire.hotel.detail-hotel');
    }

    public function selengkapnya(){

        if($this->label === "Lihat Selengkapnya"){

            $this->limit = 1000;
            $this->label = "Sembunyikan";

        }else{

            $this->limit = 20;
            $this->label = "Lihat Selengkapnya";
        }


    }
}
