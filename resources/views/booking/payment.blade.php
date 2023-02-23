@extends('layouts.guest')



@section('content')

@include('layouts.navbar')

<div class="container mx-auto mt-5">

  @livewire('booking.booking-payment', [
    'temp_booking' => $temp_booking 
  ])

</div>
{{-- container --}}


@endsection