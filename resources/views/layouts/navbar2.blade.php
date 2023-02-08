<div class="sticky top-0 z-30  hidden lg:block">
    <div class="bg-[#fafafa] hidden lg:block">
      <div class="grid grid-cols-[auto_150px] py-3 px-2 max-w-6xl mx-auto text-xs font-semibold text-gray-500">
        <div class="text-xs font-semibold text-gray-500">
          <a><i class="fa-solid fa-mobile"></i>&nbsp; Download App</a>&emsp; &emsp; 
          <a><i class="fa-solid fa-calendar-week"></i>&nbsp;  Booking Hotel</a>
        </div>
        <div class="text-right">
          <a><i class="fa-solid fa-bullhorn"></i>&nbsp; Promosikan Iklan Anda</a>
        </div>
      </div>
    </div>
    <div class="border-b border-[#eaeaea] bg-white">
      <div class="grid grid-cols-2 px-2 max-w-6xl mx-auto text-sm  text-gray-500">
        <div class="py-3.5 flex">
          <a href="{{ route('front.home_page') }}"><img src="{{asset('storage/icon/logo_payRoom.png')}}" class="w-[80px] lg:mt-2" alt=""></a>
          <button id="sch-bottom" class="hidden lg:block ml-10 text-sm text-gray-400 p-3 text-left w-80 shadow-costum1 rounded-md cari-btn">
            <i class="fa-solid fa-magnifying-glass"></i> Masukan nama lokasi/area/alamat
          </button>
        </div>
        <div class="text-right hidden lg:block">
          <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="h-full hover:border-b-[3px] border-[#29af61] font-bold px-3">
            Cari Iklan <i class="fa-sharp fa-solid fa-caret-down"></i>
            <!-- Dropdown menu -->
            <div id="dropdown" class="z-10 mt-5 text-left hidden   bg-white divide-y divide-gray-100 rounded shadow w-44 ">
              <ul class="py-1 text-sm text-gray-700 font-medium">
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-100  "><i class="fa-solid fa-bed"></i> Kos</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-100 "><i class="fa-solid fa-city"></i> Apartemen</a>
                </li>
              </ul>
          </div>
          </button> 
          <button class="h-full  hover:border-b-[3px] border-[#29af61] px-3 font-bold">
            Pusat Bantuan
          </button>
          <button class="h-full  hover:border-b-[3px] border-[#29af61] px-3 font-bold">
            Syarat dan Ketentuan
          </button>
          <button class="py-2  border border-[#29af61] text-[#29af61] px-4 rounded-md font-semibold ">
            Masuk
          </button>
        </div>
        <div class="text-right  lg:hidden ">
            <button class="rounded-lg py-1 px-2 border text-lg mt-1 btn-menu">
              <i class="fa-solid fa-bars"></i>
            </button>
        </div>
      </div>
    </div>
  </div>