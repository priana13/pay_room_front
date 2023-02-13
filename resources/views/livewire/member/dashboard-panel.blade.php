<div id="kost_saya_tab" class="tab_menu p-2">
    <div class="border rounded-xl p-5 lg:w-[90%] mx-auto mt-3">
      <p class="font-bold text-xl">Booking</p>

      @if($is_order)

      <p>Selamat datang <strong class="font-semibold">{{ $user["name"] }}</strong> </p>

      <p>Dapatkan Promo Menarik Minggu ini</p>

      <button class="w-full py-3 font-semibold bg-[#29af61] rounded-md text-white">
        Mulai Cari Hotel
      </button>

      @else
      
      <div class="lg:px-36 mt-20">
        <p>Selamat datang <strong class="font-semibold">{{ $user["name"] }}</strong>  Kamu Belum Melakukan Booking</p>
        <br>
        <p>Yuk, Booking Hotel dan dapatkan kenyamanan menginap dihotel kami</p>
        <br>
        <p><i class="fa-regular fa-clipboard"></i> Tagihan dan kontrak sewa tercatat rapi</p> <br>
        <p><i class="fa-solid fa-money-bill"></i> Kami menjaga keamanan transaksi</p> <br>
        <p><i class="fa-solid fa-coins"></i> Cashless, dengan beragam metode pembayaran</p> <br>
        <button class="w-full py-3 font-semibold bg-[#29af61] rounded-md text-white">
          Mulai Cari Hotel
        </button>
      </div>

      @endif


    </div>
</div>  