<div>
    <div class="grid grid-cols-[110px_auto] mt-5">
        <div class=" flex w-20 h-20 bg-gray-300 rounded-full justify-center items-center text-5xl text-white">
            <i class="fa-solid fa-user my-auto"></i>
        </div>
        <div>
            <p class="text-lg font-semibold mb-3">{{ $user['name'] }}</p>
            <a href="{{URL::current()}}/profile" class="border border-[#29af61] text-[#29af61] px-4 py-1.5 ">Edit Profil</a>
        </div>
    </div>
    <button id="kost_saya" class="flex mt-2 py-4 text-black border-b-2 w-full menu_btn">
        <i class="fa-solid fa-house text-lg"></i> 
        <p class="ml-3 mt-1">Kos Saya</p>
    </button>
    <button id="rwyt_book" class="flex mt-2 py-4 text-gray-500 border-b-2 w-full menu_btn">
        <i class="fa-solid fa-book-bookmark text-lg"></i>
        <p class="ml-3 mt-1">Riwayat dan Draft Booking</p>
    </button>
    <button id="rwyt_kost" class="flex mt-2 py-4 text-gray-500 border-b-2 w-full menu_btn">
        <i class="fa-solid fa-house-laptop text-lg"></i>
        <p class="ml-3 mt-1">Riwayat Kos</p>
    </button> 
    <button id="rwy_tr" class="flex mt-2 py-4 text-gray-500 border-b-2 w-full menu_btn">
        <i class="fa-solid fa-magnifying-glass text-lg"></i>
        <p class="ml-3 mt-1">Riwayat Transaksi</p>
    </button>
    <button id="verif" class="flex mt-2 py-4 text-gray-500 border-b-2 w-full menu_btn">
        <i class="fa-solid fa-user-check text-lg"></i>
        <p class="ml-3 mt-1">Verifikasi Akun</p>
    </button>
</div>