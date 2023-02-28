<div>

  <style>
      div#social-links {
          margin: 0 auto;
          max-width: 500px;
      }
      div#social-links ul li {
          display: inline-block;
      }          
      div#social-links ul li a {
          padding: 5px;
          border: 1px solid #ccc;
          margin: 1px;
          font-size: 30px;
          color: rgb(2, 172, 93);
          background-color: #ccc;
          border-radius: 4px;
      }
  </style>


  <div class="sticky top-0 z-30 grid grid-cols-[40px_auto_70px] py-3 px-2 bg-white lg:hidden shadow-lg">
    <div>
      <button class="text-xl">
        <i class="fa-solid fa-arrow-left"></i>
      </button>
    </div>
    <div class="line-clamp-1">
        {{ $hotel['title'] }}
    </div>
    <div class="text-right text-xl">
      <button>
        <i class="fa-solid fa-heart"></i>
      </button>&emsp;
      <button>
        <i class="fa-solid fa-share-nodes"></i>
      </button>
    </div>
  </div>

  <br>
  <div class="max-w-6xl mx-auto px-2">
    <div class="grid lg:grid-cols-[65%_35%] gap-2">
      <div>
        <img class="object-cover w-full lg:h-[430px] rounded-lg lg:rounded-l-lg" src="{{ $hotel['thumbnail'] }}" alt="">
      </div>
      
      <div class="hidden lg:block">

        <?php 
          (isset($gallery[0]))?$gallery1 = $gallery[0]: $gallery1 = $hotel['thumbnail'];
          (isset($gallery[1]))?$gallery2 = $gallery[1]: $gallery2 = $hotel['thumbnail'];
        ?>  

        <img class="object-cover w-full h-[210px] rounded-tr-lg" src="{{ $gallery1 }}" alt="">
        <img class="object-cover w-full h-[210px] rounded-br-lg mt-2" src="{{ $gallery2 }}" alt="">


      </div>
    </div>
    <div class="grid lg:grid-cols-[65%_35%] gap-2 ">
      <div class="lg:pr-16">
        <div class="mt-3">
          <button class=" rounded-lg border-2 py-2.5 w-28">
            <i class="fa-solid fa-image"></i>
            <p class="text-sm font-semibold">Foto</p> 
          </button>

          @if($hotel['video'])
          
          <button class=" rounded-lg border-2 py-2.5 w-28 ml-3"
          onclick="window.open('{{ $hotel['video'] }}',
            '_blank'
          );"
          >
            <i class="fa-solid fa-video"></i>
            <p class="text-sm font-semibold">Video</p> 
          </button>
          @endif

        </div>
        <p class="text-2xl font-bold text-[#383746] my-5">{{ $hotel['title'] }}</p>
        <div class="lg:flex grid grid-cols-[30%_60%]">
          <p class="border px-2 py-1 rounded-md font-semibold">{{ $hotel['bed'] }}</p>
          <p class=" px-2 py-1 font-semibold ml-3 flex"><i class="fa-solid fa-location-dot mt-0.5"></i> &nbsp;{{ $hotel['kota'] }}  </p>
          <p class=" px-2 py-1 font-semibold ml-3"><i class="fa-solid fa-star"></i> 4.8 <a class="font-medium text-gray-400">(10)</a></p>
          <p class=" px-2 py-1 text-gray-500 ml-3"><i class="fa-solid fa-money-bill"></i> {{ $hotel['branch']['name'] }}</p>
        </div>
        <div class="grid grid-cols-2 mt-4">
          <p class="mt-1"><i class="fa-solid fa-door-open"></i> Tersisa <a class="text-red-500"> {{ $hotel['room_qty'] }} Kamar</a></p>
          <div class="flex justify-end">
            <button class="border rounded-lg px-3 py-1 hidden">
              <i class="fa-regular fa-heart"></i> Simpan
            </button>
          
            <p class="mr-2">Bagikan:</p> 

            <div class="">
              {!! $shareComponen !!}
            </div>                 

           

          </div>

                 

        </div>

          

        <div class="grid grid-cols-[auto_60px] mt-7 font-semibold py-6 border-y hidden">
          <div>
            <p class="text-lg ">{{ $hotel['branch']['name'] }}</p>
            <p class="text-green-700 text-sm"><i class="fa-solid fa-circle"></i> Sedang Online</p>
          </div>
          <div class="flex justify-end hidden">
            <img class="w-14 h-14 rounded-full" src="https://static.mamikos.com/uploads/cache/data/user/2021-03-17/fEnpmoiw-240x320.jpg" alt="">
          </div>
        </div>

        {{-- description --}}

       
          <div class="mt-7">
            <p class="text-xl font-bold text-[#383746] mt-5 mb-2">Deskripsi</p>
             {!! $desc !!}
            <br>
            <button id="lihat_cerita" class="underline mt-1" wire:click="selengkapnya">{{ $label }}</button>
          </div>        

        <livewire:hotel.fasilitas-hotel :slug="$hotel['slug']" />

        @if($hotel['maps'])

        <p class="text-xl font-bold text-[#383746] mt-5 mb-2">Location</p> 
        {!! $hotel['maps'] !!}

        @endif

        <div class="mt-7 border-t hidden">
          <p class="text-xl font-bold text-[#383746] mt-5">Ketentuan pengajuan sewa</p>
          <p class="text-md font-semibold text-[#383746] mt-5">Bisa bayar DP (uang muka) dulu</p>
          <p class="text-md font-semibold text-gray-600">Biaya DP adalah 30% dari biaya yang dipilih.</p>
          <p class="border-t border-gray-100 mt-5"></p>
          <div class="grid grid-cols-2">
            <div class="grid grid-cols-[40px_auto] mt-5">
              <div class=" text-gray-600 text-xl">
                <i class="fa-solid fa-file"></i>
               </div>
              <div >
                  <p class="text-[#383746] text-md font-semibold">Waktu mulai menginap terdekat:</p>
                  <p class="text-[#383746] text-md font-semibold">Bisa di hari H setelah pengajuan sewa.</p>
              </div>
            </div>
            <div class="grid grid-cols-[40px_auto] mt-5">
              <div class="text-gray-600 text-xl">
                <i class="fa-solid fa-file"></i>
              </div>
              <div >
                <p class="text-[#383746] text-md font-semibold">Waktu mulai menginap terjauh:</p>
                <p class="text-[#383746] text-md font-semibold">1 bulan setelah pengajuan sewa.</p>
              </div>
            </div>
          </div>
        </div>      

        @livewire('hotel.review-hotel', [
          'hotelId' => $hotel['hotel_id']
        ])

      </div>
      <div>
        <div class="sticky top-32 hidden lg:block">
            <div class="rounded-md shadow-costum1 p-5 mt-3 ">
                <div class="text-sm mt-1">
                    <a class=" text-red-600"><i class="fa-solid fa-bolt"></i> {{ number_format($hotel['discount'],0,',','.') }}%</a>
                    <a class="text-gray-400 line-through">Rp{{ number_format($hotel['price'],0,',','.') }}</a>
                 </div>                 

                 <div class="text-[#303030] mt-3">
                  <a class="text-2xl font-semibold">Rp {{ number_format($total,0,',','.') }}</a><a>/ {{ $qty }} Day</a> 
                </div>

                 <div class="grid grid-cols-2 gap-4 mt-3">
                    <div>
                        <input class="w-full border p-3 rounded-md" type="date" wire:model="start_date">
                    </div>
                    <div>
                      <input class="w-full border p-3 rounded-md" type="date" wire:model="end_date" min="{{ $start_date }}">
                    </div>

                    <div>
                       <Label>Jumlah Orang</Label>
                        <input class="w-full border p-3 rounded-md" type="number" name="" wire:model="guest">
                    </div>

                    <div>
                      <Label>Jumlah Hari</Label>
                       <input class="w-full border p-3 rounded-md" type="number" name="" wire:model="qty" readonly>
                   </div>                   

                 </div>
                 <a class="px-8 py-3 bg-[#29af61] block max-w-md mx-auto text-center mt-7 text-white font-semibold rounded-md" href="{{ route('booking', $hotel['slug'] ) }}?start_date={{ $start_date }}&&end_date={{ $end_date }}&&qty={{ $qty }}&&guest={{ $guest }}">Booking Sekarang</a>  
            </div>
            @if($hotel['info'])
            <div class="rounded-lg border  p-5 mt-3">
                <i class="fa-solid fa-gift"></i>
                <p class="text-xl font-bold text-[#383746]">{{ $hotel['info']['title'] }}</p>
                {!! $hotel['info']['message'] !!}

               
            </div>
            @endif
        </div>
      </div>
    </div>


    <livewire:hotel.list-hotel-footer />


    
    
  <section id="bottom-navigation" class="fixed inset-x-0 -bottom-[1px] z-10 bg-white shadow-costum1 rounded-t-2xl py-3 pr-4 lg:hidden">
    <div id="tabs" class="flex justify-between px-3">
      <div class="text-[#303030]">
        <a >Rp{{ number_format($hotel['price_discount'],0,',','.') }}</a><a class="text-sm">/ day</a> 
        {{-- <p class="font-semibold text-green-500">Lihat Estimasi Pembayaran</p> --}}
        <p class="text-gray-400 line-through">Rp{{ number_format($hotel['price'],0,',','.') }}</p>
      </div>
      <button class="p-3 border rounded-md font-semibold right-2 absolute bg-[#29af61] text-white">
        Booking Sekarang
      </button>
    </div>
  </section>


    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
</div>
