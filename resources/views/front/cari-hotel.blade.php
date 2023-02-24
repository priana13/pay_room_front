@extends('layouts.guest')
@section('custom_header')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet">


  @endsection
  @section('content')

  @include('layouts.navbar')
  
  @livewire('hotel.cari-hotel-component')

  <br>
  <br>

  
  @include('layouts.cari')
  @include('layouts.footer')

  
  @endsection
  @section('footer')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.full.min.js"></script>
  <script>
   //flter btn
   $('.clos_fltr').on('click', function() {
        $("#filter").hide();
    });
    $('.fltr').on('click', function() {
          $("#filter").show();
    });
    
    // select2
    $(function () {
      $(".saerch").select2();
    });

    function colapse(id){
        if(!$('#clps'+id).is(":visible")){
            $("#clps"+id).show();
            $("#icon-clps"+id).html('<i class="fa-solid fa-caret-up"></i>');
        }else{
            $('#clps'+id).hide(); 
            $("#icon-clps"+id).html('<i class="fa-solid fa-caret-down"></i>');
    
        }
    }
        
    </script>

@endsection
