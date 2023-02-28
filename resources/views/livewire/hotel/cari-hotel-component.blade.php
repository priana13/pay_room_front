<div>
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
        <button class="text-3xl font-bold text-white" wire:click.prevent="cari">
          Cari Hotel
        </button>
      </div>
      <div class="max-w-7xl mx-auto px-2">
        <div class="p-5 shadow-costum1 sm:grid grid-cols-4 gap-5 top-16 lg:top-28  -mt-14 bg-white rounded-md">
          <div>
            <p class="font-semibold text-sm">Pilih Kota</p>
            <select name="" id="" class="select select-bordered rounded-[4px] focus:outline-none w-full" wire:model="kota">
              <option value='' selected='true' > Semua Kota </option> 
              @forelse($list_kota as $kota)
              <option value='{{ $kota['id'] }}' > {{ $kota['nama_kota'] }} </option> 
              @empty
              @endforelse
             
            </select>
          </div>
          <div class="hidden">
            <p class="font-semibold text-sm">Tipe Hotel</p>
            <select name=""  class="select select-bordered rounded-[4px] focus:outline-none w-full" wire:model="tipe_hotel">
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
              <input  placeholder="dari" class="input input-bordered py-2.5  pl-10 rounded-[4px] focus:outline-none w-full" type="text" wire:model="min_price">
            </div> 
          </div>
          <div class="hidden lg:block">
            <p class="font-semibold text-sm">&emsp;</p>
            <div class="relative">
              <div class="absolute  ml-3 mt-3 h-5  flex items-center text-gray-500">
                Rp
              </div>
              <input  placeholder="sampai" class="input input-bordered py-2.5  pl-10 rounded-[4px] focus:outline-none w-full" type="text" wire:model="max_price">
            </div> 
          </div>
          <div class="hidden lg:block">
            <button class="w-full py-2.5 mt-5 bg-[#29af61] rounded-md text-white " wire:click.prevent="cari">
              Cari
            </button>
          </div>
        </div>
        <div class="grid lg:grid-cols-4 grid-cols-2 text-center gap-4 mt-9">

            @foreach ($hotel as $item)

                <div class="card shadow-md p-5 rounded-md text-left mx-auto"  onclick="location.href='{{ route('front.hotel', $item['slug']) }}'">
                    <div class="font-semibold max-w-[265px]">
                    <img class="w-[265px] h-[150px] rounded-xl object-cover" src="{{ $item['thumbnail'] }}" alt="">
                    <div class="mt-3">      
                        <a class="py-1 px-2 text-sm border rounded-md ">{{ $item['bed'] }}</a>&nbsp;
                        <a class="p-1 text-xs  rounded-md text-[#da3438] italic">Sisa {{ $item['room_qty'] }} Kamar</a>
                    </div>
                    <p class="line-clamp-1 text-sm mt-3 text-[#303030]">
                        {{ $item['title'] }}
                    </p>
                    <p class="line-clamp-1 text-sm mt-1 ">
                        {{ $item['kota'] }}
                    </p>
                    <p class="line-clamp-1 text-xs mt-1 text-gray-400">
                        K. Mandi Dalam ·WiFi ·AC ·Kloset Duduk ·Kasur Televisi
                    </p>
                    <div class="text-sm mt-1">
                        <a class=" text-red-600"><i class="fa-solid fa-bolt"></i> {{ number_format($item['discount'],0,',','.') }}%</a>
                        <a class="text-gray-400 line-through">Rp{{ number_format($item['price'],0,',','.') }}</a>
                    </div>
                    <div class="text-[#303030]">
                    <a >Rp{{ number_format($item['price_discount'],0,',','.') }}</a><a class="text-sm">/ bulan</a> 
                    </div>
                    </div>
                </div>
            
            @endforeach


      </div>
    
</div>
