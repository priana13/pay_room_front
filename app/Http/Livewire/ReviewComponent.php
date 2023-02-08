<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class ReviewComponent extends Component
{
    public $reviews;

    public function render()
    {

        $url = config('services.api_url');       

        $response = Http::get($url . '/review');
        $response = $response->collect();

        $data = collect($response['data']) ;

        $this->reviews = $data->take(4);

        return view('livewire.review-component');
    }
}
