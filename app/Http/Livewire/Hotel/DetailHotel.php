<?php

namespace App\Http\Livewire\Hotel;

use Livewire\Component;
use Symfony\Component\HttpFoundation\RequestMatcher\HostRequestMatcher;
use Illuminate\Support\Facades\Http;

class DetailHotel extends Component
{
    public $slug;
    public $hotel;

    public function mount($slug){
        $this->slug = $slug;

    }
    public function render()
    {
        $url = config('services.api_url');       

        $response = Http::get($url . '/house/' . $this->slug);
        $response = $response->collect();

        $data = collect($response['data']) ;

        /**
         *     "hotel_id" => 3
            "title" => "Nulla culpa reprehenderit est quaerat."
            "slug" => "voluptates-atque-sint-ad-sit-quis-id-nemo"
            "desc" => "Autem voluptas in et totam eligendi esse eum blanditiis aut ducimus est voluptatem voluptas magni vitae explicabo et soluta consequatur accusamus numquam dolori ▶"
            "address" => "Soluta praesentium eveniet minima."
            "kota" => null
            "maps" => null
            "branch" => array:5 [▶]
            "room_qty" => 3
            "goest" => null
            "room_label" => "Dolor tenetur."
            "house_type" => "Kosan"
            "house_gender" => "Putra"
            "thumbnail" => null
            "status" => "Draft"
            "price" => 566805
            "discount" => 7
            "price_discount" => 527129
            "created_at" => "2023-02-07T17:35:23.000000Z"

         */      

        $this->hotel = $data;

        return view('livewire.hotel.detail-hotel');
    }
}
