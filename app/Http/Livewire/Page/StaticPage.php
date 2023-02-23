<?php

namespace App\Http\Livewire\Page;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class StaticPage extends Component
{
    public $slug = 'contact'; 
    public $page;

    public function mount($slug){

        $this->slug = $slug;
    }

    public function render()
    {

        $url = config('services.api_url');       

        $response = Http::get($url . '/post/' . $this->slug );
        $response = $response->collect();       

        $this->page = collect($response['data']) ;       

        return view('livewire.page.static-page');
    }

    public function page($slug){

        $this->slug = $slug;
        
    }
}
