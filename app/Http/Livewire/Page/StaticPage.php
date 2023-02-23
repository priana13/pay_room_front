<?php

namespace App\Http\Livewire\Page;

use Livewire\Component;

class StaticPage extends Component
{
    public function render()
    {
        return view('livewire.page.static-page');
    }

    public function page(){

        dd('test');
        
    }
}
