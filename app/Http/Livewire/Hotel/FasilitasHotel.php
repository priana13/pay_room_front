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

        $response = Http::get($url . '/house/' . $this->slug . '/facilities');
        $response = $response->collect();

        $category =$response;
      

        return view('livewire.hotel.fasilitas-hotel', compact('category'));
    }
}
