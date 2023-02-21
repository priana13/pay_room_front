<div class="grid grid-cols-1 md:grid-cols-10 gap-2">

    <div class="col-span-2">
        <ul class="menu bg-base-100 w-56 p-2 rounded-box">
            <li><a>Bank/ ATM Transfer</a></li>
            <li><a>Kartu Kredit</a></li>
            <li><a>Alfamart</a></li>
        </ul>
    </div>

    <div class="col-span-4 px-4">

        <div class="alert bg-green-100 mb-3 rounded-md">
            <div>
              
              <div>
                <p class="text-sm">Jumlah yang Harus Dibayar</p>
                <h3 class="font-bold text-xl">RP. {{ number_format($total_bayar,0,',','.')  }}</h3>                    
              </div>
            </div>
           
        </div>
       
        <div class="card bg-base-100 shadow-md p-5 w-full my-2">                    
            <div class="flex flex-row justify-item-center content-center">
                <div class="basis-1/4">                            
                    <img src="https://images.reddoorz.com/payment_methods/137/BCA_new-1n.png" class="w-[50px]" alt="">
                </div>
                <div class="basis-1/2">Bank BCA</div>
                <div class="basis-1/4 text-right"><i class="fa-solid fa-chevron-right"></i></div>
            </div>               
        </div>

        <div class="card bg-base-100 shadow-md p-5 w-full my-2">                    
            <div class="flex flex-row justify-item-center content-center">
                <div class="basis-1/4">                            
                    <img src="https://images.reddoorz.com/payment_methods/4/1.png" class="w-[50px]" alt="">
                </div>
                <div class="basis-1/2">Bank Mandiri</div>
                <div class="basis-1/4 text-right"><i class="fa-solid fa-chevron-right"></i></div>
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
                  <h2 class="card-title">{{ $hotel['title'] }}</h2>
                  <p>{{ $hotel['address'] }}</p>
              </div>                
            
          </div>             

          

          <div class="card card-bordered p-3">

            <div class="grid grid-cols-3 p-2">
              <div>
                <span class="font-bold">Mendaftar </span> <br>
                <span>{{ $booking->start_date }}</span>
              </div>
              
              <div>
                <span class="font-bold">Sampai </span> <br>
                <span>{{ $booking->end_date }}</span>
              </div>

              <div>
                <span class="font-bold">Hari </span> <br>
                <span>{{ $booking->day_qty }}</span>
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
            <span class="col-span-1">Rp. {{ number_format($hotel['price'],0,',','.')  }}</span>
          </div>

          <div class="grid  grid-cols-4 content-end  gap-2 px-4 mt-3">
            <span class="col-span-3">Biaya Pajak & Layanan </span>
            <span class="col-span-1">Termasuk</span>
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