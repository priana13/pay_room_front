<?php

namespace App\Http\Livewire\Hotel;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class FasilitasHotel extends Component
{
    public $slug;

    public function mount($slug){

        $this->slug = $slug;
    }
    public function render()
    {

        $url = config('services.api_url');       

        $response = Http::get($url . '/house/' . $this->slug . '/fasilitas');
        $response = $response->collect();

        // $data = collect($response['data']) ;

        // dd($response);

        return view('livewire.hotel.fasilitas-hotel');
    }
}
