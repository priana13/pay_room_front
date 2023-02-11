<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;

class RegisterComponent extends Component
{
    public 
        $name,
        $phone_number,
        $email,
        $password;

    public function render()
    {
        return view('livewire.auth.register-component');
    }


    public function register(){

        $this->validate([
            'name' => 'required',
            'phone_number' => 'required',
            'email' => 'email|required',
            'password' => 'required'
        ]);


        $url = config('services.api_url');       

        $response = Http::withHeaders([
                        'Accept' => 'application/json'           
                    ])->post($url . '/register', [
                        'name' =>  $this->name,
                        'email' => $this->email,
                        'phone_number' => $this->phone_number,
                        'password' => $this->password
                    ]);

     

      $response->onError(function($response){

        $data = $response->collect();       
        
        if( isset($data['errors']['email']) ){

            session()->flash('email', $data['message']);

        }else{

            session()->flash('message', $data['message']);


        }



      });    
      
      
      if($response->successful()){

        $data = $response->collect();

        $user = $data['user'];

        $token = $data['token'];

        session()->put('app_token', $token);

        Redirect::route('my-dashboard');            

      }
    


    }
}
