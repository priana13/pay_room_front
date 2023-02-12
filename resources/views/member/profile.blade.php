@extends('layouts.guest')
@section('custom_header')
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.css" rel="stylesheet" />
<style>


</style>
@endsection
@section('content')

@include('layouts.navbar2')

<livewire:member.profile-component />
 
  <br>

  @include('layouts.cari')

  
  @endsection
  @section('footer')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/datepicker.min.js"></script>
  <script>
    //file btn
    $('#avtr-btn').on('click', function() {
      $('#avtr').click();
    })
        
    </script>
@endsection