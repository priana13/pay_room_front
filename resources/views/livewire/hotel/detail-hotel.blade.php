<div>



  <div class="sticky top-0 z-30 grid grid-cols-[40px_auto_70px] py-3 px-2 bg-white lg:hidden shadow-lg">
    <div>
      <button class="text-xl">
        <i class="fa-solid fa-arrow-left"></i>
      </button>
    </div>
    <div class="line-clamp-1">
        {{ $hotel['title'] }}
    </div>
    <div class="text-right text-xl">
      <button>
        <i class="fa-solid fa-heart"></i>
      </button>&emsp;
      <button>
        <i class="fa-solid fa-share-nodes"></i>
      </button>
    </div>
  </div>

  <br>
  <div class="max-w-6xl mx-auto px-2">
    <div class="grid lg:grid-cols-[65%_35%] gap-2">
      <div>
        <img class="object-cover w-full lg:h-[430px] rounded-lg lg:rounded-l-lg" src="https://static.mamikos.com/uploads/cache/data/style/2022-07-20/OzNFQG4R-540x720.jpg" alt="">
      </div>
      <div class="hidden lg:block">
        <img class="object-cover w-full h-[210px] rounded-tr-lg" src="https://static.mamikos.com/uploads/cache/data/style/2022-07-20/OzNFQG4R-540x720.jpg" alt="">
        <img class="object-cover w-full h-[210px] rounded-br-lg mt-2" src="https://static.mamikos.com/uploads/cache/data/style/2022-07-20/OzNFQG4R-540x720.jpg" alt="">
      </div>
    </div>
    <div class="grid lg:grid-cols-[65%_35%] gap-2 ">
      <div class="lg:pr-16">
        <div class="mt-3">
          <button class=" rounded-lg border-2 py-2.5 w-28">
            <i class="fa-solid fa-image"></i>
            <p class="text-sm font-semibold">Foto</p> 
          </button>
          <button class=" rounded-lg border-2 py-2.5 w-28 ml-3">
            <i class="fa-solid fa-video"></i>
            <p class="text-sm font-semibold">Video</p> 
          </button>
        </div>
        <p class="text-2xl font-bold text-[#383746] my-5">{{ $hotel['title'] }}</p>
        <div class="lg:flex grid grid-cols-[30%_60%]">
          <p class="border px-2 py-1 rounded-md font-semibold">{{ $hotel['bed'] }}</p>
          <p class=" px-2 py-1 font-semibold ml-3 flex"><i class="fa-solid fa-location-dot mt-0.5"></i> &nbsp;{{ $hotel['kota'] }}  </p>
          <p class=" px-2 py-1 font-semibold ml-3"><i class="fa-solid fa-star"></i> 4.8 <a class="font-medium text-gray-400">(10)</a></p>
          <p class=" px-2 py-1 text-gray-500 ml-3"><i class="fa-solid fa-money-bill"></i> {{ $hotel['branch']['name'] }}</p>
        </div>
        <div class="grid grid-cols-2 mt-4">
          <p class="mt-1"><i class="fa-solid fa-door-open"></i> Tersisa <a class="text-red-500"> {{ $hotel['room_qty'] }} Kamar</a></p>
          <div class="flex justify-end">
            <button class="border rounded-lg px-3 py-1">
              <i class="fa-regular fa-heart"></i> Simpan
            </button>
            <button class="border rounded-lg ml-2 px-3 py-1">
              <i class="fa-solid fa-share-nodes"></i> Bagikan
            </button>
          </div>
        </div>
        <div class="grid grid-cols-[auto_60px] mt-7 font-semibold py-6 border-y">
          <div>
            <p class="text-lg ">Hotel Dikeloa Oleh KeyPayRoom</p>
            <p class="text-green-700 text-sm"><i class="fa-solid fa-circle"></i> Sedang Online</p>
          </div>
          <div class="flex justify-end">
            <img class="w-14 h-14 rounded-full" src="https://static.mamikos.com/uploads/cache/data/user/2021-03-17/fEnpmoiw-240x320.jpg" alt="">
          </div>
        </div>
        <div class="mt-7">
          <p class="text-xl font-bold text-[#383746]">Yang kamu dapatkan di Singgahsini</p>
          <div class="grid grid-cols-[40px_auto] mt-5">
            <div class="flex items-center text-gray-600 text-xl">
                <i class="fa-solid fa-circle-dollar-to-slot"></i>
            </div>
            <div >
                <p class="text-[#383746] text-md font-semibold">Bebas Biaya Admin</p>
                <p class="text-gray-400 text-sm">Kamu tidak akan dikenakan biaya admin saat melakukan pembayaran</p>
            </div>
          </div>
          <div class="grid grid-cols-[40px_auto] mt-5">
            <div class="flex items-center text-gray-600 text-xl">
                <i class="fa-solid fa-shield"></i>
            </div>
            <div >
                <p class="text-[#383746] text-md font-semibold">Asuransi</p>
                <p class="text-gray-400 text-sm">Kompensasi barang hilang</p>
            </div>
          </div>
          <div class="grid grid-cols-[40px_auto] mt-5">
            <div class="flex items-center text-gray-600 text-xl">
                <i class="fa-solid fa-star"></i>           
            </div>
            <div >
                <p class="text-[#383746] text-md font-semibold">Pro Service</p>
                <p class="text-gray-400 text-sm">Pelayanan terbaik</p>
            </div>
          </div>
        </div>
        <div class="mt-7 border-t">
          <div class="grid grid-cols-[40px_auto] mt-5">
            <div class="flex items-center text-gray-600 text-xl">
              <i class="fa-solid fa-right-left"></i>
            </div>
            <div >
                <p class="text-[#383746] text-md font-semibold">Bisa Refund</p>
                <p class="text-gray-400 text-sm">Sesuai dengan ketentuan dan kebijakan refund yang berlaku</p>
                <a class="text-[#383746] text-sm font-semibold underline" href="">Bagaimana ketentuannya?</a>
            </div>
          </div>
        </div>
        <div class="mt-7 border-t">
          <p class="text-xl font-bold text-[#383746] mt-5">Spesifikasi tipe kamar</p>
          <div class="grid grid-cols-[40px_auto] mt-5">
            <div class="flex items-center text-gray-600 text-xl">
              <i class="fa-solid fa-house"></i>     
             </div>
            <div >
                <p class="text-[#383746] text-md font-semibold">3.6 x 4 meter</p>
            </div>
          </div>
          <div class="grid grid-cols-[40px_auto] mt-5">
            <div class="flex items-center text-gray-600 text-xl">
              <i class="fa-solid fa-bolt"></i>
            </div>
            <div >
                <p class="text-[#383746] text-md font-semibold">listrik</p>
            </div>
          </div>
        </div>
        <div class="mt-7 border-t">
          <p class="text-xl font-bold text-[#383746] mt-5">Fasilitas kamar</p>
          <div class="grid grid-cols-2">
            <div class="grid grid-cols-[40px_auto] mt-5">
              <div class="flex items-center text-gray-600 text-xl">
                <i class="fa-solid fa-wind"></i>
               </div>
              <div >
                  <p class="text-[#383746] text-md font-semibold">AC</p>
              </div>
            </div>
            <div class="grid grid-cols-[40px_auto] mt-5">
              <div class="flex items-center text-gray-600 text-xl">
                <i class="fa-solid fa-border-top-left"></i>
              </div>
              <div >
                  <p class="text-[#383746] text-md font-semibold">Meja</p>
              </div>
            </div>
            <div class="grid grid-cols-[40px_auto] mt-5">
              <div class="flex items-center text-gray-600 text-xl">
                <i class="fa-solid fa-bed"></i> 
               </div>
              <div >
                  <p class="text-[#383746] text-md font-semibold">Kasur</p>
              </div>
            </div>
            <div class="grid grid-cols-[40px_auto] mt-5">
              <div class="flex items-center text-gray-600 text-xl">
                <i class="fa-solid fa-table"></i>
              </div>
              <div >
                  <p class="text-[#383746] text-md font-semibold">Lemari Baju

                  </p>
              </div>
            </div>
          </div>
        </div>
        <div class="mt-7 border-t">
          <p class="text-xl font-bold text-[#383746] mt-5 mb-2">Deskripsi</p>
          <p id="cerita" class="line-clamp-2">
            {{ $hotel['desc'] }}
          </p>
          <br>
          <button id="lihat_cerita" class="underline">Lihat Selengkapnya</button>
        </div>
        <div class="mt-7 border-t">
          <p class="text-xl font-bold text-[#383746] mt-5">Fasilitas umum</p>
          <div class="grid grid-cols-2">
            <div class="grid grid-cols-[40px_auto] mt-5">
              <div class="flex items-center text-gray-600 text-xl">
                <i class="fa-solid fa-wifi"></i>
               </div>
              <div >
                  <p class="text-[#383746] text-md font-semibold">WiFi</p>
              </div>
            </div>
            <div class="grid grid-cols-[40px_auto] mt-5">
              <div class="flex items-center text-gray-600 text-xl">
                <i class="fa-solid fa-ice-cream"></i>
              </div>
              <div >
                  <p class="text-[#383746] text-md font-semibold">Kulkas</p>
              </div>
            </div>
    
          </div>
        </div>
        <div class="mt-7 border-t">
          <p class="text-xl font-bold text-[#383746] mt-5">Ketentuan pengajuan sewa</p>
          <p class="text-md font-semibold text-[#383746] mt-5">Bisa bayar DP (uang muka) dulu</p>
          <p class="text-md font-semibold text-gray-600">Biaya DP adalah 30% dari biaya yang dipilih.</p>
          <p class="border-t border-gray-100 mt-5"></p>
          <div class="grid grid-cols-2">
            <div class="grid grid-cols-[40px_auto] mt-5">
              <div class=" text-gray-600 text-xl">
                <i class="fa-solid fa-file"></i>
               </div>
              <div >
                  <p class="text-[#383746] text-md font-semibold">Waktu mulai menginap terdekat:</p>
                  <p class="text-[#383746] text-md font-semibold">Bisa di hari H setelah pengajuan sewa.</p>
              </div>
            </div>
            <div class="grid grid-cols-[40px_auto] mt-5">
              <div class="text-gray-600 text-xl">
                <i class="fa-solid fa-file"></i>
              </div>
              <div >
                <p class="text-[#383746] text-md font-semibold">Waktu mulai menginap terjauh:</p>
                <p class="text-[#383746] text-md font-semibold">1 bulan setelah pengajuan sewa.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="mt-7 border-t">
          <p class=" text-2xl my-5 font-semibold ml-3"><i class="fa-solid fa-star text-green-500"></i> 4.3 (10 review)</p>
          <div>
            <div class="grid grid-cols-[auto_70px] mt-7">
              <div class="flex items-center text-gray-600 text-xl ">
                <div class=" flex w-12 h-12 bg-gray-200 rounded-full justify-center items-center">
                  <i class="fa-solid fa-user my-auto"></i>
                </div>
                <div class="ml-3">
                  <p class="text-md font-semibold">Anonim</p>
                  <p class="text-sm text-gray-400 font-semibold">1 bulan</p>
                </div>
              </div>
              <div class="flex justify-end">
                <p class="text-[#383746] text-md font-semibold h-9 w-14 p-1 border"><i class="fa-solid fa-star"></i> 4.6</p>
              </div>
            </div>
            <p class="text-sm text-gray-600 my-5">Untuk keseluruhan lumayan</p>
            <div class="px-7 border-l-2 mt-1">
              <p class="text-md font-semibold">Balasan dari Resepsionis</p>
              <p class="text-sm text-gray-400 font-semibold">4 minggu yang lalu</p>
              <p class="mt-4">Halo, Kakak. Terima kasih atas review dan ratingnya. Semoga Anda selalu betah untuk singgah di hotel kami :)</p>
            </div>
          </div>
          <div>
            <div class="grid grid-cols-[auto_70px] mt-7">
              <div class="flex items-center text-gray-600 text-xl ">
                <div class=" flex w-12 h-12 bg-gray-200 rounded-full justify-center items-center">
                  <i class="fa-solid fa-user my-auto"></i>
                </div>
                <div class="ml-3">
                  <p class="text-md font-semibold">Anonim</p>
                  <p class="text-sm text-gray-400 font-semibold">1 bulan</p>
                </div>
              </div>
              <div class="flex justify-end">
                <p class="text-[#383746] text-md font-semibold h-9 w-14 p-1 border"><i class="fa-solid fa-star"></i> 4.6</p>
              </div>
            </div>
            <p class="text-sm text-gray-600 my-5">Untuk keseluruhan lumayan</p>
            <div class="px-7 border-l-2 mt-1">
              <p class="text-md font-semibold">Balasan dari Pemilik</p>
              <p class="text-sm text-gray-400 font-semibold">4 minggu yang lalu</p>
              <p class="mt-4">Halo, Kakak. Terima kasih atas review dan ratingnya. Semoga Anda selalu betah untuk singgah di kost kami :)</p>
            </div>
          </div>
          <div>
            <div class="grid grid-cols-[auto_70px] mt-7">
              <div class="flex items-center text-gray-600 text-xl ">
                <div class=" flex w-12 h-12 bg-gray-200 rounded-full justify-center items-center">
                  <i class="fa-solid fa-user my-auto"></i>
                </div>
                <div class="ml-3">
                  <p class="text-md font-semibold">Anonim</p>
                  <p class="text-sm text-gray-400 font-semibold">1 bulan</p>
                </div>
              </div>
              <div class="flex justify-end">
                <p class="text-[#383746] text-md font-semibold h-9 w-14 p-1 border"><i class="fa-solid fa-star"></i> 4.6</p>
              </div>
            </div>
            <p class="text-sm text-gray-600 my-5">Untuk keseluruhan lumayan</p>
            <div class="px-7 border-l-2 mt-1">
              <p class="text-md font-semibold">Balasan dari Pemilik kos</p>
              <p class="text-sm text-gray-400 font-semibold">4 minggu yang lalu</p>
              <p class="mt-4">Halo, Kakak. Terima kasih atas review dan ratingnya. Semoga Anda selalu betah untuk singgah di kost kami :)</p>
            </div>
          </div>
          <button class="p-3 border rounded-md mt-7 font-semibold">
            Lihat Semua Review(9)
          </button>
        </div>
      </div>
      <div>
        <div class="sticky top-32 hidden lg:block">
            <div class="rounded-md shadow-costum1 p-5 mt-3 ">
                <div class="text-sm mt-1">
                    <a class=" text-red-600"><i class="fa-solid fa-bolt"></i> {{ number_format($hotel['discount'],0,',','.') }}%</a>
                    <a class="text-gray-400 line-through">Rp{{ number_format($hotel['price'],0,',','.') }}</a>
                 </div>
                 <div class="text-[#303030] mt-3">
                    <a class="text-2xl font-semibold">Rp {{ number_format($hotel['price_discount'],0,',','.') }}</a><a>/ day</a> 
                 </div>
                 <div class="grid grid-cols-2 gap-4 mt-3">
                    <div>
                        <input class="w-full border p-3 rounded-md" type="date" value="{{ date('Y-m-d') }}">
                    </div>
                    <div>
                        <select class="w-full border p-3 rounded-md" name="" id="">
                            <option value="">Day</option>
                        </select>
                    </div>
                 </div>
                 <a class="px-8 py-3 bg-[#29af61] block max-w-md mx-auto text-center mt-7 text-white font-semibold rounded-md" href="">Booking Sekarang</a>  
            </div>
            <div class="rounded-lg border  p-5 mt-3">
                <i class="fa-solid fa-gift"></i>
                <p class="text-xl font-bold text-[#383746]">Sewa 3 bulan, disc besar!</p>
                <p>Sewa 3 bulan langsung dapat diskon 400rb! Kode Promo: AWALHEMAT Hanya s/d 31 Januari 2023</p>

                <p> 10 Jan 2023 - 31 Jan 2023</p>
            </div>
        </div>
      </div>
    </div>


    <livewire:hotel.list-hotel-footer />


    
    
  <section id="bottom-navigation" class="fixed inset-x-0 -bottom-[1px] z-10 bg-white shadow-costum1 rounded-t-2xl py-3 pr-4 lg:hidden">
    <div id="tabs" class="flex justify-between px-3">
      <div class="text-[#303030]">
        <a >Rp{{ number_format($hotel['price_discount'],0,',','.') }}</a><a class="text-sm">/ day</a> 
        {{-- <p class="font-semibold text-green-500">Lihat Estimasi Pembayaran</p> --}}
        <p class="text-gray-400 line-through">Rp{{ number_format($hotel['price'],0,',','.') }}</p>
      </div>
      <button class="p-3 border rounded-md font-semibold right-2 absolute bg-[#29af61] text-white">
        Booking Sekarang
      </button>
    </div>
  </section>


    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
</div>
