<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class ListProduct extends Component
{
    public $hotel;
    public $title = "Hotel Terbaru";

    public $page_1 = [];
    public $page_2 = [];

    public function mount($title = null){

        $this->title = $title;
    }

    public function render()
    {
        $url = config('services.api_url');       

        $response = Http::get($url . '/houses');
        $response = $response->collect();

        $data = collect($response['data']) ;

        $this->hotel = $data->take(8)->chunk(4);

        $this->page_1 = $this->hotel[0];   

        if( isset($this->hotel[1] ) ){

            $this->page_2 = $this->hotel[1];

        }
        

        return view('livewire.product.list-product');
    }
}
