<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MyDashboardController extends Controller
{
    public function index(Request $request){

        $url = config('services.api_url');   
        $token = session()->get('app_token');    

        $response = Http::withToken($token)->get($url . '/user');
        $response = $response->collect();

        $user = $response['data'];           

        return view('livewire.member.my-dashboard', compact('user'));
    }
}
