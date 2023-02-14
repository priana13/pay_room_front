<div>
    <div class="rounded-t-lg shadow-costum1 p-3">
      <div class="grid grid-cols-[30%_auto] lg:grid-cols-[20%_auto] gap-5">
        {{-- <div style="background-image: url(https://static.mamikos.com/uploads/cache/data/style/2022-12-29/CqqT0kpm-360x480.jpg);" class="bg-no-repeat bg-cover rounded-lg bg-center  h-full w-full"> --}}
        </div>
          <div>
            <p class="font-semibold line-clamp-1">{{ $hotel_name }}</p>
            {{-- <p class="text-green-600 text-sm">{{ $status }}</p> --}}
            <div class="grid lg:grid-cols-[40%_22%_22%_16%] mt-3">
              <div>
                <p class="">OrderCode</p>
                <p class="font-semibold">{{ $transaction_code }}</p>
              </div>
              <div class="hidden lg:block ">
                <p class="">Start</p>
                <p class="font-semibold">{{ date('d-m-Y', strtotime($start))  }}</p>
              </div>
              <div class="hidden lg:block ">
                <p >End</p>
                <p class="font-semibold">{{ date('d-m-Y', strtotime($end)) }}</p>
              </div>
              <div class="lg:flex items-center justify-center hidden  ">
                <a class="font-semibold text-[#29af61]" href="">Lihat</a>
              </div>
            </div>
          </div>
      </div>
      <div class="grid grid-cols-3 mt-3 lg:hidden">
        <div >
          <p class="text-sm">Tanggal Masuk</p>
          <p class="font-semibold">Belum terisi</p>
        </div>
        <div >
          <p class="text-sm">Durasi Sewa</p>
          <p class="font-semibold">Belum terisi</p>
        </div>
        <div class="flex items-center justify-center">
          <a class="font-semibold text-[#29af61]" href="">Lihat Sewa</a>
        </div>
      </div>
    </div>
    @if($button)
    <div class="rounded-b-lg shadow-costum1 p-3 grid grid-cols-2">
      <div class="flex items-center">
        <button><i class="fa-solid fa-trash"></i></button>
      </div>
      <div class="text-right">
        <button class="px-3 py-2 font-semibold bg-[#29af61] rounded-md text-white">
          Booking Sekarang
        </button>
      </div>
    </div>
    @endif
  </div>