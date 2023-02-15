<div id="verif_tab" class="tab_menu hidden">
    <div class="border rounded-xl p-5 lg:w-[90%] mx-auto mt-3 hidden">
      <p class="font-bold text-xl">Email and Phone</p>
      <p class="text-sm text-[#29af61]  mt-5">Mengapa Verifikasi Penting?</p>
      <p> Verifikasi bisa mencegah akun kamu diretas oleh orang lain, Karena untuk mengakses akun tetap membutuhkan kode verifikasi yang hanya diketahui oleh Anda.</p>
      <div class="grid grid-cols-[auto_25%] mt-5">
        <div>
          <p class=""> <i class="fa-regular fa-envelope text-[#29af61] text-xl"></i>&nbsp;&nbsp; Email</p>
          <p class="text-sm text-gray-500 ml-9">azizhkim@gmail.com</p>
        </div>
        <div class="text-right">
          <button class="px-5 py-1.5 bg-[#29af61] rounded-md text-white">
            Ubah
          </button>
        </div>
      </div>
      <div class="grid grid-cols-[auto_25%] mt-5 ">
        <div class="">
          <p class=""> <i class="fa-regular fa-envelope text-[#29af61] text-xl"></i>&nbsp;&nbsp; Nomor Handphone</p>
          <p class="text-sm text-gray-500 ml-9">Belum di Verivikasi</p>
        </div>
        <div class="text-right">
          <button class="px-2 py-1.5 bg-[#29af61] rounded-md text-white">
            Verivikasi
          </button>
        </div>
      </div>
    </div>
    <div class="border rounded-xl px-7 py-4 lg:w-[90%] mx-auto mt-3 min-h-[440px]">
      <p class="font-bold text-xl">Verifikasi Identitas</p>
      <div class="p-3 bg-green-100 text-[#29af61] my-5">
          <p class="font-semibold">Lengkapi datamu untuk mempercepat proses booking.</p>
          <p>Kami melindungi informasi dan penggunaan data diri para pengguna kami.</p>
      </div>

      <div class="grid sm:grid-cols-[30%_auto] gap-2">
          <div>
            Jenis Identitas
          </div>
          <div>
            <input id="ktp" name="identitas" type="radio" value="KTP"> <label for="ktp">KTP</label>&emsp;
            <input id="SIM" name="identitas" type="radio" value="SIM"> <label for="SIM">SIM</label>&emsp;
            <input id="Passport" name="identitas" type="radio" value="Passport"> <label for="Passport">Passport</label>
          </div>
      </div>

      <div class="grid sm:grid-cols-[30%_auto] gap-2 mt-3">
        <div>
          Nomor Identitas
        </div>
        <div>
            <input type="text" class="w-full focus:ring-0 rounded-md border-gray-300">
        </div>
    </div>





      <div class="grid sm:grid-cols-[30%_auto] gap-2 mt-5">
        <div>
          Upload Foto Identitas
        </div>
        <div>
          <button id="kartu-btn" class="bg-gray-100 h-28 w-36 border rounded-md text-[#29af61] text-2xl">
            <i class="fa-solid fa-id-card-clip"></i>
          </button>
          <input class="hidden" id="kartu" type="file">
          {{--           
          <button id="selfi-btn" class="bg-gray-100 h-28 w-36 border rounded-md text-[#29af61]  lg:ml-20 text-2xl">
            <i class="fa-solid fa-camera-retro"></i>
          </button> --}}

          <input class="hidden" id="selfi" type="file">
          <p class="text-xs text-red-500 mt-5"><i class="fa-solid fa-circle-exclamation"></i> Kamu belum mengunggah foto kartu identitas</p>
          <div class="flex mt-5">
            <input id="pvpl" type="checkbox" required>
            <label class="" for="pvpl">
            <p class="text-xs leading-3 ml-2 -mt-1">Dengan melanjutkan, saya menjamin data yang diberikan adalah benar dan menyetujui <a class="text-[#29af61]" href="">privacy policy</a> </p> 
            </label>
          </div>
          <button class="w-[35%] py-2 bg-[#29af61] rounded-md text-white mt-5">
            Simpan
          </button>
        </div>
      </div>
    </div>
  </div>