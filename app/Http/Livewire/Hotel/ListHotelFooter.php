<?php

namespace App\Http\Livewire\Hotel;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class ListHotelFooter extends Component
{
    public $hotel;

    public function mount($title = null){

        $this->title = $title;
    }


    public function render()
    {

        $url = config('services.api_url');       

        $response = Http::get($url . '/houses');
        $response = $response->collect();

        $data = collect($response['data']) ;

        $this->hotel = $data->take(4);

        
        return view('livewire.hotel.list-hotel-footer');
    }
}
