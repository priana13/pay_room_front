<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SimpleCardProduct extends Component
{
    public $button = FALSE;
    public $hotel;

    // item
    public $hotel_name = null,
           $start,
           $end,
           $status,
           $created_at,
           $transaction_code;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($button, $hotel = [])
    {
        $this->button = $button;
        $this->hotel = $hotel;
      
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {

        if($this->hotel != null){

            $this->hotel_name = $this->hotel['hotel'];
            $this->start = $this->hotel['start'];
            $this->end = $this->hotel['end'];
            $this->status = $this->hotel['status'];
            $this->created_at = $this->hotel['created_at'];
            $this->transaction_code = $this->hotel['transaction_code'];
        }       

        // "user_id" => "Priana Saputra"
        // "order_id" => "2"
        // "transaction_code" => "63e506c29b046"
        // "hotel" => "Autem numquam molestiae libero."
        // "start" => "2023-02-01"
        // "end" => "2023-02-11"
        // "status" => "Aktif"
        // "notes" => null
        // "created_at" => "2023-02-13T19:24:13.000000Z"


       return view('components.simple-card-product');
    }
}
