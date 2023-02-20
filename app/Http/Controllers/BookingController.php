<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * @param start_date=2023-02-20&&end_date=2023-02-22&&qty=3&&guest=1
     */
    public function show(Request $request ,$slug){

        $data = [
            'slug' => $slug,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'qty' => $request->qty,
            'guest' => $request->guest

        ];

        return view('booking.order', compact('data'));

    }
}
