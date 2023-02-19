@extends('layouts.guest')



@section('content')

@include('layouts.navbar2')

<div class="container mx-auto mt-5">

    <div class="grid grid-cols-1 md:grid-cols-10 gap-2">

        <div class="col-span-6 px-4">

            <div class="alert shadow-md mb-3">
                <div>
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="stroke-info flex-shrink-0 w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                  <div>
                    <h3 class="font-bold">Masuk/Daftar untuk Mendapatkan Promo Spesial</h3>                    
                  </div>
                </div>
                <div class="flex-none">
                  <a class="btn btn-sm btn-primary" href="{{ route('login') }}">Login</a>
                </div>
            </div>
           
            <div class="card bg-base-100 shadow-md">
                
                <div class="card-body">                 
                  
                  <label for="label">
                    <span class="label-text">Name</span>
                  </label>
                  <input type="text" placeholder="Name" class="input w-full shadow-sm input-bordered input-lg" />
                 
                  <label for="label">
                    <span class="label-text">Email</span>
                  </label>
                  <input type="text" placeholder="Email" class="input w-full shadow-sm input-bordered input-lg " />

                  <label for="label">
                    <span class="label-text">Phone Number</span>
                  </label>
                  <input type="text" placeholder="Phone Number" class="input w-full shadow-sm input-bordered input-lg " />

                  <div class="form-control w-full">
                    <label class="label">
                      <span class="label-text">Kewarga Negaraan</span>                     
                    </label>
                    <select class="select select-bordered select-lg">
                      <option disabled selected>Pick one</option>
                      <option>Star Wars</option>
                      <option>Harry Potter</option>
                      <option>Lord of the Rings</option>
                      <option>Planet of the Apes</option>
                      <option>Star Trek</option>
                    </select>
                   
                  </div>


                </div>
            </div>

        </div>
            <!-- ... -->
        <div class="col-span-4">


          <div class="card card-side bg-base-100 shadow-md">
           
            {{-- hotel  --}}
            <div class="card-body">
              <div class="grid grid-flow-col auto-cols-max gap-2 my-2">
                  <div class="bg-[url('https://demo.keypayroom.co.id/storage/sample.jpg')] w-[60px] h-[60px] rounded-md">
                    tes
                  </div>
                  <div>
                      <h2 class="card-title">New movie is released!</h2>
                      <p>Click the button to watch on Jetflix app.</p>
                  </div>                
                
              </div>             

              

              <div class="card card-bordered p-3">

                <div class="grid grid-cols-3 p-2">
                  <div>
                    <span class="font-bold">Mendaftar </span> <br>
                    <span>Sab 4 Jan</span>
                  </div>
                  
                  <div>
                    <span class="font-bold">Sampai </span> <br>
                    <span>Ming 5 Jan</span>
                  </div>

                  <div>
                    <span class="font-bold">Kamar </span> <br>
                    <span>1</span>
                  </div>

                </div>  
                 {{-- grid tanggal  --}}

                 <div class="mt-2 border-t-2 p-2">

                  <span class="font-bold">Tipe Kamar </span> <br>
                  <span>Kamar Super Nyaman</span>

                 </div>
  
              </div>


              {{-- Rincian --}}

              <div class="grid  grid-cols-4 content-end  gap-2 px-4 mt-3">
                <span class="col-span-3">Harga Kamar</span>
                <span class="col-span-1">Rp. 500.876</span>
              </div>

              <div class="grid  grid-cols-4 content-end  gap-2 px-4 mt-3">
                <span class="col-span-3">Biaya Pajak & Layanan </span>
                <span class="col-span-1">Termasuk</span>
              </div>


              <div class="grid  grid-cols-4 content-end  gap-2 px-4 mt-3">
                <span class="col-span-3">Diskon Khusus</span>
                <span class="col-span-1">Rp. 9.8847</span>
              </div>

              <div class="grid  grid-cols-4 content-end  gap-2 px-4 mt-3">
                <span class="col-span-3">Sarapan</span>
                <span class="col-span-1">Tidak Termasuk</span>
              </div>


              <div class="grid  grid-cols-4 content-end  gap-2 px-4 mt-3">
                <span class="col-span-3">Bisa Refund</span>
                <span class="col-span-1">Ya</span>
              </div>

              <div class="px-4 mt-3">

                <h2 class="text-lg">Jumlah yang Harus Dibayar: <strong>Rp. 600.090</strong></h2>
              </div>

              <div class="px-4 mt-3 text-center">
                <a class="btn btn-secondary" href="{{ route('payment') }}">Bayar Sekarang</a>
              </div>


            </div>
            {{-- akhir card-body --}}           


          </div>
          {{-- akhir card --}}


          </div>
            <!-- ... -->
            
        
        </div> 
        {{-- col-span-4 --}}

    
    </div>
    {{-- grid --}}

</div>
{{-- container --}}


@endsection