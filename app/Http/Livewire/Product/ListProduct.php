<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class ListProduct extends Component
{
    public $hotel;

    public function render()
    {

        $response = Http::get('https://demo.keypayroom.co.id/api/houses');
        $response = $response->collect();

        $data = collect($response['data']) ;

        $this->hotel = $data->take(4);

        return view('livewire.product.list-product');
    }
}
