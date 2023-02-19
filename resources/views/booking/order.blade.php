@extends('layouts.guest')



@section('content')

@include('layouts.navbar2')

<div class="container mx-auto mt-5">

  <livewire:booking.booking-hotel />

</div>
{{-- container --}}


@endsection