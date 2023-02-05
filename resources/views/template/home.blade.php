@extends('template.component.layout')
@section('custom_header')
  <style>

      .swiper {
        width: 100%;
        height: 100%;
        padding-top: 16px;
        padding-bottom: 16px;
      }

      .swiper-slide .banner {
        text-align: center;
        font-size: 18px;
        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
      }

      
        .swiper-slide a img {
          display: block;
          width: 70%;
          height: 70%;
          object-fit: cover;
          transition: all 0.6s ease;
          border-radius: 10px;
        }
      

      
      
      

      .swiper-slide-active a img {
        transform: scale(1.13);
      }

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

    .swiper-button-prev-testimoni {
      align-items: center;
      background-image: none;
      background: #fff;
      border-radius: 50%;
      box-shadow: 0 4px 4px rgb(0 0 0 / 25%);
      display: flex;
      height: 40px;
      justify-content: center;
      left: 0;
      position: absolute;
      top: 50%;
      width: 40px;
      z-index: 10;
    }
    .swiper-button-next-testimoni {
      align-items: center;
      background-image: none;
      background: #fff;
      border-radius: 50%;
      box-shadow: 0 4px 4px rgb(0 0 0 / 25%);
      display: flex;
      height: 40px;
      justify-content: center;
      right: 0;
      position: absolute;
      top: 50%;
      width: 40px;
      z-index: 10;
    }

    .navigation-link {
        color: #000;
        font-weight: 600;
        margin: 8px 32px;
        position: static;
        text-align: center;
        font-size: 14px;
        top: 0;
        width: 136px;
    }

    .swiper-button-next::after,.swiper-button-prev::after, 
    .swiper-button-next-card::after,.swiper-button-prev-card::after ,
    .swiper-button-next-card2::after,.swiper-button-prev-card2::after ,
    .swiper-button-next-card3::after,.swiper-button-prev-card3::after ,
    .swiper-button-next-testimoni::after,.swiper-button-prev-testimoni::after{
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
    @include('template.component.navbar1')

    <div id="sch-top-mobile" class="py-2 px-2 bg-white z-30 sticky top-0 hidden">
      <button id="" class="text-sm text-gray-400 p-3 text-left w-full shadow-costum1 rounded-md cari-btn sticky top-[45.5px] bg-white ">
        <i class="fa-solid fa-magnifying-glass"></i> Cari Kos
      </button>
    </div>

    <div style="background-image: url(./img/demo/bg_hero_section_top.png);" class="bg h-[270px] max-w-6xl mx-auto  bg-no-repeat bg-cover p-5">
      <p class="text-3xl font-bold  pt-11 text-[#484848]">Mau cari kos ?</p>
      <p class="text-xl text-gray-500">Dapatkan infonya dan langsung sewa di Key Pay Room.</p>
      <button id="sch-bottom" class="mt-5 text-sm text-gray-400 p-3 text-left w-80 shadow-costum1 rounded-md cari-btn">
        <i class="fa-solid fa-magnifying-glass"></i> Masukan nama lokasi/area/alamat
      </button>
      <div id="move-search"></div>
    </div>

    <br>
    <div class="max-w-6xl mx-auto px-1">
      <div class="swiper mySwiper ">
        <div class="swiper-wrapper ">
          <div class="swiper-slide ">
            <a class="banner" href="">          
              <img src="{{asset('storage/banner/banner1.jpg')}}" alt="">
            </a>
          </div>
          <div class="swiper-slide">
            <a class="banner" href="">          
              <img src="{{asset('storage/banner/banner2.jpg')}}" alt="">
            </a>        
          </div>
          <div class="swiper-slide">
            <a class="banner" href="">          
              <img src="{{asset('storage/banner/banner3.jpg')}}" alt="">
            </a>        
          </div>
       
        </div>
      </div>
      <div class="btn__navigation mt-10">
        <div class="swiper-button-prev "><i class="fa-solid fa-chevron-left"></i></div>
          <a class="navigation-link" href="">Lihat semua promo</a>
        <div class="swiper-button-next"><i class="fa-solid fa-chevron-right"></i></div>
      </div>
    </div>
    <div class="max-w-6xl mx-auto px-4 mt-20">
      <div class="p-6 rounded-xl shadow-costum1 max-w-3xl">
        <p class="font-bold text-2xl text-[#484848]">Coba cara baru bayar kos!</p>
        <p class="text-gray-500 my-3">Biar bayar kos lebih gampang dan aman, coba sistem pembayaran khusus buat anak kos.</p>
        <p class="text-xs font-semibold underline"><a href="">Mau coba dong</a></p>
      </div>
      <div class="p-6 rounded-xl shadow-costum1  mt-16 mb-10">
        <p class="font-bold text-2xl text-[#484848]">Kos Dikelola KeyPayRoom,Terjamin Nyaman</p>
        <p class="text-gray-500 mt-3">Fast Response 24/7, Foto Properti Akurat, Foto Area & Informasi lengkap
      </div>
      <!-- Swiper card 1 -->
      <div class="grid lg:grid-cols-[38%_0%_7%_21%_34%]">
        <div class="mt-2">
          <a class="text-2xl font-semibold">Promo Ngebut</a>&nbsp;
          <select class="text-2xl focus:outline-none text-[#29af61] font-semibold border-b-2" name="" id="">
            <option value="">Semua Kota</option>
            <option value="">Jakata Selatan</option>
            <option value="">Bogor </option>
          </select>
        </div>
        <div></div>
        <div class="mt-2">
          <p class="text-xs text-gray-400 font-semibold mt-1">Akan Berakhir
            dalam waktu:
          </p>
        </div>
        <div class="bg-[#f6f6f6] lg:ml-2 p-[8px] flex mt-2">
          <div class="flex">
            <div class="bg-white font-semibold text-sm py-1 px-2">
              25 Hari
            </div>
          </div>
          <div class="flex ml-3">
            <div class="bg-white font-semibold text-sm py-1 px-3">
              21
            </div>
            <p class="mx-1">:</p>
          </div>
          <div class="flex ">
            <div class="bg-white font-semibold text-sm py-1 px-3">
              31
            </div>
            <p class="mx-1">:</p>
          </div>
          <div class="flex ">
            <div class="bg-white font-semibold text-sm py-1 px-3">
              41
            </div>
          </div>
        </div>
        <div class="flex lg:justify-end mt-2">
          <a href="" class="py-1.5 px-3 border rounded-md ">
            Lihat Semua
          </a>
          <p class="text-3xl text-gray-300 mb-2 mx-4">|</p>
          <div class="btn__navigation ">
            <div class="swiper-button-prev-card "><i class="fa-solid fa-chevron-left"></i></div>&emsp;
            <div class="swiper-button-next-card"><i class="fa-solid fa-chevron-right"></i></div>
          </div>
        </div>
      </div>
      <div class="swiper mySwiper-card ">
        <div class="swiper-wrapper ">
          <div class="swiper-slide">
            <div class="grid lg:grid-cols-4 grid-cols-2 text-center gap-2 mt-3">
              <button class="text-left mx-auto"  onclick="location.href='#'">
                <div class="font-semibold max-w-[265px]">
                  <img class="w-[265px] h-[150px] rounded-xl object-cover" src="https://static.mamikos.com/uploads/cache/data/style/2022-12-29/CqqT0kpm-360x480.jpg" alt="">
                  <div class="mt-3">      
                    <a class="py-1 px-2 text-sm border rounded-md ">Campur</a>&nbsp;
                    <a class="p-1 text-xs  rounded-md text-[#da3438] italic">Sisa 4 Kamar</a>
                  </div>
                  <p class="line-clamp-1 text-sm mt-3 text-[#303030]">
                    Kost Apik Siwalankerto Permai H24 Tipe A Wonocolo Surabaya
                  </p>
                  <p class="line-clamp-1 text-sm mt-1 ">
                    Wonocolo Surabaya
                  </p>
                  <p class="line-clamp-1 text-xs mt-1 text-gray-400">
                    K. Mandi Dalam ·WiFi ·AC ·Kloset Duduk ·Kasur Televisi
                </p>
                <div class="text-sm mt-1">
                    <a class=" text-red-600"><i class="fa-solid fa-bolt"></i> 20%</a>
                    <a class="text-gray-400 line-through">Rp1.090.000</a>
                </div>
                <div class="text-[#303030]">
                <a >Rp872.000</a><a class="text-sm">/ bulan</a> 
                </div>
                </div>
              </button>
              <button class="text-left mx-auto"  onclick="location.href='#'">
                <div class="font-semibold max-w-[265px]">
                  <img class="w-[265px] h-[150px] rounded-xl object-cover" src="https://static.mamikos.com/uploads/cache/data/style/2022-12-29/CqqT0kpm-360x480.jpg" alt="">
                  <div class="mt-3">      
                    <a class="py-1 px-2 text-sm border rounded-md ">Campur</a>&nbsp;
                    <a class="p-1 text-xs  rounded-md text-[#da3438] italic">Sisa 4 Kamar</a>
                  </div>
                  <p class="line-clamp-1 text-sm mt-3 text-[#303030]">
                    Kost Apik Siwalankerto Permai H24 Tipe A Wonocolo Surabaya
                  </p>
                  <p class="line-clamp-1 text-sm mt-1 ">
                    Wonocolo Surabaya
                  </p>
                  <p class="line-clamp-1 text-xs mt-1 text-gray-400">
                    K. Mandi Dalam ·WiFi ·AC ·Kloset Duduk ·Kasur Televisi
                </p>
                <div class="text-sm mt-1">
                    <a class=" text-red-600"><i class="fa-solid fa-bolt"></i> 20%</a>
                    <a class="text-gray-400 line-through">Rp1.090.000</a>
                </div>
                <div class="text-[#303030]">
                <a >Rp872.000</a><a class="text-sm">/ bulan</a> 
                </div>
                </div>
              </button>
              <button class="text-left mx-auto"  onclick="location.href='#'">
                <div class="font-semibold max-w-[265px]">
                  <img class="w-[265px] h-[150px] rounded-xl object-cover" src="https://static.mamikos.com/uploads/cache/data/style/2022-12-29/CqqT0kpm-360x480.jpg" alt="">
                  <div class="mt-3">      
                    <a class="py-1 px-2 text-sm border rounded-md ">Campur</a>&nbsp;
                    <a class="p-1 text-xs  rounded-md text-[#da3438] italic">Sisa 4 Kamar</a>
                  </div>
                  <p class="line-clamp-1 text-sm mt-3 text-[#303030]">
                    Kost Apik Siwalankerto Permai H24 Tipe A Wonocolo Surabaya
                  </p>
                  <p class="line-clamp-1 text-sm mt-1 ">
                    Wonocolo Surabaya
                  </p>
                  <p class="line-clamp-1 text-xs mt-1 text-gray-400">
                    K. Mandi Dalam ·WiFi ·AC ·Kloset Duduk ·Kasur Televisi
                </p>
                <div class="text-sm mt-1">
                    <a class=" text-red-600"><i class="fa-solid fa-bolt"></i> 20%</a>
                    <a class="text-gray-400 line-through">Rp1.090.000</a>
                </div>
                <div class="text-[#303030]">
                <a >Rp872.000</a><a class="text-sm">/ bulan</a> 
                </div>
                </div>
              </button>
              <button class="text-left mx-auto"  onclick="location.href='#'">
                <div class="font-semibold max-w-[265px]">
                  <img class="w-[265px] h-[150px] rounded-xl object-cover" src="https://static.mamikos.com/uploads/cache/data/style/2022-12-29/CqqT0kpm-360x480.jpg" alt="">
                  <div class="mt-3">      
                    <a class="py-1 px-2 text-sm border rounded-md ">Campur</a>&nbsp;
                    <a class="p-1 text-xs  rounded-md text-[#da3438] italic">Sisa 4 Kamar</a>
                  </div>
                  <p class="line-clamp-1 text-sm mt-3 text-[#303030]">
                    Kost Apik Siwalankerto Permai H24 Tipe A Wonocolo Surabaya
                  </p>
                  <p class="line-clamp-1 text-sm mt-1 ">
                    Wonocolo Surabaya
                  </p>
                  <p class="line-clamp-1 text-xs mt-1 text-gray-400">
                    K. Mandi Dalam ·WiFi ·AC ·Kloset Duduk ·Kasur Televisi
                </p>
                <div class="text-sm mt-1">
                    <a class=" text-red-600"><i class="fa-solid fa-bolt"></i> 20%</a>
                    <a class="text-gray-400 line-through">Rp1.090.000</a>
                </div>
                <div class="text-[#303030]">
                <a >Rp872.000</a><a class="text-sm">/ bulan</a> 
                </div>
                </div>
              </button>
            </div>
          </div>
          <div class="swiper-slide">
          <div class="grid lg:grid-cols-4 grid-cols-2 text-center gap-2 mt-3">
            <button class="text-left mx-auto"  onclick="location.href='#'">
              <div class="font-semibold max-w-[265px]">
                  <img class="w-[265px] h-[150px] rounded-xl object-cover" src="https://static.mamikos.com/uploads/cache/data/style/2022-12-29/CqqT0kpm-360x480.jpg" alt="">
                  <div class="mt-3">      
                    <a class="py-1 px-2 text-sm border rounded-md ">Campur</a>&nbsp;
                    <a class="p-1 text-xs  rounded-md text-[#da3438] italic">Sisa 4 Kamar</a>
                  </div>
                  <p class="line-clamp-1 text-sm mt-3 text-[#303030]">
                    Kost Apik Siwalankerto Permai H24 Tipe A Wonocolo Surabaya
                  </p>
                  <p class="line-clamp-1 text-sm mt-1 ">
                    Wonocolo Surabaya
                  </p>
                  <p class="line-clamp-1 text-xs mt-1 text-gray-400">
                    K. Mandi Dalam ·WiFi ·AC ·Kloset Duduk ·Kasur Televisi
                </p>
                <div class="text-sm mt-1">
                    <a class=" text-red-600"><i class="fa-solid fa-bolt"></i> 20%</a>
                    <a class="text-gray-400 line-through">Rp1.090.000</a>
                </div>
                <div class="text-[#303030]">
                <a >Rp872.000</a><a class="text-sm">/ bulan</a> 
                </div>
                </div>
              </button>
              <button class="text-left mx-auto"  onclick="location.href='#'">
                <div class="font-semibold max-w-[265px]">
                  <img class="w-[265px] h-[150px] rounded-xl object-cover" src="https://static.mamikos.com/uploads/cache/data/style/2022-12-29/CqqT0kpm-360x480.jpg" alt="">
                  <div class="mt-3">      
                    <a class="py-1 px-2 text-sm border rounded-md ">Campur</a>&nbsp;
                    <a class="p-1 text-xs  rounded-md text-[#da3438] italic">Sisa 4 Kamar</a>
                  </div>
                  <p class="line-clamp-1 text-sm mt-3 text-[#303030]">
                    Kost Apik Siwalankerto Permai H24 Tipe A Wonocolo Surabaya
                  </p>
                  <p class="line-clamp-1 text-sm mt-1 ">
                    Wonocolo Surabaya
                  </p>
                  <p class="line-clamp-1 text-xs mt-1 text-gray-400">
                    K. Mandi Dalam ·WiFi ·AC ·Kloset Duduk ·Kasur Televisi
                </p>
                <div class="text-sm mt-1">
                    <a class=" text-red-600"><i class="fa-solid fa-bolt"></i> 20%</a>
                    <a class="text-gray-400 line-through">Rp1.090.000</a>
                </div>
                <div class="text-[#303030]">
                <a >Rp872.000</a><a class="text-sm">/ bulan</a> 
                </div>
                </div>
              </button>
              <button class="text-left mx-auto"  onclick="location.href='#'">
                <div class="font-semibold max-w-[265px]">
                  <img class="w-[265px] h-[150px] rounded-xl object-cover" src="https://static.mamikos.com/uploads/cache/data/style/2022-12-29/CqqT0kpm-360x480.jpg" alt="">
                  <div class="mt-3">      
                    <a class="py-1 px-2 text-sm border rounded-md ">Campur</a>&nbsp;
                    <a class="p-1 text-xs  rounded-md text-[#da3438] italic">Sisa 4 Kamar</a>
                  </div>
                  <p class="line-clamp-1 text-sm mt-3 text-[#303030]">
                    Kost Apik Siwalankerto Permai H24 Tipe A Wonocolo Surabaya
                  </p>
                  <p class="line-clamp-1 text-sm mt-1 ">
                    Wonocolo Surabaya
                  </p>
                  <p class="line-clamp-1 text-xs mt-1 text-gray-400">
                    K. Mandi Dalam ·WiFi ·AC ·Kloset Duduk ·Kasur Televisi
                </p>
                <div class="text-sm mt-1">
                    <a class=" text-red-600"><i class="fa-solid fa-bolt"></i> 20%</a>
                    <a class="text-gray-400 line-through">Rp1.090.000</a>
                </div>
                <div class="text-[#303030]">
                <a >Rp872.000</a><a class="text-sm">/ bulan</a> 
                </div>
                </div>
              </button>
              <button class="text-left mx-auto"  onclick="location.href='#'">
                <div class="font-semibold max-w-[265px]">
                  <img class="w-[265px] h-[150px] rounded-xl object-cover" src="https://static.mamikos.com/uploads/cache/data/style/2022-12-29/CqqT0kpm-360x480.jpg" alt="">
                  <div class="mt-3">      
                    <a class="py-1 px-2 text-sm border rounded-md ">Campur</a>&nbsp;
                    <a class="p-1 text-xs  rounded-md text-[#da3438] italic">Sisa 4 Kamar</a>
                  </div>
                  <p class="line-clamp-1 text-sm mt-3 text-[#303030]">
                    Kost Apik Siwalankerto Permai H24 Tipe A Wonocolo Surabaya
                  </p>
                  <p class="line-clamp-1 text-sm mt-1 ">
                    Wonocolo Surabaya
                  </p>
                  <p class="line-clamp-1 text-xs mt-1 text-gray-400">
                    K. Mandi Dalam ·WiFi ·AC ·Kloset Duduk ·Kasur Televisi
                </p>
                <div class="text-sm mt-1">
                    <a class=" text-red-600"><i class="fa-solid fa-bolt"></i> 20%</a>
                    <a class="text-gray-400 line-through">Rp1.090.000</a>
                </div>
                <div class="text-[#303030]">
                <a >Rp872.000</a><a class="text-sm">/ bulan</a> 
                </div>
                </div>
              </button>
            </div>   
          </div>
        </div>
      </div>  
      <!-- Testimoni -->
      <div class="mt-5">
        <a class="text-2xl font-semibold">Kata Pemilik Kost</a>
        <div class="swiper mySwiper-testimoni ">
          <div class="swiper-wrapper ">
            <div class="swiper-slide">
              <div class="shadow-md px-10 py-5 max-w-[390px] rounded-md">
                <img src="https://static.mamikos.com/uploads/cache/data/style/2020-02-19/qXe2nVg5-240x320.jpg" class="w-14 h-14 object-cover rounded-full float-left" alt="">
                <p class="ml-20 font-semibold">Fathur bagus Septian</p>
                <p class="ml-20 text-sm italic text-gray-400 leading-[16px] mt-1">Kos Putri Eksklusif MamiRooms Ayana, Depok, Sleman, Yogyakarta</p>
                <p class="text-sm text-gray-500 mt-4 leading-6 ">“Saya mempercayakan urusan promosi kos Ayana kepada KeyPayRoom sebagai aplikasi penyedia 
                  layanan kos terbesar di Indonesia. Jujur saja, saya sangat terbantu sekali dari segi 
                  marketing, operasional, perawatan bangunan kos, dan lainnya. Apalagi terdapat fitur Premium di 
                  aplikasi KeyPayRoom yang membuat pencari kos bisa menemukan kos Ayana dengan mudah.” 
                </p>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="shadow-md px-10 py-5 max-w-[390px] rounded-md">
                <img src="https://static.mamikos.com/uploads/cache/data/style/2020-02-19/qXe2nVg5-240x320.jpg" class="w-14 h-14 object-cover rounded-full float-left" alt="">
                <p class="ml-20 font-semibold">Fathur bagus Septian</p>
                <p class="ml-20 text-sm italic text-gray-400 leading-[16px] mt-1">Kos Putri Eksklusif MamiRooms Ayana, Depok, Sleman, Yogyakarta</p>
                <p class="text-sm text-gray-500 mt-4 leading-6 ">“Saya mempercayakan urusan promosi kos Ayana kepada KeyPayRoom sebagai aplikasi penyedia 
                  layanan kos terbesar di Indonesia. Jujur saja, saya sangat terbantu sekali dari segi 
                  marketing, operasional, perawatan bangunan kos, dan lainnya. Apalagi terdapat fitur Premium di 
                  aplikasi KeyPayRoom yang membuat pencari kos bisa menemukan kos Ayana dengan mudah.” 
                </p>
              </div>       
            </div>
            <div class="swiper-slide">
              <div class="shadow-md px-10 py-5 max-w-[390px] rounded-md">
                <img src="https://static.mamikos.com/uploads/cache/data/style/2020-02-19/qXe2nVg5-240x320.jpg" class="w-14 h-14 object-cover rounded-full float-left" alt="">
                <p class="ml-20 font-semibold">Fathur bagus Septian</p>
                <p class="ml-20 text-sm italic text-gray-400 leading-[16px] mt-1">Kos Putri Eksklusif MamiRooms Ayana, Depok, Sleman, Yogyakarta</p>
                <p class="text-sm text-gray-500 mt-4 leading-6 ">“Saya mempercayakan urusan promosi kos Ayana kepada KeyPayRoom sebagai aplikasi penyedia 
                  layanan kos terbesar di Indonesia. Jujur saja, saya sangat terbantu sekali dari segi 
                  marketing, operasional, perawatan bangunan kos, dan lainnya. Apalagi terdapat fitur Premium di 
                  aplikasi KeyPayRoom yang membuat pencari kos bisa menemukan kos Ayana dengan mudah.” 
                </p>
              </div>        
            </div>
            <div class="swiper-slide">
              <div class="shadow-md px-10 py-5 max-w-[390px] rounded-md">
                <img src="https://static.mamikos.com/uploads/cache/data/style/2020-02-19/qXe2nVg5-240x320.jpg" class="w-14 h-14 object-cover rounded-full float-left" alt="">
                <p class="ml-20 font-semibold">Fathur bagus Septian</p>
                <p class="ml-20 text-sm italic text-gray-400 leading-[16px] mt-1">Kos Putri Eksklusif MamiRooms Ayana, Depok, Sleman, Yogyakarta</p>
                <p class="text-sm text-gray-500 mt-4 leading-6 ">“Saya mempercayakan urusan promosi kos Ayana kepada KeyPayRoom sebagai aplikasi penyedia 
                  layanan kos terbesar di Indonesia. Jujur saja, saya sangat terbantu sekali dari segi 
                  marketing, operasional, perawatan bangunan kos, dan lainnya. Apalagi terdapat fitur Premium di 
                  aplikasi KeyPayRoom yang membuat pencari kos bisa menemukan kos Ayana dengan mudah.” 
                </p>
              </div>       
            </div>
            <div class="swiper-slide">
              <div class="shadow-md px-10 py-5 max-w-[390px] rounded-md">
                <img src="https://static.mamikos.com/uploads/cache/data/style/2020-02-19/qXe2nVg5-240x320.jpg" class="w-14 h-14 object-cover rounded-full float-left" alt="">
                <p class="ml-20 font-semibold">Fathur bagus Septian</p>
                <p class="ml-20 text-sm italic text-gray-400 leading-[16px] mt-1">Kos Putri Eksklusif MamiRooms Ayana, Depok, Sleman, Yogyakarta</p>
                <p class="text-sm text-gray-500 mt-4 leading-6 ">“Saya mempercayakan urusan promosi kos Ayana kepada KeyPayRoom sebagai aplikasi penyedia 
                  layanan kos terbesar di Indonesia. Jujur saja, saya sangat terbantu sekali dari segi 
                  marketing, operasional, perawatan bangunan kos, dan lainnya. Apalagi terdapat fitur Premium di 
                  aplikasi KeyPayRoom yang membuat pencari kos bisa menemukan kos Ayana dengan mudah.” 
                </p>
              </div>        
            </div>
          </div>
          <div class="swiper-button-prev-testimoni"><i class="fa-solid fa-chevron-left"></i></div>
          <div class="swiper-button-next-testimoni"><i class="fa-solid fa-chevron-right"></i></div>
        </div>
        <a class="px-8 py-3 bg-[#29af61] block max-w-md mx-auto text-center mt-5 text-white font-semibold rounded-md" href=""> Daftarka Kos Sekarang</a>  
      </div>

      <!-- Swiper card 2 -->
      <div class="grid lg:grid-cols-2  mt-14">
        <div class="mt-2">
          <a class="text-2xl font-semibold">Promo Ngebut</a>&nbsp;
          <select class="text-2xl focus:outline-none text-[#29af61] font-semibold border-b-2" name="" id="">
            <option value="">Semua Kota</option>
            <option value="">Jakata Selatan</option>
            <option value="">Bogor </option>
          </select>
        </div>
        
        <div class="flex lg:justify-end mt-2">
          <a href="" class="py-1.5 px-3 border rounded-md ">
            Lihat Semua
          </a>
          <p class="text-3xl text-gray-300 mb-2 mx-4">|</p>
          <div class="btn__navigation ">
            <div class="swiper-button-prev-card2"><i class="fa-solid fa-chevron-left"></i></div>&emsp;
            <div class="swiper-button-next-card2"><i class="fa-solid fa-chevron-right"></i></div>
          </div>
        </div>
      </div>
      <div class="swiper mySwiper-card2">
        <div class="swiper-wrapper ">
          <div class="swiper-slide">
            <div class="grid lg:grid-cols-4 grid-cols-2 text-center gap-2 mt-3">
              <button class="text-left mx-auto"  onclick="location.href='#'">
                <div class="font-semibold max-w-[265px]">
                  <img class="w-[265px] h-[150px] rounded-xl object-cover" src="https://static.mamikos.com/uploads/cache/data/style/2022-12-29/CqqT0kpm-360x480.jpg" alt="">
                  <div class="mt-3">      
                    <a class="py-1 px-2 text-sm border rounded-md ">Campur</a>&nbsp;
                    <a class="p-1 text-xs  rounded-md text-[#da3438] italic">Sisa 4 Kamar</a>
                  </div>
                  <p class="line-clamp-1 text-sm mt-3 text-[#303030]">
                    Kost Apik Siwalankerto Permai H24 Tipe A Wonocolo Surabaya
                  </p>
                  <p class="line-clamp-1 text-sm mt-1 ">
                    Wonocolo Surabaya
                  </p>
                  <p class="line-clamp-1 text-xs mt-1 text-gray-400">
                    K. Mandi Dalam ·WiFi ·AC ·Kloset Duduk ·Kasur Televisi
                </p>
                
                <div class="text-[#303030]">
                <a >Rp872.000</a><a class="text-sm">/ bulan</a> 
                </div>
                </div>
              </button>
              <button class="text-left mx-auto"  onclick="location.href='#'">
                <div class="font-semibold max-w-[265px]">
                  <img class="w-[265px] h-[150px] rounded-xl object-cover" src="https://static.mamikos.com/uploads/cache/data/style/2022-12-29/CqqT0kpm-360x480.jpg" alt="">
                  <div class="mt-3">      
                    <a class="py-1 px-2 text-sm border rounded-md ">Campur</a>&nbsp;
                    <a class="p-1 text-xs  rounded-md text-[#da3438] italic">Sisa 4 Kamar</a>
                  </div>
                  <p class="line-clamp-1 text-sm mt-3 text-[#303030]">
                    Kost Apik Siwalankerto Permai H24 Tipe A Wonocolo Surabaya
                  </p>
                  <p class="line-clamp-1 text-sm mt-1 ">
                    Wonocolo Surabaya
                  </p>
                  <p class="line-clamp-1 text-xs mt-1 text-gray-400">
                    K. Mandi Dalam ·WiFi ·AC ·Kloset Duduk ·Kasur Televisi
                </p>
                
                <div class="text-[#303030]">
                <a >Rp872.000</a><a class="text-sm">/ bulan</a> 
                </div>
                </div>
              </button>
              <button class="text-left mx-auto"  onclick="location.href='#'">
                <div class="font-semibold max-w-[265px]">
                  <img class="w-[265px] h-[150px] rounded-xl object-cover" src="https://static.mamikos.com/uploads/cache/data/style/2022-12-29/CqqT0kpm-360x480.jpg" alt="">
                  <div class="mt-3">      
                    <a class="py-1 px-2 text-sm border rounded-md ">Campur</a>&nbsp;
                    <a class="p-1 text-xs  rounded-md text-[#da3438] italic">Sisa 4 Kamar</a>
                  </div>
                  <p class="line-clamp-1 text-sm mt-3 text-[#303030]">
                    Kost Apik Siwalankerto Permai H24 Tipe A Wonocolo Surabaya
                  </p>
                  <p class="line-clamp-1 text-sm mt-1 ">
                    Wonocolo Surabaya
                  </p>
                  <p class="line-clamp-1 text-xs mt-1 text-gray-400">
                    K. Mandi Dalam ·WiFi ·AC ·Kloset Duduk ·Kasur Televisi
                </p>
                
                <div class="text-[#303030]">
                <a >Rp872.000</a><a class="text-sm">/ bulan</a> 
                </div>
                </div>
              </button>
              <button class="text-left mx-auto"  onclick="location.href='#'">
                <div class="font-semibold max-w-[265px]">
                  <img class="w-[265px] h-[150px] rounded-xl object-cover" src="https://static.mamikos.com/uploads/cache/data/style/2022-12-29/CqqT0kpm-360x480.jpg" alt="">
                  <div class="mt-3">      
                    <a class="py-1 px-2 text-sm border rounded-md ">Campur</a>&nbsp;
                    <a class="p-1 text-xs  rounded-md text-[#da3438] italic">Sisa 4 Kamar</a>
                  </div>
                  <p class="line-clamp-1 text-sm mt-3 text-[#303030]">
                    Kost Apik Siwalankerto Permai H24 Tipe A Wonocolo Surabaya
                  </p>
                  <p class="line-clamp-1 text-sm mt-1 ">
                    Wonocolo Surabaya
                  </p>
                  <p class="line-clamp-1 text-xs mt-1 text-gray-400">
                    K. Mandi Dalam ·WiFi ·AC ·Kloset Duduk ·Kasur Televisi
                </p>
                
                <div class="text-[#303030]">
                <a >Rp872.000</a><a class="text-sm">/ bulan</a> 
                </div>
                </div>
              </button>
            </div>
          </div>
          <div class="swiper-slide">
          <div class="grid lg:grid-cols-4 grid-cols-2 text-center gap-2 mt-3">
            <button class="text-left mx-auto"  onclick="location.href='#'">
              <div class="font-semibold max-w-[265px]">
                  <img class="w-[265px] h-[150px] rounded-xl object-cover" src="https://static.mamikos.com/uploads/cache/data/style/2022-12-29/CqqT0kpm-360x480.jpg" alt="">
                  <div class="mt-3">      
                    <a class="py-1 px-2 text-sm border rounded-md ">Campur</a>&nbsp;
                    <a class="p-1 text-xs  rounded-md text-[#da3438] italic">Sisa 4 Kamar</a>
                  </div>
                  <p class="line-clamp-1 text-sm mt-3 text-[#303030]">
                    Kost Apik Siwalankerto Permai H24 Tipe A Wonocolo Surabaya
                  </p>
                  <p class="line-clamp-1 text-sm mt-1 ">
                    Wonocolo Surabaya
                  </p>
                  <p class="line-clamp-1 text-xs mt-1 text-gray-400">
                    K. Mandi Dalam ·WiFi ·AC ·Kloset Duduk ·Kasur Televisi
                </p>
                
                <div class="text-[#303030]">
                <a >Rp872.000</a><a class="text-sm">/ bulan</a> 
                </div>
                </div>
              </button>
              <button class="text-left mx-auto"  onclick="location.href='#'">
                <div class="font-semibold max-w-[265px]">
                  <img class="w-[265px] h-[150px] rounded-xl object-cover" src="https://static.mamikos.com/uploads/cache/data/style/2022-12-29/CqqT0kpm-360x480.jpg" alt="">
                  <div class="mt-3">      
                    <a class="py-1 px-2 text-sm border rounded-md ">Campur</a>&nbsp;
                    <a class="p-1 text-xs  rounded-md text-[#da3438] italic">Sisa 4 Kamar</a>
                  </div>
                  <p class="line-clamp-1 text-sm mt-3 text-[#303030]">
                    Kost Apik Siwalankerto Permai H24 Tipe A Wonocolo Surabaya
                  </p>
                  <p class="line-clamp-1 text-sm mt-1 ">
                    Wonocolo Surabaya
                  </p>
                  <p class="line-clamp-1 text-xs mt-1 text-gray-400">
                    K. Mandi Dalam ·WiFi ·AC ·Kloset Duduk ·Kasur Televisi
                </p>
                
                <div class="text-[#303030]">
                <a >Rp872.000</a><a class="text-sm">/ bulan</a> 
                </div>
                </div>
              </button>
              <button class="text-left mx-auto"  onclick="location.href='#'">
                <div class="font-semibold max-w-[265px]">
                  <img class="w-[265px] h-[150px] rounded-xl object-cover" src="https://static.mamikos.com/uploads/cache/data/style/2022-12-29/CqqT0kpm-360x480.jpg" alt="">
                  <div class="mt-3">      
                    <a class="py-1 px-2 text-sm border rounded-md ">Campur</a>&nbsp;
                    <a class="p-1 text-xs  rounded-md text-[#da3438] italic">Sisa 4 Kamar</a>
                  </div>
                  <p class="line-clamp-1 text-sm mt-3 text-[#303030]">
                    Kost Apik Siwalankerto Permai H24 Tipe A Wonocolo Surabaya
                  </p>
                  <p class="line-clamp-1 text-sm mt-1 ">
                    Wonocolo Surabaya
                  </p>
                  <p class="line-clamp-1 text-xs mt-1 text-gray-400">
                    K. Mandi Dalam ·WiFi ·AC ·Kloset Duduk ·Kasur Televisi
                </p>
                
                <div class="text-[#303030]">
                <a >Rp872.000</a><a class="text-sm">/ bulan</a> 
                </div>
                </div>
              </button>
              <button class="text-left mx-auto"  onclick="location.href='#'">
                <div class="font-semibold max-w-[265px]">
                  <img class="w-[265px] h-[150px] rounded-xl object-cover" src="https://static.mamikos.com/uploads/cache/data/style/2022-12-29/CqqT0kpm-360x480.jpg" alt="">
                  <div class="mt-3">      
                    <a class="py-1 px-2 text-sm border rounded-md ">Campur</a>&nbsp;
                    <a class="p-1 text-xs  rounded-md text-[#da3438] italic">Sisa 4 Kamar</a>
                  </div>
                  <p class="line-clamp-1 text-sm mt-3 text-[#303030]">
                    Kost Apik Siwalankerto Permai H24 Tipe A Wonocolo Surabaya
                  </p>
                  <p class="line-clamp-1 text-sm mt-1 ">
                    Wonocolo Surabaya
                  </p>
                  <p class="line-clamp-1 text-xs mt-1 text-gray-400">
                    K. Mandi Dalam ·WiFi ·AC ·Kloset Duduk ·Kasur Televisi
                </p>
                <div class="text-sm mt-1">
                  
                </div>
                <div class="text-[#303030]">
                <a >Rp872.000</a><a class="text-sm">/ bulan</a> 
                </div>
                </div>
              </button>
            </div>   
          </div>  
        </div>
      </div>  

      <!-- Swiper card 3 -->
      <div class="grid lg:grid-cols-2  mt-14">
        <div class="mt-2">
          <a class="text-2xl font-semibold">Promo Ngebut</a>&nbsp;
          <select class="text-2xl focus:outline-none text-[#29af61] font-semibold border-b-2" name="" id="">
            <option value="">Semua Kota</option>
            <option value="">Jakata Selatan</option>
            <option value="">Bogor </option>
          </select>
        </div>
        
        <div class="flex lg:justify-end mt-2">
          <a href="" class="py-1.5 px-3 border rounded-md ">
            Lihat Semua
          </a>
          <p class="text-3xl text-gray-300 mb-2 mx-4">|</p>
          <div class="btn__navigation ">
            <div class="swiper-button-prev-card3"><i class="fa-solid fa-chevron-left"></i></div>&emsp;
            <div class="swiper-button-next-card3"><i class="fa-solid fa-chevron-right"></i></div>
          </div>
        </div>
      </div>
      <div class="swiper mySwiper-card3">
        <div class="swiper-wrapper ">
          <div class="swiper-slide">
            <div class="grid lg:grid-cols-4 grid-cols-2 text-center gap-2 mt-3">
              <button class="text-left mx-auto"  onclick="location.href='#'">
                <div class="font-semibold max-w-[265px]">
                  <img class="w-[265px] h-[150px] rounded-xl object-cover" src="https://static.mamikos.com/uploads/cache/data/style/2022-12-29/CqqT0kpm-360x480.jpg" alt="">
                  <div class="mt-3">      
                    <a class="py-1 px-2 text-sm border rounded-md ">Campur</a>&nbsp;
                    <a class="p-1 text-xs  rounded-md text-[#da3438] italic">Sisa 4 Kamar</a>
                  </div>
                  <p class="line-clamp-1 text-sm mt-3 text-[#303030]">
                    Kost Apik Siwalankerto Permai H24 Tipe A Wonocolo Surabaya
                  </p>
                  <p class="line-clamp-1 text-sm mt-1 ">
                    Wonocolo Surabaya
                  </p>
                  <p class="line-clamp-1 text-xs mt-1 text-gray-400">
                    K. Mandi Dalam ·WiFi ·AC ·Kloset Duduk ·Kasur Televisi
                </p>
                <div class="text-sm mt-1">
                    <a class=" text-red-600"><i class="fa-solid fa-bolt"></i> 20%</a>
                    <a class="text-gray-400 line-through">Rp1.090.000</a>
                </div>
                <div class="text-[#303030]">
                <a >Rp872.000</a><a class="text-sm">/ bulan</a> 
                </div>
                </div>
              </button>
              <button class="text-left mx-auto"  onclick="location.href='#'">
                <div class="font-semibold max-w-[265px]">
                  <img class="w-[265px] h-[150px] rounded-xl object-cover" src="https://static.mamikos.com/uploads/cache/data/style/2022-12-29/CqqT0kpm-360x480.jpg" alt="">
                  <div class="mt-3">      
                    <a class="py-1 px-2 text-sm border rounded-md ">Campur</a>&nbsp;
                    <a class="p-1 text-xs  rounded-md text-[#da3438] italic">Sisa 4 Kamar</a>
                  </div>
                  <p class="line-clamp-1 text-sm mt-3 text-[#303030]">
                    Kost Apik Siwalankerto Permai H24 Tipe A Wonocolo Surabaya
                  </p>
                  <p class="line-clamp-1 text-sm mt-1 ">
                    Wonocolo Surabaya
                  </p>
                  <p class="line-clamp-1 text-xs mt-1 text-gray-400">
                    K. Mandi Dalam ·WiFi ·AC ·Kloset Duduk ·Kasur Televisi
                </p>
                <div class="text-sm mt-1">
                    <a class=" text-red-600"><i class="fa-solid fa-bolt"></i> 20%</a>
                    <a class="text-gray-400 line-through">Rp1.090.000</a>
                </div>
                <div class="text-[#303030]">
                <a >Rp872.000</a><a class="text-sm">/ bulan</a> 
                </div>
                </div>
              </button>
              <button class="text-left mx-auto"  onclick="location.href='#'">
                <div class="font-semibold max-w-[265px]">
                  <img class="w-[265px] h-[150px] rounded-xl object-cover" src="https://static.mamikos.com/uploads/cache/data/style/2022-12-29/CqqT0kpm-360x480.jpg" alt="">
                  <div class="mt-3">      
                    <a class="py-1 px-2 text-sm border rounded-md ">Campur</a>&nbsp;
                    <a class="p-1 text-xs  rounded-md text-[#da3438] italic">Sisa 4 Kamar</a>
                  </div>
                  <p class="line-clamp-1 text-sm mt-3 text-[#303030]">
                    Kost Apik Siwalankerto Permai H24 Tipe A Wonocolo Surabaya
                  </p>
                  <p class="line-clamp-1 text-sm mt-1 ">
                    Wonocolo Surabaya
                  </p>
                  <p class="line-clamp-1 text-xs mt-1 text-gray-400">
                    K. Mandi Dalam ·WiFi ·AC ·Kloset Duduk ·Kasur Televisi
                </p>
                <div class="text-sm mt-1">
                    <a class=" text-red-600"><i class="fa-solid fa-bolt"></i> 20%</a>
                    <a class="text-gray-400 line-through">Rp1.090.000</a>
                </div>
                <div class="text-[#303030]">
                <a >Rp872.000</a><a class="text-sm">/ bulan</a> 
                </div>
                </div>
              </button>
              <button class="text-left mx-auto"  onclick="location.href='#'">
                <div class="font-semibold max-w-[265px]">
                  <img class="w-[265px] h-[150px] rounded-xl object-cover" src="https://static.mamikos.com/uploads/cache/data/style/2022-12-29/CqqT0kpm-360x480.jpg" alt="">
                  <div class="mt-3">      
                    <a class="py-1 px-2 text-sm border rounded-md ">Campur</a>&nbsp;
                    <a class="p-1 text-xs  rounded-md text-[#da3438] italic">Sisa 4 Kamar</a>
                  </div>
                  <p class="line-clamp-1 text-sm mt-3 text-[#303030]">
                    Kost Apik Siwalankerto Permai H24 Tipe A Wonocolo Surabaya
                  </p>
                  <p class="line-clamp-1 text-sm mt-1 ">
                    Wonocolo Surabaya
                  </p>
                  <p class="line-clamp-1 text-xs mt-1 text-gray-400">
                    K. Mandi Dalam ·WiFi ·AC ·Kloset Duduk ·Kasur Televisi
                </p>
                <div class="text-sm mt-1">
                    <a class=" text-red-600"><i class="fa-solid fa-bolt"></i> 20%</a>
                    <a class="text-gray-400 line-through">Rp1.090.000</a>
                </div>
                <div class="text-[#303030]">
                <a >Rp872.000</a><a class="text-sm">/ bulan</a> 
                </div>
                </div>
              </button>
            </div>
          </div>
          <div class="swiper-slide">
          <div class="grid lg:grid-cols-4 grid-cols-2 text-center gap-2 mt-3">
            <button class="text-left mx-auto"  onclick="location.href='#'">
              <div class="font-semibold max-w-[265px]">
                  <img class="w-[265px] h-[150px] rounded-xl object-cover" src="https://static.mamikos.com/uploads/cache/data/style/2022-12-29/CqqT0kpm-360x480.jpg" alt="">
                  <div class="mt-3">      
                    <a class="py-1 px-2 text-sm border rounded-md ">Campur</a>&nbsp;
                    <a class="p-1 text-xs  rounded-md text-[#da3438] italic">Sisa 4 Kamar</a>
                  </div>
                  <p class="line-clamp-1 text-sm mt-3 text-[#303030]">
                    Kost Apik Siwalankerto Permai H24 Tipe A Wonocolo Surabaya
                  </p>
                  <p class="line-clamp-1 text-sm mt-1 ">
                    Wonocolo Surabaya
                  </p>
                  <p class="line-clamp-1 text-xs mt-1 text-gray-400">
                    K. Mandi Dalam ·WiFi ·AC ·Kloset Duduk ·Kasur Televisi
                </p>
                <div class="text-sm mt-1">
                    <a class=" text-red-600"><i class="fa-solid fa-bolt"></i> 20%</a>
                    <a class="text-gray-400 line-through">Rp1.090.000</a>
                </div>
                <div class="text-[#303030]">
                <a >Rp872.000</a><a class="text-sm">/ bulan</a> 
                </div>
                </div>
              </button>
              <button class="text-left mx-auto"  onclick="location.href='#'">
                <div class="font-semibold max-w-[265px]">
                  <img class="w-[265px] h-[150px] rounded-xl object-cover" src="https://static.mamikos.com/uploads/cache/data/style/2022-12-29/CqqT0kpm-360x480.jpg" alt="">
                  <div class="mt-3">      
                    <a class="py-1 px-2 text-sm border rounded-md ">Campur</a>&nbsp;
                    <a class="p-1 text-xs  rounded-md text-[#da3438] italic">Sisa 4 Kamar</a>
                  </div>
                  <p class="line-clamp-1 text-sm mt-3 text-[#303030]">
                    Kost Apik Siwalankerto Permai H24 Tipe A Wonocolo Surabaya
                  </p>
                  <p class="line-clamp-1 text-sm mt-1 ">
                    Wonocolo Surabaya
                  </p>
                  <p class="line-clamp-1 text-xs mt-1 text-gray-400">
                    K. Mandi Dalam ·WiFi ·AC ·Kloset Duduk ·Kasur Televisi
                </p>
                <div class="text-sm mt-1">
                    <a class=" text-red-600"><i class="fa-solid fa-bolt"></i> 20%</a>
                    <a class="text-gray-400 line-through">Rp1.090.000</a>
                </div>
                <div class="text-[#303030]">
                <a >Rp872.000</a><a class="text-sm">/ bulan</a> 
                </div>
                </div>
              </button>
              <button class="text-left mx-auto"  onclick="location.href='#'">
                <div class="font-semibold max-w-[265px]">
                  <img class="w-[265px] h-[150px] rounded-xl object-cover" src="https://static.mamikos.com/uploads/cache/data/style/2022-12-29/CqqT0kpm-360x480.jpg" alt="">
                  <div class="mt-3">      
                    <a class="py-1 px-2 text-sm border rounded-md ">Campur</a>&nbsp;
                    <a class="p-1 text-xs  rounded-md text-[#da3438] italic">Sisa 4 Kamar</a>
                  </div>
                  <p class="line-clamp-1 text-sm mt-3 text-[#303030]">
                    Kost Apik Siwalankerto Permai H24 Tipe A Wonocolo Surabaya
                  </p>
                  <p class="line-clamp-1 text-sm mt-1 ">
                    Wonocolo Surabaya
                  </p>
                  <p class="line-clamp-1 text-xs mt-1 text-gray-400">
                    K. Mandi Dalam ·WiFi ·AC ·Kloset Duduk ·Kasur Televisi
                </p>
                <div class="text-sm mt-1">
                    <a class=" text-red-600"><i class="fa-solid fa-bolt"></i> 20%</a>
                    <a class="text-gray-400 line-through">Rp1.090.000</a>
                </div>
                <div class="text-[#303030]">
                <a >Rp872.000</a><a class="text-sm">/ bulan</a> 
                </div>
                </div>
              </button>
              <button class="text-left mx-auto"  onclick="location.href='#'">
                <div class="font-semibold max-w-[265px]">
                  <img class="w-[265px] h-[150px] rounded-xl object-cover" src="https://static.mamikos.com/uploads/cache/data/style/2022-12-29/CqqT0kpm-360x480.jpg" alt="">
                  <div class="mt-3">      
                    <a class="py-1 px-2 text-sm border rounded-md ">Campur</a>&nbsp;
                    <a class="p-1 text-xs  rounded-md text-[#da3438] italic">Sisa 4 Kamar</a>
                  </div>
                  <p class="line-clamp-1 text-sm mt-3 text-[#303030]">
                    Kost Apik Siwalankerto Permai H24 Tipe A Wonocolo Surabaya
                  </p>
                  <p class="line-clamp-1 text-sm mt-1 ">
                    Wonocolo Surabaya
                  </p>
                  <p class="line-clamp-1 text-xs mt-1 text-gray-400">
                    K. Mandi Dalam ·WiFi ·AC ·Kloset Duduk ·Kasur Televisi
                </p>
                <div class="text-sm mt-1">
                    <a class=" text-red-600"><i class="fa-solid fa-bolt"></i> 20%</a>
                    <a class="text-gray-400 line-through">Rp1.090.000</a>
                </div>
                <div class="text-[#303030]">
                <a >Rp872.000</a><a class="text-sm">/ bulan</a> 
                </div>
                </div>
              </button>
            </div>   
          </div>
          
        </div>
      </div> 
      <div class="mt-5">
        <p class="text-2xl font-semibold">Area Kos Populer</p>
        <div class="grid lg:grid-cols-4 grid-cols-2 gap-5 mt-3">
            <div class="bg-cover bg-center w-full h-40 rounded-lg flex justify-center items-center text-2xl font-semibold text-white" style="background-image: url('https://mamikos.com/assets/area/desktop/jogja.png');" >
                <a href="">Jogjakarta</a>
            </div>
            <div class="bg-cover bg-center w-full h-40 rounded-lg flex justify-center items-center text-2xl font-semibold text-white" style="background-image: url('https://mamikos.com/assets/area/desktop/jogja.png');" >
              <a href="">Jogjakarta</a>
            </div>
            <div class="bg-cover bg-center w-full h-40 rounded-lg flex justify-center items-center text-2xl font-semibold text-white" style="background-image: url('https://mamikos.com/assets/area/desktop/jogja.png');" >
              <a href="">Jogjakarta</a>
            </div>
            <div class="bg-cover bg-center w-full h-40 rounded-lg flex justify-center items-center text-2xl font-semibold text-white" style="background-image: url('https://mamikos.com/assets/area/desktop/jogja.png');" >
              <a href="">Jogjakarta</a>
            </div>
            <div class="bg-cover bg-center w-full h-40 rounded-lg flex justify-center items-center text-2xl font-semibold text-white" style="background-image: url('https://mamikos.com/assets/area/desktop/jogja.png');" >
              <a href="">Jogjakarta</a>
            </div>
            <div class="bg-cover bg-center w-full h-40 rounded-lg flex justify-center items-center text-2xl font-semibold text-white" style="background-image: url('https://mamikos.com/assets/area/desktop/jogja.png');" >
              <a href="">Jogjakarta</a>
            </div>
            <div class="bg-cover bg-center w-full h-40 rounded-lg flex justify-center items-center text-2xl font-semibold text-white" style="background-image: url('https://mamikos.com/assets/area/desktop/jogja.png');" >
              <a href="">Jogjakarta</a>
            </div>
            <div class="bg-cover bg-center w-full h-40 rounded-lg flex justify-center items-center text-2xl font-semibold text-black bg-white"  >
              <a href="">Lihat Semua</a>
            </div>
        </div>
      </div>
      <div class="mt-5">
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
        <p class="columns-2">
          KeyPayRoom - Aplikasi Anak Kos No. 1 di Indonesia

          KeyPayRoom memanfaatkan teknologi untuk berkembang dari aplikasi cari kos menjadi aplikasi yang memudahkan calon anak kos untuk booking properti kos dan juga melakukan pembayaran kos. Saat ini kami memiliki lebih dari 2 juta kamar kos yang tersebar di lebih dari 140 kota di seluruh Indonesia. KeyPayRoom juga menyediakan layanan manajemen properti, bernama Singgahsini dan Apik, untuk menjawab kebutuhan calon penghuni yang menginginkan kos eksklusif atau kos murah. KeyPayRoom berusaha untuk bisa terus menyajikan daftar rumah kos dengan data ketersediaan kamar yang akurat, fasilitas kos terperinci, dilengkapi dengan foto serta detail harga kos, dan kemudahan survei via fitur virtual tour agar calon penghuni mendapatkan kenyamanan dalam proses pencarian dan booking kos.

            Untuk memberikan perlindungan bagi para anak kos selama pandemi, KeyPayRoom menghadirkan Kos Higienis. Kos Higienis merupakan kos dengan konsep yang menerapkan pelaksanaan standar protokol kesehatan, seperti disinfeksi kamar, jaga jarak, penggunaan masker, dan swab antigen untuk kamu saat akan mulai ngekos nanti.

            Fitur yang dapat dimanfaatkan di KeyPayRoom

            Fitur Pencarian

            Di kolom pencarian, kamu bisa cari kos di sekitarmu atau kos di seluruh daerah di Indonesia dengan memasukkan keyword, seperti kos dekat Kampus/Universitas di masing-masing kota, cari kos di Jogja, Depok, Jakarta, Surabaya, Bandung, dan kota besar lainnya atau cari kos di sekitar lokasi saya saat ini.

            Filter Pencarian

            Cari kos berdasarkan fasilitas kos yang kamu mau, lebih mudah dengan filter berdasarkan Kos AC, Kos Kamar mandi dalam, Kos Wifi. Bisa juga pilih kos dengan tipe kos, mulai dari Kos Harian, Kos Bulanan hingga Kos Tahunan. Mau cari Kos Bebas, Kos Pasutri, Kos Putra, Kos Putri, Kos Campur juga bisa.

            Chat dengan Penyewa

            Terhubung langsung dengan pemilik kos dan bisa bertanya lebih lanjut mengenai info kos melalui fitur chat di KeyPayRoom.

            Booking Langsung

            Bisa langsung mengajukan sewa kos di aplikasi atau website KeyPayRoom. Bahkan, kamu bisa mulai sewa kos dari 3 bulan sebelum masuk kosan. Transaksi lebih aman, tanpa takut kamarnya penuh keduluan orang lain.

            Virtual Tour

            Virtual Tour KeyPayRoom adalah media foto lingkungan kos dalam 360° yang diperuntukkan untuk kamu, para pencari kos, agar dapat mengetahui kondisi lingkungan kos secara detail tanpa harus survei langsung. Fitur ini cocok jadi andalanmu yang butuh kosan tapi tidak punya waktu untuk survei langsung, karena fitur ini menampilkan keadaan kos secara lengkap dari berbagai sudut.

            Pembayaran via KeyPayRoom

            Bayar kosan anti ribet, cashless, dan jaminan aman, dengan beragam pilihan metode pembayaran. Nikmati promo-promo menarik yang diselenggarakan secara berkala untuk membantu kamu ngekos lebih hemat.

            MamiPoin

            Sebagai wujud terima kasih, KeyPayRoom menghadirkan program loyalti melalui MamiPoin. Anak kos bisa mendapatkan poin sebagai cashback setiap melakukan pembayaran kos dan dapat dikumpulkan untuk digunakan sebagai tambahan diskon di pembayaran kos selanjutnya. Pemilik kos juga akan mendapatkan MamiPoin setiap melakukan aktivitas di KeyPayRoom dan dapat dikumpulkan untuk ditukar menjadi beragam hadiah menarik atau tambahan diskon di pembayaran paket KeyPayRoom GoldPlus.

            Kos Review

            Lihat review dari para penghuni kos agar kamu semakin yakin untuk sewa kos. Kamu juga bisa tulis pengalaman kamu selama ngekos untuk menambah info kos tersebut.

            Favorit

            Ketemu dengan kos idaman, bisa disimpan 
            dulu melalui fitur favorit kos. Kos yang sudah
            kamu simpan, dapat kamu booking di kemudian hari.
        </p>
    </div>
    <br>

    @include('template.component.cari')
    
    @include('template.component.footer')


    
  
@endsection
  @section('footer')

      <script>
      //swiper
        var swiper = new Swiper(".mySwiper", {
          slidesPerView: 1.5,
          spaceBetween: 30,
          speed: 900,
          centeredSlides: true,loop: true,
          autoplay: {
            delay: 2500,
            disableOnInteraction: false,
          },
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
            disabledClass: 'disabled_swiper_button'

          },
          breakpoints: {
            640: {
              spaceBetween: -100,
            },
          },
          
          
        });


        var swiper2 = new Swiper(".mySwiper-card", {
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

        var swiper3 = new Swiper(".mySwiper-testimoni", {
          slidesPerView: 1.2,
          spaceBetween: 30,
          speed: 900,        
          navigation: {
            nextEl: ".swiper-button-next-testimoni",
            prevEl: ".swiper-button-prev-testimoni",
          }, 
          breakpoints: {
            640: {
              slidesPerView: 3,
              spaceBetween: 30,
            },
          },   
        });

        var swiper4 = new Swiper(".mySwiper-card3", {
          slidesPerView: 1,
          spaceBetween: 10,
          speed: 900,
          centeredSlides: true,
          
          navigation: {
            nextEl: ".swiper-button-next-card3",
            prevEl: ".swiper-button-prev-card3",
            disabledClass: 'disabled_swiper_button'

          },    
        });

        var swiper5 = new Swiper(".mySwiper-card2", {
          slidesPerView: 1,
          spaceBetween: 10,
          speed: 900,
          centeredSlides: true,
          
          navigation: {
            nextEl: ".swiper-button-next-card2",
            prevEl: ".swiper-button-prev-card2",
            disabledClass: 'disabled_swiper_button'

          },    
        });

        
      // move search

      $(window).scroll(function() {

        var hT = $('#move-search').offset().top,
            hH = $('#move-search').outerHeight(),
            wH = $(window).height(),
            wS = $(this).scrollTop();
        if($( document ).width() < 850){
          if (wS > (hT+hH-wH) && (hT > wS) && (wS+wH > hT+hH)){
            $('#sch-top-mobile').hide()
          } else {
            $('#sch-top-mobile').show()
          }
          return;
        }
          
        if (wS > (hT+hH-wH) && (hT > wS) && (wS+wH > hT+hH)){
          $('#sch-top').hide()
        } else {
          $('#sch-top').show()
        }
      });


      const axios = require('axios');

      // Make a request for a user with a given ID
      axios.get('/api/houses')
        .then(function (response) {
          // handle success
          console.log(response);
        })
        .catch(function (error) {
          // handle error
          console.log(error);
        })
        .then(function () {
          // always executed
        });
        
          
      </script>
@endsection
