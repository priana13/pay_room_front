<div class="sticky top-0 z-30  ">
    <div class="bg-[#fafafa] hidden lg:block">
      <div class="grid grid-cols-[auto_200px] py-3 px-2 max-w-6xl mx-auto text-xs font-semibold text-gray-500">
        <div class="text-xs font-semibold text-gray-500">
          <a class="hidden"><i class="fa-solid fa-mobile" disabled></i>&nbsp; Download App</a>&emsp; &emsp; 
          <a><i class="fa-solid fa-calendar-week"></i>&nbsp;  Booking Hotel</a>&emsp; 
          <a href="https://app.keypayroom.co.id/admin/login"><i class="fa-solid fa-user"></i>&nbsp;  Admin</a>
        </div>
        <div class="text-right">
          <a><i class="fa-solid fa-phone"></i>&nbsp; Contact Us: +021 4449 xxx</a>
        </div>
      </div>
    </div>
    <div class="border-b border-[#eaeaea] bg-white">
      <div class="grid grid-cols-2 px-2 max-w-6xl mx-auto text-sm  text-gray-500">
        <div class="py-3.5 flex">
          <a href="{{ route('front.home_page') }}"><img src="{{asset('storage/icon/logo_payRoom.png')}}" class="w-[80px] lg:mt-2" alt=""></a>
          <button id="sch-top"  class="hidden ml-10 text-sm text-gray-400 p-3 text-left w-80 shadow-costum1 rounded-md cari-btn">
            <i class="fa-solid fa-magnifying-glass"></i> Masukan nama lokasi/area/alamat
          </button>
        </div>
        <div class="text-right hidden lg:block">

          <a class="h-full  hover:border-b-[3px] border-[#29af61] px-3 font-bold" href="{{ route('front.home_page') }}">
            Home
          </a>          
          
          <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="h-full hover:border-b-[3px] border-[#29af61] font-bold px-3">
            Booking <i class="fa-sharp fa-solid fa-caret-down"></i>
            <!-- Dropdown menu -->
            <div id="dropdown" class="z-10 mt-5 text-left hidden   bg-white divide-y divide-gray-100 rounded shadow w-44 ">
              <ul class="py-1 text-sm text-gray-700 font-medium">
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-100  "><i class="fa-solid fa-bed"></i> Rumah Hotel</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-100 "><i class="fa-solid fa-city"></i> Apartement Hotel</a>
                </li>
              </ul>
          </div>
          </button> 
          <a href="{{ route('static-page', 'contact') }}" class="h-full  hover:border-b-[3px] border-[#29af61] px-3 font-bold">
            Pusat Bantuan
          </a>
          <a href="{{ route('static-page', 'syarat-dan-ketentuan') }}" class="h-full  hover:border-b-[3px] border-[#29af61] px-3 font-bold">
            Syarat dan Ketentuan
          </a>

          @if( session()->get('app_token') )   
            
          <a href="{{ route('my-dashboard') }}" class="py-2  border border-[#29af61] text-[#29af61] px-4 rounded-md font-semibold ">My Dashboard</a>             

          @else             
          <a href="{{ route('login') }}" class="py-2  border border-[#29af61] text-[#29af61] px-4 rounded-md font-semibold ">Login</a>
          @endif


        </div>
        <div class="text-right  lg:hidden ">
            <button class="rounded-lg py-1 px-2 border text-lg mt-1 btn-menu">
              <i class="fa-solid fa-bars"></i>
            </button>
        </div>
      </div>
    </div>
  </div>