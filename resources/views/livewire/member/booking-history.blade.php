<div id="rwyt_book_tab" class="tab_menu hidden">
    <div class="border rounded-xl  lg:w-[90%] mx-auto mt-5">
      <p class="font-bold text-2xl m-5">Booking</p>
      <div class=" border-b">
        <button id="rdr_rw" class="py-4 w-[20%] text-[#29af61] border-b-2 border-[#29af61] font-semibold btn_rd"
         
        >
            Aktif
        </button>
        <button id="rdr_df" class="py-4 w-[20%] text-gray-400  font-semibold btn_rd">
            Selesai
        </button>
        <button id="rdr_bd" class="py-4 w-[20%]  text-gray-400  font-semibold btn_rd">
          Baru Dilihat
        </button>
      </div>
      <div id="rdr_rw_tb" class="p-5 mt-3 rdr_tb">  
        
        @if(count($booking) > 0)

        @foreach($booking as $row)

        <x-simple-card-product :button="false" :hotel="$row" />

        @endforeach

        @else

        <!-- empty -->
        <div class="max-w-md mx-auto text-center">
          <img class="w-48 mx-auto" src="./img/icon/empty.jpg" alt="">
          <p> Belum ada Hotel di Draft. Yuk, mulai cari & booking Hotel yang kamu inginkan!</p>
          <button class="w-full py-3 font-semibold bg-[#29af61] rounded-md text-white mt-5">
             Cari Hotel
          </button>
        </div>  

        @endif

      </div>
      <div id="rdr_df_tb" class="p-5 hidden mt-3 rdr_tb">
        
        <!-- empty -->
        <div class="max-w-md mx-auto text-center">
          <img class="w-48 mx-auto" src="./img/icon/empty.jpg" alt="">
          <p> Kamu belum booking Hotel nih, yuk mulai booking hotel yang kamu inginkan</p>
          <button class="w-full py-3 font-semibold bg-[#29af61] rounded-md text-white mt-5">
             Cari Hotel
          </button>
        </div>  
      </div>
      <div id="rdr_bd_tb" class="p-5 hidden mt-3 rdr_tb">

        <x-simple-card-product :button="true" />
        
      </div>
    </div>
  </div>