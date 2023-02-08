@extends('layouts.guest')

@section('custom_header')
  @include('assets.css.home_css')
@endsection

@section('content')
    @include('layouts.navbar1')

    <div id="sch-top-mobile" class="py-2 px-2 bg-white z-30 sticky top-0 hidden">
      <button id="" class="text-sm text-gray-400 p-3 text-left w-full shadow-costum1 rounded-md cari-btn sticky top-[45.5px] bg-white ">
        <i class="fa-solid fa-magnifying-glass"></i> Cari Kos
      </button>
    </div>

    <div style="background-image: url(./img/demo/bg_hero_section_top.png);" class="bg h-[270px] max-w-6xl mx-auto  bg-no-repeat bg-cover p-5">
      <p class="text-3xl font-bold  pt-11 text-[#484848]">Cari Tempat Menginap?</p>
      <p class="text-xl text-gray-500">Dapatkan infonya dan langsung booking sekarang juga</p>
      <button id="sch-bottom" class="mt-5 text-sm text-gray-400 p-3 text-left w-80 shadow-costum1 rounded-md cari-btn">
        <i class="fa-solid fa-magnifying-glass"></i> Masukan nama lokasi/area/alamat
      </button>
      <div id="move-search"></div>
    </div>

    <br>

    @livewire('banner-utama')

    <div class="max-w-6xl mx-auto px-4 mt-20">
   

      <div class="p-6 rounded-xl shadow-costum1  mt-16">
        <p class="font-bold text-2xl text-[#484848]">Hotel Dikelola KeyPayRoom, Terjamin Nyaman</p>
        <p class="text-gray-500 mt-3">Fast Response 24/7, Foto Properti Akurat, Foto Area & Informasi lengkap
      </div>

      {{-- list product --}}
      @livewire('product.list-product')


      <!-- Testimoni -->     
      <div class="mt-5">
        <a class="text-2xl font-semibold">Apa kata pelanggan?</a>
        <div class="swiper mySwiper-testimoni ">
          <div class="swiper-wrapper ">
            <div class="swiper-slide">
              <div class="shadow-md px-10 py-5 max-w-[390px] rounded-md">
                <img src="https://static.mamikos.com/uploads/cache/data/style/2020-02-19/qXe2nVg5-240x320.jpg" class="w-14 h-14 object-cover rounded-full float-left" alt="">
                <p class="ml-20 font-semibold">Fathur bagus Septian</p>
                <p class="ml-20 text-sm italic text-gray-400 leading-[16px] mt-1">Sleman, Yogyakarta</p>
                <p class="text-sm text-gray-500 mt-4 leading-6 ">“Saya mempercayakan urusan promosi hotel Ayana kepada KeyPayRoom sebagai aplikasi penyedia 
                  layanan hotel terbesar di Indonesia. Jujur saja, saya sangat terbantu sekali dari segi 
                  marketing, operasional, perawatan bangunan hotel, dan lainnya. Apalagi terdapat fitur Premium di 
                  aplikasi KeyPayRoom yang membuat pencari hotel bisa menemukan hotel Ayana dengan mudah.” 
                </p>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="shadow-md px-10 py-5 max-w-[390px] rounded-md">
                <img src="https://static.mamikos.com/uploads/cache/data/style/2020-02-19/qXe2nVg5-240x320.jpg" class="w-14 h-14 object-cover rounded-full float-left" alt="">
                <p class="ml-20 font-semibold">Fathur bagus Septian</p>
                <p class="ml-20 text-sm italic text-gray-400 leading-[16px] mt-1">Depok, Sleman, Yogyakarta</p>
                <p class="text-sm text-gray-500 mt-4 leading-6 ">“Saya mempercayakan urusan promosi hotel Ayana kepada KeyPayRoom sebagai aplikasi penyedia 
                  layanan hotel terbesar di Indonesia. Jujur saja, saya sangat terbantu sekali dari segi 
                  marketing, operasional, perawatan bangunan hotel, dan lainnya. Apalagi terdapat fitur Premium di 
                  aplikasi KeyPayRoom yang membuat pencari hotel bisa menemukan hotel Ayana dengan mudah.” 
                </p>
              </div>       
            </div>
            <div class="swiper-slide">
              <div class="shadow-md px-10 py-5 max-w-[390px] rounded-md">
                <img src="https://static.mamikos.com/uploads/cache/data/style/2020-02-19/qXe2nVg5-240x320.jpg" class="w-14 h-14 object-cover rounded-full float-left" alt="">
                <p class="ml-20 font-semibold">Fathur bagus Septian</p>
                <p class="ml-20 text-sm italic text-gray-400 leading-[16px] mt-1">Depok, Sleman, Yogyakarta</p>
                <p class="text-sm text-gray-500 mt-4 leading-6 ">“Saya mempercayakan urusan promosi hotel Ayana kepada KeyPayRoom sebagai aplikasi penyedia 
                  layanan hotel terbesar di Indonesia. Jujur saja, saya sangat terbantu sekali dari segi 
                  marketing, operasional, perawatan bangunan hotel, dan lainnya. Apalagi terdapat fitur Premium di 
                  aplikasi KeyPayRoom yang membuat pencari hotel bisa menemukan hotel Ayana dengan mudah.” 
                </p>
              </div>        
            </div>
            <div class="swiper-slide">
              <div class="shadow-md px-10 py-5 max-w-[390px] rounded-md">
                <img src="https://static.mamikos.com/uploads/cache/data/style/2020-02-19/qXe2nVg5-240x320.jpg" class="w-14 h-14 object-cover rounded-full float-left" alt="">
                <p class="ml-20 font-semibold">Fathur bagus Septian</p>
                <p class="ml-20 text-sm italic text-gray-400 leading-[16px] mt-1">Ayana, Depok, Sleman, Yogyakarta</p>
                <p class="text-sm text-gray-500 mt-4 leading-6 ">“Saya mempercayakan urusan promosi hotel Ayana kepada KeyPayRoom sebagai aplikasi penyedia 
                  layanan hotel terbesar di Indonesia. Jujur saja, saya sangat terbantu sekali dari segi 
                  marketing, operasional, perawatan bangunan hotel, dan lainnya. Apalagi terdapat fitur Premium di 
                  aplikasi KeyPayRoom yang membuat pencari hotel bisa menemukan hotel Ayana dengan mudah.” 
                </p>
              </div>       
            </div>
            <div class="swiper-slide">
              <div class="shadow-md px-10 py-5 max-w-[390px] rounded-md">
                <img src="https://static.mamikos.com/uploads/cache/data/style/2020-02-19/qXe2nVg5-240x320.jpg" class="w-14 h-14 object-cover rounded-full float-left" alt="">
                <p class="ml-20 font-semibold">Fathur bagus Septian</p>
                <p class="ml-20 text-sm italic text-gray-400 leading-[16px] mt-1">Depok, Sleman, Yogyakarta</p>
                <p class="text-sm text-gray-500 mt-4 leading-6 ">“Saya mempercayakan urusan promosi hotel Ayana kepada KeyPayRoom sebagai aplikasi penyedia 
                  layanan hotel terbesar di Indonesia. Jujur saja, saya sangat terbantu sekali dari segi 
                  marketing, operasional, perawatan bangunan hotel, dan lainnya. Apalagi terdapat fitur Premium di 
                  aplikasi KeyPayRoom yang membuat pencari hotel bisa menemukan hotel Ayana dengan mudah.” 
                </p>
              </div>        
            </div>
          </div>
          <div class="swiper-button-prev-testimoni"><i class="fa-solid fa-chevron-left"></i></div>
          <div class="swiper-button-next-testimoni"><i class="fa-solid fa-chevron-right"></i></div>
        </div>
        <a class="px-8 py-3 bg-[#29af61] block max-w-md mx-auto text-center mt-5 text-white font-semibold rounded-md" href="">Booking Hotel Sekarang</a>  
      </div>

      {{-- list product --}}
      @livewire('product.list-product')

      {{-- list product --}}
      @livewire('product.list-product')


      <div class="mt-5">
        <p class="text-2xl font-semibold">Area Hotel Populer</p>
        <div class="grid lg:grid-cols-4 grid-cols-2 gap-5 mt-3">
            <div class="bg-cover bg-center w-full h-40 rounded-lg flex justify-center items-center text-2xl font-semibold text-white" style="background-image: url('https://mamikos.com/assets/area/desktop/jogja.png');" >
                <a href="">Jogjakarta</a>
            </div>
            <div class="bg-cover bg-center w-full h-40 rounded-lg flex justify-center items-center text-2xl font-semibold text-white" style="background-image: url('https://mamikos.com/assets/area/desktop/jakarta.png');" >
              <a href="">Jakarta</a>
            </div>
            <div class="bg-cover bg-center w-full h-40 rounded-lg flex justify-center items-center text-2xl font-semibold text-white" style="background-image: url('https://mamikos.com/assets/area/desktop/bandung.png');" >
              <a href="">Bandung</a>
            </div>
            <div class="bg-cover bg-center w-full h-40 rounded-lg flex justify-center items-center text-2xl font-semibold text-white" style="background-image: url('https://mamikos.com/assets/area/desktop/surabaya.png');" >
              <a href="">Surabaya</a>
            </div>
            <div class="bg-cover bg-center w-full h-40 rounded-lg flex justify-center items-center text-2xl font-semibold text-white" style="background-image: url('https://mamikos.com/assets/area/desktop/medan.png');" >
              <a href="">Medan</a>
            </div>
            <div class="bg-cover bg-center w-full h-40 rounded-lg flex justify-center items-center text-2xl font-semibold text-white" style="background-image: url('https://mamikos.com/assets/area/desktop/malang.png');" >
              <a href="">Malang</a>
            </div>
            <div class="bg-cover bg-center w-full h-40 rounded-lg flex justify-center items-center text-2xl font-semibold text-white" style="background-image: url('https://mamikos.com/assets/area/desktop/semarang.png');" >
              <a href="">Semarang</a>
            </div>
            <div class="bg-cover bg-center w-full h-40 rounded-lg flex justify-center items-center text-2xl font-semibold text-black bg-white"  >
              <a href="">Lihat Semua</a>
            </div>
        </div>
      </div>


      <div class="mt-5 hidden">
        <p class="text-2xl font-semibold">Area Kos Sekita Kampus</p>
        <div class="grid lg:grid-cols-4 grid-cols-2 gap-5 mt-3">
            <button onclick="location.href='#'"  class="w-full h-28 rounded-lg flex justify-center items-center  font-semibold text-black border" >
                <a href="">Ugm</a>
            </button>
            <button onclick="location.href='#'"  class="w-full h-28 rounded-lg flex justify-center items-center  font-semibold text-black border" >
              <a href="">Ugm</a>
            </button>
            <button onclick="location.href='#'"  class="w-full h-28 rounded-lg flex justify-center items-center  font-semibold text-black border" >
              <a href="">Ugm</a>
            </button>
            <button onclick="location.href='#'"  class="w-full h-28 rounded-lg flex justify-center items-center  font-semibold text-black border" >
              <a href="">Ugm</a>
            </button>
        </div>
      </div> 
    </div>

    <!-- info -->
    <div class="bg-gray-100 p-7 mt-8">
      <h3 class="text-2xl font-semibold mb-3">Pesan Hotel Murah di Indonesia</h3> <br>
      <p class="columns-1">
        KeyPayRoom - Aplikasi Anak hotel No. 1 di Indonesia <br>

        KeyPayRoom memanfaatkan teknologi untuk berkembang dari aplikasi cari hotel menjadi aplikasi yang memudahkan calon anak hotel untuk booking properti hotel dan juga melakukan pembayaran hotel. Saat ini kami memiliki lebih dari 2 juta kamar hotel yang tersebar di lebih dari 140 kota di seluruh Indonesia. KeyPayRoom juga menyediakan layanan manajemen properti, bernama Singgahsini dan Apik, untuk menjawab kebutuhan calon penghuni yang menginginkan hotel eksklusif atau hotel murah. KeyPayRoom berusaha untuk bisa terus menyajikan daftar rumah hotel dengan data ketersediaan kamar yang akurat, fasilitas hotel terperinci, dilengkapi dengan foto serta detail harga hotel, dan kemudahan survei via fitur virtual tour agar calon penghuni mendapatkan kenyamanan dalam proses pencarian dan booking hotel. <br>

        Untuk memberikan perlindungan bagi para anak hotel selama pandemi, KeyPayRoom menghadirkan hotel Higienis. hotel Higienis merupakan hotel dengan konsep yang menerapkan pelaksanaan standar protokol kesehatan, seperti disinfeksi kamar, jaga jarak, penggunaan masker, dan swab antigen untuk kamu saat akan mulai ngehotel nanti.


      </p>
    </div>

    <br>

    @include('layouts.cari')
    
    @livewire('footer')
    
  
@endsection
@section('footer')

@include('assets.js.home_js')
 
@endsection