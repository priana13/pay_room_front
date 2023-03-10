<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
  {{-- @vite('resources/css/app.css') --}}

  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://unpkg.com/flowbite@1.6.0/dist/flowbite.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    @yield('custom_header')

    @livewireStyles

</head>
    <body >
    @yield('content')

     <!-- Sidebr -->
     <div id="sidebar" style="background-color: rgb(0, 0,0,0.6);display:none" class="z-30 fixed top-0 content-center flex justify-end  h-full w-full  clos">    
      <div id="tandai-btn" class="shadow drop-shadow-2xl right-0 bg-white  h-full w-[340px] py-3 px-3  ">
          <div class="text-right">
              <button class="px-4 py-2 rounded-lg bg-[#f6f6f6] clos">
                <i id="close" class="fa-solid fa-x"></i>
              </button>
          </div>
          <div class="px-3 mt-2">
            <a class=" py-3 rounded-md text-md block text-left" href="{{ route('front.home_page') }}">Home</a>
            <a class=" py-3 rounded-md text-md block text-left" href="{{ route('cari-hotel') }}">Booking</a>
            <a class=" py-3 rounded-md text-md block text-left" href="{{ route('static-page', 'contact') }}">Pusat Bantuan</a>           
            <a class=" py-3 rounded-md text-md block text-left border-b" href="{{ route('static-page', 'syarat-dan-ketentuan') }}">Syarat Dan Ketentuan</a>
            <p class="mt-4"></p>
            <a class="text-white py-2 rounded-sm text-md block text-center bg-[#1baa56]" href="{{ route('login') }}">Login</a>
            <p class="mt-4"></p>
            <a class="text-[#1baa56] py-2 rounded-sm text-md block text-center border border-[#1baa56]" href="{{ route('register') }}">Register</a>

          </div>
      </div> 
    </div>

    @livewireScripts  

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> 
    {{-- <x-livewire-alert::scripts /> --}}
  
    @yield('footer')
    
    <script>
        //Sidebar
        $('.btn-menu').on('click', function(e) {
            $("#sidebar").show();
        });
        $('.clos').on('click', function(e) {
          if(e.target.id == 'close'){
            $("#sidebar").hide();
            return;
          }
          if (e.target !== this)
              return;
            $("#sidebar").hide();
        });


        //cari
        $('.cari-btn').on('click', function(e) {
            $("#cari").show();
        });
        $('.close-cari').on('click', function(e) {
            $("#cari").hide();
        });

        $(".btn" ).click(function() {
              var id = $(this).attr('id');
              $('.btn').css('border', 'none');
              $('.tab').hide();
              $('#tab-'+id).show();
              $('#'+id).css("border-bottom", "2px solid #327989");
          }); 
    </script>
    
    
  </body>
</html>
