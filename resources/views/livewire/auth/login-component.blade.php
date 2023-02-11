
  <div class="max-w-lg mx-auto px-2">
    <div id="pilihan" class="p-6 rounded-xl mt-2 hidden  shadow-costum1 ">
        {{-- <button class="text-2xl text-gray-500"><i class="fa-solid fa-x"></i></button> --}}
        <p class="text-xl font-semibold mt-5">Masuk ke Key Pay Room</p><br>
        <p>Saya Login Masuk Sebagai</p>
        {{-- <button id="pencari" class="felx items-center shadow-costum1 p-5 w-full text-left rounded-xl mt-8 btn">
            <p class="text-xl font-semibold"><i class="fa-solid fa-door-open text-3xl"></i>&emsp; Pencari Kos</p>
        </button> --}}
        <button id="pemilik" class="felx items-center shadow-costum1 p-5 w-full text-left rounded-xl mt-8 btn">
            <p class="text-xl font-semibold"><i class="fa-solid fa-house text-2xl"></i>&emsp; Pencari Kos</p>
        </button>
    </div>

    <div id="pemilik-login" class="p-6 rounded-xl  shadow-costum1 login">
      {{-- <button class="text-2xl text-gray-500 kembali"><i class="fa-solid fa-arrow-left"></i></button> --}}
      <p class="text-xl font-semibold mt-5">Login</p><br>

      <div>
          @if (session()->has('message'))
              <div class="alert alert-success">
                  {{ session('message') }}
              </div>
          @endif
      </div>


      <button class=" border p-5 w-full hidden  rounded-md mt-6 flex">
          <a href=""><img src="https://upload.wikimedia.org/wikipedia/commons/5/53/Google_%22G%22_Logo.svg" class="w-8 " alt=""></a>
          <p class="text-xl font-semibol  ml-3">Singn In With Google</p>
      </button>
      <button class=" border p-5 w-full  rounded-md mt-2 flex hidden">
          <a href=""><img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg" class="w-8 " alt=""></a>
          <p class="text-xl font-semibol  ml-3">Singn In With Facebook</p>
      </button>
      <div class="flex items-center py-4 hidden">
          <div class="flex-grow h-px border"></div> 
          <span class="flex-shrink  text-gray-500 px-4  font-light">or</span>
          <div class="flex-grow h-px border"></div>
      </div>
      <p>Email</p>
      <input type="text" class="border-b focus:outline-none  border-[#ADADAD] w-full mt-2" placeholder="Email Address" name="" id="" wire:model="email">
      <br><br><br>
      <p>Password</p>
      <div id="show_hide_password" class="relative rounded-md shadow-sm">
        <input type="password" id="pass" class="border-b focus:outline-none  border-[#ADADAD] w-full mt-2" placeholder="Nomor Handphone" name="" wire:model="password">
        <button class="absolute inset-y-0 right-0 pr-3 flex items-center  z-10">
          <span class="font-bold text-base text-[##2C82B4]"> <i style="text-decoration: none;color: grey;" class="fa fa-eye-slash"></i> </apan>
        </button>
      </div>          <br><br><br>
      <button class="w-full py-3 bg-[#29af61] text-white font-semibold" wire:click.prevent="login">
        Login
      </button>
       <p class="text-center text-sm mt-3">Don't have account? <a class="text-[#29af61]" href="{{ route('register') }}">Register Now</a></p>
        <a class="block text-center text-sm text-[#29af61] mt-3" href="">Forgot Password</a>
    </div>
  
  </div> 