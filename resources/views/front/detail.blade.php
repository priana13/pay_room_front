@extends('layouts.guest')
@section('custom_header')

<style>
 
    .btn__navigation {
        display: flex;
        justify-content: center;
    }

    .swiper-button-next,.swiper-button-prev {
        align-self: center;
        left: 240px;
        margin-top: 0;
        position: static;
        top: 0;
        background: #fff;
        color: darkgrey;
        border-radius: 100px;
        box-shadow: 0 1px 8px rgb(36 36 36 / 14%);
        display: flex;
        height: 40px;
        justify-content: center;
        padding: 6px;
        width: 40px;
        content: "";
        background-image: url(./next.svg);
        z-index: 10;

    }

    .swiper-button-next-card,.swiper-button-prev-card,
    .swiper-button-next-card2,.swiper-button-prev-card2,
    .swiper-button-next-card3,.swiper-button-prev-card3 {
      align-items: center;
      border-radius: 100px;
      box-shadow: 0 -1px 4px rgb(0 0 0 / 4%), 0 4px 8px rgb(0 0 0 / 8%);
      display: flex;
      height: 40px;
      justify-content: center;
      outline: 0;
      width: 40px;

    }

    .swiper-button-next::after,.swiper-button-prev::after{
      display: none;
    }

    
    select {
      -webkit-appearance: none;
      -moz-appearance: none;
      background: transparent;
      background-image: url("data:image/svg+xml;utf8,<svg fill='black' height='24' viewBox='0 0 24 24' width='24' xmlns='http://www.w3.org/2000/svg'><path d='M7 10l5 5 5-5z'/><path d='M0 0h24v24H0z' fill='none'/></svg>");
      background-repeat: no-repeat;
      background-position-x: 100%;
      background-position-y: 5px;
    }
    
      

</style>
@endsection
@section('content')

@include('layouts.navbar')

@livewire('hotel.detail-hotel', [
  'slug' => $slug
]) 

@include('layouts.cari')

 
  <br>  


  @endsection
  @section('footer')

    <script>
    //swiper
    var swiper = new Swiper(".mySwiper-card", {
        slidesPerView: 1,
        spaceBetween: 10,
        speed: 900,
        centeredSlides: true,
        
        navigation: {
          nextEl: ".swiper-button-next-card",
          prevEl: ".swiper-button-prev-card",
          disabledClass: 'disabled_swiper_button'

        },    
      });

      
    // See more
    $('#lihat_cerita').on('click', function() {
        if($("#cerita").attr('class') == 'line-clamp-2'){
          $("#cerita").attr('class', 'line-clamp-none');
          $(this).text('Lihat Lebih Sedikit')
          return;
        }
        $("#cerita").attr('class', 'line-clamp-2');
        $(this).text('Lihat Selengkapnya')
    });

   
    </script>
@endsection
