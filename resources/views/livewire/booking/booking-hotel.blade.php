<div class="grid grid-cols-1 md:grid-cols-10 gap-2">

    <div class="col-span-6 px-4">

        <div class="alert shadow-md mb-3 rounded-md">
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="stroke-info flex-shrink-0 w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
              <div>
                <h3 class="font-bold text-center">Masuk/Daftar untuk Mendapatkan Promo Spesial</h3>                    
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
              <input type="text" placeholder="Name" wire:model="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />            
        
             
              <label for="label">
                <span class="label-text">Email</span>
              </label>
              <input type="text" placeholder="Email" wire:model="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />

              <label for="label">
                <span class="label-text">Phone Number</span>
              </label>
              <input type="text" placeholder="Phone Number" wire:model="phone_number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />

              <div class="form-control w-full">
                <label class="label">
                  <span class="label-text">Kewarga Negaraan</span>                     
                </label>
                <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" wire:model="warga_negara">
                  <option selected value="wni">Indonesia</option>
                  <option value="wna">Warna Negara Asing</option>                  
                </select>
               
              </div>


            </div>
        </div>

    </div>
        <!-- ... -->
    <div class="col-span-4">


      <div class="card card-side bg-base-100 shadow-md w-full relative">
       
        {{-- hotel  --}}
        <div class="card-body">
          
          <div class="flex gap-2 my-2">
              <div class="bg-[url('https://demo.keypayroom.co.id/storage/sample.jpg')] w-[150px] h-[60px] rounded-md">
                
              </div>
              
              <div>
                  <h2 class="card-title">{{ $hotel['title'] }}</h2>
                  <p>{{ $hotel['address'] }}</p>
              </div>                
            
          </div>
          

          <div class="card card-bordered p-3">

            <div class="grid grid-cols-3 p-2">
              <div>
                <span class="font-bold">Mendaftar </span> <br>
                <span>{{ $data['start_date'] }}</span>
              </div>
              
              <div>
                <span class="font-bold">Sampai </span> <br>
                <span>{{ $data['end_date'] }}</span>
              </div>

              <div>
                <span class="font-bold">Hari </span> <br>
                <span>{{ $data['qty'] }}</span>
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
            <span class="col-span-3">Biaya Kamar</span>
            <span class="col-span-1">Rp. {{ number_format($hotel['price'],0,',','.')  }}</span>
          </div>

          <div class="grid  grid-cols-4 content-end  gap-2 px-4 mt-3 hidden">
            <span class="col-span-3">Biaya Pajak & Layanan </span>
            <span class="col-span-1">Termasuk</span>
          </div>

          <div class="grid  grid-cols-4 content-end  gap-2 px-4 mt-3">
            <span class="col-span-3">Sarapan</span>
            <span class="col-span-1">Tidak Termasuk</span>
          </div>


          <div class="grid  grid-cols-4 content-end  gap-2 px-4 mt-3">
            <span class="col-span-3">Bisa Refund</span>
            <span class="col-span-1">Ya</span>
          </div>

          <div class="grid  grid-cols-4 content-end  gap-2 px-4 mt-3">
            <span class="col-span-3">Total</span>
            <span class="col-span-1 line-through">Rp. {{ number_format($total,0,',','.')  }}</span>
          </div>

          <div class="grid  grid-cols-4 content-end  gap-2 px-4 mt-3">
            <span class="col-span-3">Total Discount ({{ $hotel['discount'] }}%)</span>
            <span class="col-span-1">Rp. {{ number_format($discount,0,',','.')  }}</span>
          </div>

          <div class="px-4 mt-3">

            <h2 class="text-lg">Jumlah yang Harus Dibayar: <strong>Rp. {{ number_format($total_bayar,0,',','.')  }}</strong></h2>
          </div>

          <div class="px-4 mt-3 text-center">
            <button class="btn btn-primary" wire:click.prevent="payment">Bayar Sekarang</button>
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