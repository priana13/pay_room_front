@extends('layouts.guest')



@section('content')

@include('layouts.navbar')

<div class="container mx-auto mt-5">  

  <livewire:booking.booking-hotel :data="$data" />

</div>
{{-- container --}}


@endsection