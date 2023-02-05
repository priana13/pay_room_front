@extends('template.component.layout')
@section('custom_header')
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.css" rel="stylesheet" />
<style>


</style>
@endsection
@section('content')

  @include('template.component.navbar2')
  <div class="max-w-5xl mx-auto px-2">
    <div class="border w-full rounded-lg mt-8">
        <div class="p-2 bg-green-100 font-semibold text-lg">
            Data Pribadi
        </div>
        <div class="text-center">
            <button id="avtr-btn" class="mx-auto  w-32 h-32  bg-[#EFF1F3] text-gray-500 text-3xl rounded-full mt-5" >
                <i class="fa-solid fa-camera-retro"></i>
            </button>
            <input id="avtr" class="hidden" type="file">
        </div>
        <div class="max-w-3xl mx-auto">
            <div class="grid grid-cols-[25%_auto]  mt-5">
                <div class="flex items-center">
                    Nama Lengkap *
                </div>
                <div>
                    <input class="w-full focus:ring-0 rounded-md border-gray-300" type="text">
                </div>
            </div>
            <div class="grid grid-cols-[25%_auto]  mt-5">
                <div class="flex items-center">
                    Jenis Kelamin *
                </div>
                <div>
                    <input id="lk" name="klmn" type="radio"> <label for="lk">Laki-Laki</label>&emsp;
                    <input id="pr" name="klmn" type="radio"> <label for="pr">Perempuan</label>&emsp;
                </div>
            </div>
            <div class="grid grid-cols-[25%_auto]  mt-5">
                <div class="flex items-center">
                    Tanggal Lahir
                </div>
                <div>
                    <div class="relative max-w-sm">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                          <svg aria-hidden="true" class="w-5 h-5 text-gray-500 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                        </div>
                        <input datepicker type="text" class="bg-gray-50 border border-gray-300 focus:ring-0 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-[25%_auto]  mt-5">
                <div class="flex items-center">
                    Kota Asal
                </div>
                <div>
                    <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-0 focus:border-blue-500 block w-full p-2.5">
                        <option selected>Pilih Kota</option>
                        <option value="US">United States</option>
                        <option value="CA">Canada</option>
                        <option value="FR">France</option>
                        <option value="DE">Germany</option>
                    </select>
                </div>
            </div>
            <div class="grid grid-cols-[25%_auto]  mt-5">
                <div class="flex items-center">
                    Status
                </div>
                <div>
                    <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-0 focus:border-blue-500 block w-full p-2.5">
                        <option selected></option>
                        <option value="Kawin">Kawin</option>
                        <option value="">Belum</option>
                    </select>
                </div>
            </div>
            <div class="grid grid-cols-[25%_auto]  mt-5">
                <div class="flex items-center">
                    No. Handphone Darurat
                </div>
                <div>
                    <input class="w-full focus:ring-0 rounded-md border-gray-300" type="number">
                </div>
            </div>
            <br>
        </div>   
    </div>
    <div class="border w-full rounded-lg mt-8">
        <div class="p-2 bg-green-100 font-semibold text-lg">
            Profesi
        </div>
        <div class="max-w-3xl mx-auto">
            <div class="grid grid-cols-[25%_auto]  mt-5">
                <div class="flex items-center">
                    Pekerjaan *
                </div>
                <div>
                    <input id="mh" name="kerja" type="radio"> <label for="mh">Mahasiswa</label>&emsp;
                    <input id="kr" name="kerja" type="radio"> <label for="kr">Karyawan</label>&emsp;
                    <input id="ln" name="kerja" type="radio"> <label for="ln">Lainnya</label>&emsp;
                </div>
            </div>
            <div class="grid grid-cols-[25%_auto]  mt-5">
                <div class="flex items-center">
                    Nama pekerjaan *
                </div>
                <div>
                    <input class="w-full focus:ring-0 rounded-md border-gray-300" type="text">
                </div>
            </div>
            <br>
        </div>
    </div>
  </div>


 
  <br>

  @include('template.component.cari')

  
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