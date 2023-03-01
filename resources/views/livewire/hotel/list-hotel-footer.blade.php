<div>
    <!-- Swiper card -->
    <div class="grid lg:grid-cols-2  mt-14">
        <div class="mt-2">
          <a class="text-2xl font-bold text-[#383746] mt-5">Rekomendasi Kamar lainnya</a>&nbsp;
        </div>
        
        <div class="flex lg:justify-end mt-2">
          <a href="" class="py-1.5 px-3 border rounded-md ">
            Lihat Semua
          </a>
          <p class="text-3xl text-gray-300 mb-2 mx-4">|</p>
          <div class="btn__navigation ">
            <div class="swiper-button-prev-card"><i class="fa-solid fa-chevron-left"></i></div>&emsp;
            <div class="swiper-button-next-card"><i class="fa-solid fa-chevron-right"></i></div>
          </div>
        </div>
    </div>


    <div class="swiper mySwiper-card">
        <div class="swiper-wrapper ">
          <div class="swiper-slide">
            <div class="grid lg:grid-cols-4 grid-cols-2 text-center gap-2 mt-3">
              
                @foreach ($hotel as $item)

                    <button class="text-left mx-auto"  onclick="location.href='{{ route('front.hotel' , $item['slug'])  }}'">
                        <div class="font-semibold max-w-[265px]">


                        @if($item['thumbnail'] != null)

                        <img class="w-[265px] h-[150px] rounded-xl object-cover" src="{{ $item['thumbnail'] }}" alt="">

                        @else

                        <img class="w-[265px] h-[150px] rounded-xl object-cover" src="{{ asset('storage/sample.jpg') }}" alt="">

                        @endif

                        <div class="mt-3">      
                            <a class="py-1 px-2 text-sm border rounded-md ">{{ $item['bed'] }}</a>&nbsp;
                            <a class="p-1 text-xs  rounded-md text-[#da3438] italic">Sisa {{ $item['room_qty'] }} Kamar</a>
                        </div>
                        <p class="line-clamp-1 text-sm mt-3 text-[#303030]">
                            {{ $item['title'] }}
                        </p>
                       
                        <p class="line-clamp-1 text-xs mt-1 text-gray-400 capitalize">
                            {{ strtolower($item['kota'])}}
                        </p>
                        <div class="text-sm mt-1">
                            <a class=" text-red-600"><i class="fa-solid fa-bolt"></i> {{ number_format($item['discount'],0,',','.') }}%</a>
                            <a class="text-gray-400 line-through">Rp{{ number_format($item['price'],0,',','.') }}</a>
                        </div>
                        <div class="text-[#303030]">
                        <a >Rp{{ number_format($item['price_discount'],0,',','.') }}</a><a class="text-sm">/ bulan</a> 
                        </div>
                        </div>
                    </button>
                    
                @endforeach 

              
            </div>
          </div>
          <div class="swiper-slide">
           <div class="grid lg:grid-cols-4 grid-cols-2 text-center gap-2 mt-3">

            @foreach ($hotel as $item)

                <button class="text-left mx-auto"  onclick="location.href='{{ route('front.hotel', $item['slug']) }}'">
                    <div class="font-semibold max-w-[265px]">
                    <img class="w-[265px] h-[150px] rounded-xl object-cover" src="https://static.mamikos.com/uploads/cache/data/style/2022-12-29/CqqT0kpm-360x480.jpg" alt="">
                    <div class="mt-3">      
                        <a class="py-1 px-2 text-sm border rounded-md ">{{ $item['bed'] }}</a>&nbsp;
                        <a class="p-1 text-xs  rounded-md text-[#da3438] italic">Sisa {{ $item['room_qty'] }} Kamar</a>
                    </div>
                    <p class="line-clamp-1 text-sm mt-3 text-[#303030]">
                        {{ $item['title'] }}
                    </p>
                   
                    <p class="line-clamp-1 text-xs mt-1 text-gray-400 capitalize">
                        {{ strtolower($item['kota'])}}
                    </p>
                    <div class="text-sm mt-1">
                        <a class=" text-red-600"><i class="fa-solid fa-bolt"></i> {{ number_format($item['discount'],0,',','.') }}%</a>
                        <a class="text-gray-400 line-through">Rp{{ number_format($item['price'],0,',','.') }}</a>
                    </div>
                    <div class="text-[#303030]">
                    <a >Rp{{ number_format($item['price_discount'],0,',','.') }}</a><a class="text-sm">/ bulan</a> 
                    </div>
                    </div>
                </button>
            
            @endforeach 

              
            </div>   
          </div>  
        </div>
      </div>  
    </div>




</div>
