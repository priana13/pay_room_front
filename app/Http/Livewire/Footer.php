<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Footer extends Component
{
    public $company;
    public $email = null, 
           $telp = null, 
           $alamat = null;

    public function render()
    {

        $url = config('services.api_url');       

        $response = Http::get($url . '/company');
        $response = $response->collect();       

        $this->company = $response;  
        
        if(isset($this->company['email'])){

            $this->email = $this->company['email'];
        }

        if(isset($this->company['telp'])){

            $this->telp = $this->company['telp'];
        }

        if(isset($this->company['alamat'])){

            $this->alamat = $this->company['alamat'];
        }


        return view('livewire.footer');
    }
}
