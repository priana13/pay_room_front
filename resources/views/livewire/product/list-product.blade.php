<div class="mt-14">
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

                @foreach ($hotel as $item)                   

                    <button class="text-left mx-auto"  onclick="location.href='{{ route('front.hotel' , $item['slug'])  }}'">
                        <div class="font-semibold max-w-[265px]">
                         
                        @if($item['thumbnail'] != null)

                        <img class="w-[265px] h-[150px] rounded-xl object-cover" src="{{ $item['thumbnail'] }}" alt="">

                        @else

                        <img class="w-[265px] h-[150px] rounded-xl object-cover" src="{{ asset('storage/sample.jpg') }}" alt="">

                        @endif

                        <div class="mt-3">      
                            <a class="py-1 px-2 text-sm border rounded-md ">{{ $item['house_gender'] }}</a>&nbsp;
                            <a class="p-1 text-xs  rounded-md text-[#da3438] italic">Sisa 4 Kamar</a>
                        </div>
                        <p class="line-clamp-1 text-sm mt-3 text-[#303030]">
                            {{ $item['title'] }}
                        </p>
                        <p class="line-clamp-1 text-sm mt-1 ">
                            Wonocolo Surabaya
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
                    </button>
                    
                @endforeach 

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
                  
                </div>   
              </div>
            </div>
          </div>      


</div>
