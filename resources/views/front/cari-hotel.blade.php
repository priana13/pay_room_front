@extends('layouts.guest')
@section('custom_header')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet">

<style>

    .select2-selection__rendered,select {
        line-height: 41px !important;
    }
    .select2-container .select2-selection--single {
        height: 45px !important;
    }
    .select2-selection__arrow {
        height: 44px !important;
    }

</style>
@endsection
@section('content')

  @include('layouts.navbar')
  <div class="sticky top-0 z-30 grid grid-cols-[40px_auto_70px] py-3 px-2 bg-white lg:hidden shadow-lg">
    <div>
      <button class="text-xl">
        <i class="fa-solid fa-arrow-left mt-3"></i>
      </button>
    </div>
    <div >
      <button id="sch-bottom" class="text-sm text-gray-400 px-3 py-2.5 text-left w-full border rounded-md cari-btn">
        <i class="fa-solid fa-magnifying-glass"></i> Masukan nama lokasi
      </button>
    </div>
    <div class="text-right text-xl">
      
      <button class="rounded-lg py-1 px-2 border text-lg mt-1 btn-menu">
        <i class="fa-solid fa-bars"></i>
      </button>
    </div>
  </div>
  
<div class="bg-[#29af61] w-full h-52 flex items-center justify-center">
    <p class="text-3xl font-bold text-white">
      Cari Hotel
    </p>
  </div>
  <div class="max-w-7xl mx-auto px-2">
    <div class="p-5 shadow-costum1 sm:grid grid-cols-5 gap-5 sticky top-16 lg:top-28  -mt-14 bg-white rounded-md">
      <div>
        <p class="font-semibold text-sm">Pilih Lokasi</p>
        <select name="" id="" class="select select-bordered pb-3 pt-0 rounded-[4px] focus:outline-none w-full">
          <option value='' selected='true' > Semua Kota </option> 
          <option value='' > Jakarta Pusat </option> 
          <option value='' > Bogor </option> 
          <option value='' > Yogyakarta </option> 
        </select>
      </div>
      <div class="hidden lg:block">
        <p class="font-semibold text-sm">Tipe Hotel</p>
        <select name=""  class="select select-bordered pb-3 pt-0 rounded-[4px] focus:outline-none w-full">
          <option value='' selected='true'>Semua</option>
          <option value='' >Ksusus Putra </option> 
          <option value='' > Ksusus Putra </option> 
          <option value='' > Campuran </option> 
        </select>
      </div>
      <div class="hidden lg:block">
        <p class="font-semibold text-sm">Rentang harga</p>
        <div class="relative">
          <div class="absolute  ml-3 mt-3 h-5  flex items-center text-gray-500">
            Rp
          </div>
          <input  placeholder="dari" class="input input-bordered py-2.5  pl-10 rounded-[4px] focus:outline-none w-full" type="text" name="" value="0" id="">
        </div> 
      </div>
      <div class="hidden lg:block">
        <p class="font-semibold text-sm">&emsp;</p>
        <div class="relative">
          <div class="absolute  ml-3 mt-3 h-5  flex items-center text-gray-500">
            Rp
          </div>
          <input  placeholder="sampai" class="input input-bordered py-2.5  pl-10 rounded-[4px] focus:outline-none w-full" type="text" name="" value="0" id="">
        </div> 
      </div>
      <div class="hidden lg:block">
        <button class="w-full py-2.5 mt-5 bg-[#29af61] rounded-md text-white ">
          Cari
        </button>
      </div>
    </div>
    <div class="grid lg:grid-cols-4 grid-cols-2 text-center gap-4 mt-9">
      <button class="card shadow-xl p-5 rounded-md text-left mx-auto"  onclick="location.href='#'">
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
      <button class=" card shadow-xl p-5 rounded-md text-left mx-auto"  onclick="location.href='#'">
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
      <button class="card shadow-xl p-5 rounded-md text-left mx-auto"  onclick="location.href='#'">
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

      <button class="card shadow-xl p-5 rounded-md text-left mx-auto"  onclick="location.href='#'">
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

  <button  class="fixed inset-x-0 -bottom-[1px] z-10 bg-[#29af61] shadow-costum1  font-semibold text-white py-3 pr-4 lg:hidden fltr hidden">
    Filter & Urutkan
  </button>
  <div id="filter" class="z-40 fixed top-0 content-center h-full w-full bg-white overflow-y-auto p-3 hidden">
    <div class="text-right">
      <button class="px-4 py-2 rounded-lg clos_fltr">
        <i id="close_fltr" class="fa-solid fa-x"></i>
      </button>
    </div>
    <p class="font-semibold text-sm mt-5">Tipe Kost</p>
    <select name=""  class="border border-gray-400 p-2.5 rounded-[4px] focus:outline-none w-full">
      <option value='' selected='true'>Semua</option>
      <option value='' >Ksusus Putra </option> 
      <option value='' > Ksusus Putra </option> 
      <option value='' > Campuran </option> 
    </select>
    <div class="grid grid-cols-2 mt-5 gap-3">
      <div >
        <p class="font-semibold text-sm">Rentang harga</p>
        <div class="relative">
          <div class="absolute  ml-3 mt-3 h-5  flex items-center text-gray-500">
            Rp
          </div>
          <input  placeholder="dari" class="border border-gray-400 py-2.5  pl-10 rounded-[4px] focus:outline-none w-full" type="text" name="" value="0" id="">
        </div> 
      </div>
      <div >
        <p class="font-semibold text-sm">&emsp;</p>
        <div class="relative">
          <div class="absolute  ml-3 mt-3 h-5  flex items-center text-gray-500">
            Rp
          </div>
          <input  placeholder="sampai" class="border border-gray-400 py-2.5  pl-10 rounded-[4px] focus:outline-none w-full" type="text" name="" value="0" id="">
        </div> 
      </div>
    </div>
    <button  class="fixed inset-x-0 -bottom-[1px] z-10 bg-orange-500 shadow-costum1  font-semibold text-white py-3 pr-4 clos_fltr">
      Filter & Urutkan
    </button>
  </div>

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
