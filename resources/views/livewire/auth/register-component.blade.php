
  <div class="max-w-lg mx-auto px-2">  

    <div id="pemilik-daftar" class="p-6 rounded-xl  mt-2 shadow-costum1 login">
      <p class="text-xl font-semibold mt-5">Register New Account</p><br>

      <div>
          @if (session()->has('message'))
              <div class="text-red-500">
                  {{ session('message') }}
              </div>
          @endif
      </div>
      
      <p>Name</p>
      <input type="text" class="border-b focus:outline-none  border-[#ADADAD] w-full mt-0" placeholder="Name" wire:model="name" id="">
      
      @error('name') <span class="text-red-500">{{ $message }} </span> @enderror

      <br><br>
      <p>Phone Number</p>
      <input type="text" class="border-b focus:outline-none  border-[#ADADAD] w-full mt-0" placeholder="Phone Number" wire:model="phone_number" id="">
      @error('phone_number') <span class="text-red-500">{{ $message }} </span> @enderror
      <br><br>
      <p>Email</p>
      <input type="text" class="border-b focus:outline-none  border-[#ADADAD] w-full mt-0" placeholder="Email" wire:model="email" id="">
      @error('email') <span class="text-red-500">{{ $message }} </span> @enderror

      <div>
        @if (session()->has('email'))
            <div class="text-red-500">
                {{ session('email') }}
            </div>
        @endif
      </div>


      <br><br>
      <p>Password</p>
      <div id="show_hide_password" class="relative rounded-md shadow-sm">
        <input type="password" id="pass" class="border-b focus:outline-none  border-[#ADADAD] w-full mt-0" placeholder="Nomor Handphone" wire:model="password" id="">
        <button class="absolute inset-y-0 right-0 pr-3 flex items-center  z-10">
          <span class="font-bold text-base text-[##2C82B4]"> <i style="text-decoration: none;color: grey;" class="fa fa-eye-slash"></i> </apan>
        </button>

        @error('password') <span class="text-red-500">{{ $message }} </span> @enderror

      </div>          
      {{-- <br><br>
      <p>Konfirmasi Password</p>
      <div id="show_hide_password1" class="relative rounded-md shadow-sm">
        <input type="password" id="pass" class="border-b focus:outline-none  border-[#ADADAD] w-full mt-0" placeholder="Nomor Handphone" name="" id="">
        <button class="absolute inset-y-0 right-0 pr-3 flex items-center  z-10">
          <span class="font-bold text-base text-[##2C82B4]"> <i style="text-decoration: none;color: grey;" class="fa fa-eye-slash"></i> </apan>
        </button>
      </div>    --}}
      <br><br>
      <button class="w-full py-3 bg-[#29af61] text-white font-semibold" wire:click.prevent="register">
        Daftar
      </button>
       <p class="text-center text-sm mt-3">sign in to your account <a class="text-[#29af61]" href="{{ route('login') }}">Login</a></p>
        <a class="block text-center text-sm text-[#29af61] mt-3" href="">Forgot Password</a>
    </div>
  </div>