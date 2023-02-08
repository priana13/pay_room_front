<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class BannerUtama extends Component
{
    public $banners;

    public function render()
    {

        $url = config('services.api_url');       

        $response = Http::get($url . '/banners');
        $response = $response->collect();

        $data = collect($response['data']) ;

        $this->banners = $data->take(4);

        /**
         *  "image" => "https://app.keypayroom.co.id/storage/banner/banner1.jpg"
         * "title" => null
         * "url" => null
         * "order" => "1"
         */       

        return view('livewire.banner-utama');
    }
}
