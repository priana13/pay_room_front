<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;

class LoginComponent extends Component
{
    public $email,
           $password;

    public function render()
    {
        return view('livewire.auth.login-component');
    }

    public function login(){

        $this->validate([                
            'email' => 'email|required',
            'password' => 'required'
        ]);


        $url = config('services.api_url'); 
        
      

        $response = Http::withHeaders([
                        'Accept' => 'application/json'           
                    ])->post($url . '/login', [                      
                        'email' => $this->email,                       
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

            if(count($data) < 1){

                session()->flash('message', "Account Not Found");  
            }else{

                $token = $data['token'];
    
                session()->put('app_token', $token);

                Redirect::route('my-dashboard');        

            }


    
               
    
        }
    }
}
