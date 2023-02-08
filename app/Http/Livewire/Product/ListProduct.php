<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class ListProduct extends Component
{
    public $hotel;

    public function render()
    {
        $url = config('services.api_url');       

        $response = Http::get($url . '/houses');
        $response = $response->collect();

        $data = collect($response['data']) ;

        $this->hotel = $data->take(4);

        return view('livewire.product.list-product');
    }
}
