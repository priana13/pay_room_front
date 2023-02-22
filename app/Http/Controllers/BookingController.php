<?php

namespace App\Http\Controllers;

use App\Models\TempBooking;
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

    public function payment($temp_code){

        $temp_booking = TempBooking::where('temp_code', $temp_code)->first();

        return view('booking.payment', compact('temp_booking'));
    }

    public function invoice($temp_code){

        $temp_booking = TempBooking::where('temp_code', $temp_code)->first();

        return view('booking.invoice', compact('temp_booking'));
    }
}
