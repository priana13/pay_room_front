@extends('layouts.guest')
@section('custom_header')
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.css" rel="stylesheet" />
<style>


</style>
@endsection
@section('content')

  @include('layouts.navbar2')
  <div class="max-w-6xl mx-auto px-2">
      <div class="grid lg:grid-cols-[30%_80%] sm:grid-cols-none">
            <div>
                <div class="grid grid-cols-[110px_auto] mt-5">
                    <div class=" flex w-20 h-20 bg-gray-300 rounded-full justify-center items-center text-5xl text-white">
                        <i class="fa-solid fa-user my-auto"></i>
                    </div>
                    <div>
                        <p class="text-lg font-semibold mb-3">Azizun Hakim</p>
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
            <div>
                <div id="kost_saya_tab" class="tab_menu p-2">
                  <div class="border rounded-xl p-5 lg:w-[90%] mx-auto mt-3">
                    <p class="font-bold text-xl">Kost Saya</p>
                    <div class="lg:px-36 mt-20">
                      <p class="font-bold text-xl">Kamu Belum Menyawa Kost</p>
                      <br>
                      <p>Yuk, sewa di Mamikos atau masukkan kode dari pemilik kos untuk aktifkan halaman ini! Coba cara ngekos modern dengan manfaat berikut ini.</p>
                      <br>
                      <p><i class="fa-regular fa-clipboard"></i> Tagihan dan kontrak sewa tercatat rapi</p> <br>
                      <p><i class="fa-solid fa-money-bill"></i> Mamikos menjaga keamanan transaksi</p> <br>
                      <p><i class="fa-solid fa-coins"></i> Cashless, dengan beragam metode pembayaran</p> <br>
                      <button class="w-full py-3 font-semibold bg-[#29af61] rounded-md text-white">
                        Mulai Cari dan Sewa kost
                      </button>
                    </div>
                  </div>
                </div>  

                <div id="rwyt_book_tab" class="tab_menu hidden">
                  <div class="border rounded-xl  lg:w-[90%] mx-auto mt-5">
                    <p class="font-bold text-2xl m-5">Booking</p>
                    <div class=" border-b">
                      <button id="rdr_rw" class="py-4 w-[20%] text-[#29af61] border-b-2 border-[#29af61] font-semibold btn_rd">
                          Riwayat
                      </button>
                      <button id="rdr_df" class="py-4 w-[20%] text-gray-400  font-semibold btn_rd">
                         Daftar
                      </button>
                      <button id="rdr_bd" class="py-4 w-[20%]  text-gray-400  font-semibold btn_rd">
                        Baru Dilihat
                      </button>
                    </div>
                    <div id="rdr_rw_tb" class="p-5 mt-3 rdr_tb">

                      <!-- empty -->
                      <div class="max-w-md mx-auto text-center">
                        <img class="w-48 mx-auto" src="./img/icon/empty.jpg" alt="">
                        <p> Belum ada Kos di Draft. Yuk, mulai cari & booking Kos yang kamu inginkan!</p>
                        <button class="w-full py-3 font-semibold bg-[#29af61] rounded-md text-white mt-5">
                           Cari kost
                        </button>
                      </div>  
                    </div>
                    <div id="rdr_df_tb" class="p-5 hidden mt-3 rdr_tb">
                      
                      <!-- empty -->
                      <div class="max-w-md mx-auto text-center">
                        <img class="w-48 mx-auto" src="./img/icon/empty.jpg" alt="">
                        <p> Kamu belum booking kost nih, yuk mulai booking kosan yang kamu inginkan</p>
                        <button class="w-full py-3 font-semibold bg-[#29af61] rounded-md text-white mt-5">
                           Cari kost
                        </button>
                      </div>  
                    </div>
                    <div id="rdr_bd_tb" class="p-5 hidden mt-3 rdr_tb">
                      <div>
                        <div class="rounded-t-lg shadow-costum1 p-3">
                          <div class="grid grid-cols-[30%_auto] lg:grid-cols-[20%_auto] gap-5">
                            <div style="background-image: url(https://static.mamikos.com/uploads/cache/data/style/2022-12-29/CqqT0kpm-360x480.jpg);" class="bg-no-repeat bg-cover rounded-lg bg-center  h-full w-full">
                            </div>
                              <div>
                                <p class="font-semibold line-clamp-1">Kost LPT Lalaldon Tipe B Ciomas Bogor, Ciomas, Kabupat</p>
                                <p class="text-red-600 text-sm">Sisa 4 Kamar • Putri</p>
                                <div class="grid lg:grid-cols-[40%_22%_22%_16%] mt-3">
                                  <div>
                                    <p class="">Hitungan Sewa</p>
                                    <p class="font-semibold">Rp600.000 Per Bulan</p>
                                  </div>
                                  <div class="hidden lg:block ">
                                    <p class="">Tanggal Masuk</p>
                                    <p class="font-semibold">Belum terisi</p>
                                  </div>
                                  <div class="hidden lg:block ">
                                    <p >Durasi Sewa</p>
                                    <p class="font-semibold">Belum terisi</p>
                                  </div>
                                  <div class="lg:flex items-center justify-center hidden  ">
                                    <a class="font-semibold text-[#29af61]" href="">Lihat Sewa</a>
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
                      </div>
                      
                    </div>
                  </div>
                </div>

                <div id="rwyt_kost_tab" class="tab_menu hidden">
                  <div class="border rounded-xl p-5 lg:w-[90%] mx-auto mt-3 min-h-[440px]">
                    <p class="font-bold text-xl">Riwayat Kost</p>
                      <div class="max-w-md mx-auto text-center mt-5">
                        <img class="w-48 mx-auto" src="./img/icon/empty.jpg" alt="">
                        <p> Belum ada Kos di Draft. Yuk, mulai cari & booking Kos yang kamu inginkan!</p>
                      </div> 
                  </div>
                </div>
                <div id="rwy_tr_tab" class="tab_menu hidden">
                  <div class="border rounded-xl p-5 lg:w-[90%] mx-auto mt-3 min-h-[440px]">
                    <p class="font-bold text-xl">Riwayat Transaksi</p>
                      <div class="grid grid-cols-[40%_60%] gap-4">
                        <div>
                          <div class="relative rounded-md shadow-sm">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none mt-5">
                              <span class="font-bold text-base text-[#A6A6A6]"> <i class="fa-solid fa-magnifying-glass"></i> </span>
                            </div>
                            <input id="nams" onkeyup="cari()" type="text" class="w-full pl-10 pr-3 py-3 mt-5 border border-gray-300  focus:ring-0 text-lg  rounded-md " placeholder="Cari nama Kos">
                          </div> 
                        </div>
                        <div>   
                          <div date-rangepicker class="flex items-center mt-5">
                            <div class="relative">
                              <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                  <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                              </div>
                              <input name="start" type="text" class=" border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-0  block w-full pl-10 px-2.5 py-4" placeholder="Dari">
                            </div>
                            <span class="mx-2 text-gray-500"></span>
                            <div class="relative">
                              <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                  <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                              </div>
                              <input name="end" type="text" class=" border border-gray-300 text-gray-900 text-sm rounded-md  focus:ring-0   block w-full pl-10 px-2.5 py-4" placeholder="Sampai">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="max-w-md mx-auto text-center mt-5">
                        <img class="w-48 mx-auto" src="./img/icon/empty.jpg" alt="">
                        <p class="text-lg font-semibold">Belum Ada Transaksi Baru</p>
                        <p> Belum ada Kos di Draft. Yuk, mulai cari & booking Kos yang kamu inginkan!</p>
                      </div> 
                  </div>
                </div>
                <div id="verif_tab" class="tab_menu hidden">
                  <div class="border rounded-xl p-5 lg:w-[90%] mx-auto mt-3 ">
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
                          <input id="ktp" name="identitas" type="radio"> <label for="ktp">KTP</label>&emsp;
                          <input id="SIM" name="identitas" type="radio"> <label for="SIM">SIM</label>&emsp;
                          <input id="Passport" name="identitas" type="radio"> <label for="Passport">Passport</label>
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
                        <button id="selfi-btn" class="bg-gray-100 h-28 w-36 border rounded-md text-[#29af61]  lg:ml-20 text-2xl">
                          <i class="fa-solid fa-camera-retro"></i>
                        </button>
                        <input class="hidden" id="selfi" type="file">
                        <p class="text-xs text-red-500 mt-5"><i class="fa-solid fa-circle-exclamation"></i> Kamu belum mengunggah foto kartu identitas</p>
                        <div class="flex mt-5">
                          <input id="pvpl" type="checkbox">
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
            </div>
      </div>
  </div>


 
  <br>

  @include('layouts.cari')

  
  @endsection
  @section('footer')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/datepicker.min.js"></script>
  <script>
    // Tab menu
    $('.menu_btn').on('click', function() {
        $(".tab_menu").hide();  
        $("#"+this.id+'_tab').show()
        $(".menu_btn").css({ ' --tw-text-opacity' : '1', 'color' : 'rgb(107 114 128 / var(--tw-text-opacity)'});  
        $("#"+this.id).css("color","black");     
      // console.log(this.id)
      });

    // Tab riwayat & Daftar
    $('.btn_rd').on('click', function() {
        $(".rdr_tb").hide();  
        $("#"+this.id+'_tb').show()
        $(".btn_rd").css({ ' --tw-text-opacity' : '#29af61', 'color' : 'rgb(107 114 128 / var(--tw-text-opacity)','border':'none'});  
        $("#"+this.id).css({ 'border-bottom': '2px solid #29af61', 'color' : '#29af61'});     
      });
    //file btn
    $('#kartu-btn').on('click', function() {
      $('#kartu').click();
    })
    $('#selfi-btn').on('click', function() {
      $('#selfi').click();
    })
        
    </script>
@endsection