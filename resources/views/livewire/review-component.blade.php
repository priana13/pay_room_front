
      <!-- Testimoni -->     
      <div class="mt-5">
        <a class="text-2xl font-semibold">Apa kata pelanggan?</a>
        <div class="swiper mySwiper-testimoni ">
          <div class="swiper-wrapper ">

            @forelse($reviews as $review)

            {{-- "bintang" => 1
            "ulasan" => "Maxime pariatur eos in ut atque odio quo ullam exercitationem cupiditate quo."
            "tanggal" => "2023-02-07T17:35:23.000000Z"
            "nama_user" => "Super Admin"
            "photo" => null
            "alamat" => null --}}

            <div class="swiper-slide">
              <div class="shadow-md px-10 py-5 max-w-[390px] rounded-md">
                <img src="{{ $review['photo'] }}" class="w-14 h-14 object-cover rounded-full float-left" alt="">
                <p class="ml-20 font-semibold">{{ $review['nama_user'] }}</p>
                {{-- <p class="ml-20 text-sm italic text-gray-400 leading-[16px] mt-1">{{ $review['alamat'] }}</p> --}}
                <p class="text-sm text-gray-500 mt-4 leading-6 ">“{{$review['ulasan']}}” 
                </p>
              </div>
            </div>

            @empty 

            <p class="text-sm text-gray-500 mt-4 leading-6 ">Data Empty</p>

            @endforelse


          </div>
          <div class="swiper-button-prev-testimoni"><i class="fa-solid fa-chevron-left"></i></div>
          <div class="swiper-button-next-testimoni"><i class="fa-solid fa-chevron-right"></i></div>
        </div>
        <a class="px-8 py-3 bg-[#29af61] block max-w-md mx-auto text-center mt-5 text-white font-semibold rounded-md" href="">Booking Hotel Sekarang</a>  
      </div>