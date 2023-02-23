@extends('template.component.layout')
@section('custom_header')


<style>


</style>
@endsection
@section('content')

  @include('template.component.navbar')
  <div class="sticky top-0 z-30 grid grid-cols-[40px_auto_70px] py-3 px-2 bg-white lg:hidden shadow-lg">
    <div>
      <button class="text-xl">
        <i class="fa-solid fa-arrow-left mt-3"></i>
      </button>
    </div>
    <div >
      <button id="sch-bottom" class="text-sm text-gray-400 px-3 py-2.5 text-left w-full border rounded-md cari-btn">
        <i class="fa-solid fa-magnifying-glass"></i> Masukan nama lokasi
      </button>
    </div>
    <div class="text-right text-xl">
      
      <button class="rounded-lg py-1 px-2 border text-lg mt-1 btn-menu">
        <i class="fa-solid fa-bars"></i>
      </button>
    </div>
  </div>

  <div class="max-w-6xl mx-auto px-2">
      <div class="px-3  flex overflow-x-auto ">
        <button data-dropdown-toggle="dropdown-tipe"  class=" static py-2 px-5 text-lg border  rounded-full mx-1 mt-3">
          <div class="w-[160px]">          
            <i class="fa-solid fa-children"></i> Semua Tipe Kos
          </div>
            <div id="dropdown-tipe" class="z-10 mt-5 text-left hidden   bg-white divide-y divide-gray-100 rounded shadow w-80 px-2">
                <p class="mt-2">Tipe kos yang kamu cari berdasarkan gender.</p>
                <ul class="py-1 text-sm text-gray-700 font-medium">
                  <li class="text-xl py-2">
                      <input type="checkbox" id="putra" name="" value="putra">
                      <label for="putra">Putra</label>
                  </li>
                  <li class="text-xl py-2">
                    <input type="checkbox" id="putri" name="" value="putri">
                    <label for="putri">Putri</label>
                  </li>
                  <li class="text-xl py-2">
                    <input type="checkbox" id="semua" name="" value="semua">
                    <label for="semua">Campur</label>
                </li>
                </ul>
            </div>
        </button>
        <button data-dropdown-toggle="dropdown-bulana"  class="py-2 px-5 text-lg border rounded-full mx-1 mt-3">Bulanan
          <div id="dropdown-bulana" class="z-10 mt-5 text-left hidden   bg-white divide-y divide-gray-100 rounded shadow w-80 px-2">
              <p class="mt-2">Waktu bayar sewa sesuai harga kos yang kamu inginkan.</p>
              <ul class="py-1 text-sm text-gray-700 font-medium">
                <li class="text-xl py-2">
                    <input type="radio" id="mingguan" name="bayar" value="mingguan">
                    <label for="mingguan">Mingguan</label>
                </li>
                <li class="text-xl py-2">
                  <input type="radio" id="bulanan" name="bayar" value="bulanan">
                  <label for="bulanan">Bulanan</label>
                </li>
                <li class="text-xl py-2">
                  <input type="radio" id="tahunan" name="bayar" value="tahunan">
                  <label for="tahunan">Tahunan</label>
              </li>
              </ul>
          </div>
      </button>
 
      <button data-modal-target="modal-harga" data-modal-toggle="modal-harga" class="py-2 px-5 text-lg border rounded-full mx-1 mt-3">Harga</button>
        <div id="modal-harga" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
          <div class="relative w-full h-full max-w-2xl md:h-auto">
              <div class="relative bg-white rounded-lg shadow ">
                  <div class="flex items-start justify-between p-4 border-b rounded-t ">
                      <h3 class="text-xl font-semibold text-gray-900 ">
                          Harga
                      </h3>
                      <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center " data-modal-hide="modal-harga">
                          <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                          <span class="sr-only">Close modal</span>
                      </button>
                  </div>
                  <div class="p-6 space-y-6">
                    <div data-role="rangeslider">
                      <label for="range-1a">Minimal:</label>
                      <input type="range" name="range-1a" onchange="hagamin(this.value)" id="range-min" min="10000" max="20000000" value="10000" data-popup-enabled="true" data-show-value="true">
                      <input class="border focus:outline-none py-1 px-3" type="text" id="hrgmin" value="10000">
                      <br>  <br> 
                      <label for="range-1b">Maximal:</label>
                      <input type="range" name="range-1b" onchange="hagamax(this.value)" id="range-max" min="10000" max="20000000" value="10000000" data-popup-enabled="true" data-show-value="true">
                      <input class="border focus:outline-none py-1 px-3" type="text" id="hrgmax" value="10000000">
                    </div>
                    <script>
                        function hagamin(val) {
                          document.getElementById('hrgmin').value=val; 
                        }
                        function hagamax(val) {
                          document.getElementById('hrgmax').value=val; 
                        }
                    </script>
                  </div>
                  <!-- Modal footer -->
                  <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b ">
                      <button data-modal-hide="modal-harga" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Simpan</button>
                      <button data-modal-hide="modal-harga" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 ">Hapus</button>
                  </div>
              </div>
          </div>
        </div>
        <button data-modal-target="modal-fasilitas" data-modal-toggle="modal-fasilitas" class="py-2 px-5 text-lg border rounded-full mx-1 mt-3">Fasilitas</button>
        <div id="modal-fasilitas" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
          <div class="relative w-full h-full max-w-2xl md:h-auto">
              <div class="relative bg-white rounded-lg shadow ">
                  <div class="flex items-start justify-between p-4 border-b rounded-t ">
                      <h3 class="text-xl font-semibold text-gray-900 ">
                          Fasilitas
                      </h3>
                      <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center " data-modal-hide="modal-fasilitas">
                          <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                          <span class="sr-only">Close modal</span>
                      </button>
                  </div>
                  <div class="p-6  grid grid-cols-2 gap-4">
                    <div>
                      <input type="checkbox" id="K.mandi" name="fasilitas" value="K.mandi">
                      <label for="K.mandi">K.mandi</label>
                     </div>
                     <div>
                      <input type="checkbox" id="Air" name="fasilitas" value="Air">
                      <label for="Air">Air Panas</label>
                     </div>
                     <div>
                      <input type="checkbox" id="Ac" name="fasilitas" value="Ac">
                      <label for="Ac">Ac</label>
                     </div>
                     <div>
                      <input type="checkbox" id="Wifi" name="fasilitas" value="Wifi">
                      <label for="Wifi">Wifi</label>
                     </div>
                    
                  </div>
                  <!-- Modal footer -->
                  <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b ">
                      <button data-modal-hide="modal-fasilitas" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Simpan</button>
                      <button data-modal-hide="modal-fasilitas" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 ">Hapus</button>
                  </div>
              </div>
          </div>
        </div>
        <button data-dropdown-toggle="dropdown-aturan"  class="py-2 px-5 text-lg border rounded-full mx-1 mt-3">Aturan
          <div id="dropdown-aturan" class="z-10 mt-5 text-left hidden   bg-white divide-y divide-gray-100 rounded shadow w-80 px-2">
              <p class="mt-2">Layanan dan peraturan kos untuk kenyamanan kamu selama ngekos.</p>
              <ul class="py-1 text-sm text-gray-700 font-medium">
                <li class="text-xl py-2">
                    <input type="checkbox" id="Akses" name="" value="Akses">
                    <label for="Akses">Akses 24 jam</label>
                </li>
                <li class="text-xl py-2">
                  <input type="checkbox" id="pasutri" name="" value="pasutri">
                  <label for="pasutri">Bopleh pasutri</label>
                </li>
                <li class="text-xl py-2">
                  <input type="checkbox" id="Hewan" name="" value="Hewan">
                  <label for="Hewan">Boleh Bawa Hewan</label>
              </li>
              </ul>
            </div>
        </button>
      </div>
      <div class="mt-3 border-t">
        
        <button data-dropdown-toggle="dropdown-ngebut"  class="py-1 px-5 text-lg border rounded-full mx-1 mt-3"><i class="fa-solid fa-bolt"></i> Promo Ngebut
            <div id="dropdown-ngebut" class="z-10 mt-5 text-left hidden bg-white divide-y divide-gray-100 rounded shadow w-96 px-4 py-3">
              <div class="grid grid-cols-[300px_auto]">
                <div>
                  <p class="mt-2 text-sm">Dapat diskon pembayaran pertama harga sewa. Diskon hanya berlaku selama program berlangsung.</p>
                </div>
                <div>
                  <label class="relative inline-flex items-center cursor-pointer mt-5 ml-2">
                    <input type="checkbox" value="" class="sr-only peer">
                    <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
                  </label>
                </div>
              </div>  
                
            </div>
        </button>
      </div>
      <br>
      <div>
        <button onclick="location.href='#'" class="gri mt-3 text-left grid lg:grid-cols-[30%_auto] grid-cols-[40%_auto] w-full">
          <div style="background-image: url(https://static.mamikos.com/uploads/cache/data/style/2022-12-29/CqqT0kpm-360x480.jpg);" class="bg-no-repeat bg-cover rounded-xl bg-center  h-full w-full">
          </div>
          <div class="p-3 ">
            <a href="" class="py-1 px-2 font-semibold text-sm border rounded-md ">Kos Andala</a>     &emsp;           
            <a href="" class="py-1 px-2 font-semibold text-sm border rounded-md ">Putri</a>
            <p class="text-xl mt-2">Kost Griya Milenia 1 Tipe Executive Caturtunggal Depok Sleman 067DA</p>
            <p class="font-semibold">Depok</p>
            <p class="line-clamp-1 mt-1 text-gray-400">
              K. Mandi Dalam ·WiFi ·AC ·Kloset Duduk ·Kasur Televisi
            </p>
            <div class="grid grid-cols-2  h-full mt-11">
              <div >
                <p class=" font-semibold "><i class="fa-solid fa-star"></i> 4.8 </p>
              </div>
              <div class="text-right">
                <a  class="text-lg font-semibold">Rp872.000</a><a> / bulan</a> 
              </div>
            </div>
          </div>
        </button>
        <br>
        <button onclick="location.href='#'" class="gri mt-3 text-left grid lg:grid-cols-[30%_auto] grid-cols-[40%_auto] w-full">
          <div style="background-image: url(https://static.mamikos.com/uploads/cache/data/style/2022-12-29/CqqT0kpm-360x480.jpg);" class="bg-no-repeat bg-cover rounded-xl bg-center  h-full w-full">
          </div>
          <div class="p-3 ">
            <a href="" class="py-1 px-2 font-semibold text-sm border rounded-md ">Kos Andala</a>     &emsp;           
            <a href="" class="py-1 px-2 font-semibold text-sm border rounded-md ">Putri</a>
            <p class="text-xl mt-2">Kost Griya Milenia 1 Tipe Executive Caturtunggal Depok Sleman 067DA</p>
            <p class="font-semibold">Depok</p>
            <p class="line-clamp-1 mt-1 text-gray-400">
              K. Mandi Dalam ·WiFi ·AC ·Kloset Duduk ·Kasur Televisi
            </p>
            <div class="grid grid-cols-2  h-full mt-11">
              <div >
                <p class=" font-semibold "><i class="fa-solid fa-star"></i> 4.8 </p>
              </div>
              <div class="text-right">
                <a  class="text-lg font-semibold">Rp872.000</a><a> / bulan</a> 
              </div>
            </div>
          </div>
        </button>
        <br>
        <button onclick="location.href='#'" class="gri mt-3 text-left grid lg:grid-cols-[30%_auto] grid-cols-[40%_auto] w-full">
          <div style="background-image: url(https://static.mamikos.com/uploads/cache/data/style/2022-12-29/CqqT0kpm-360x480.jpg);" class="bg-no-repeat bg-cover rounded-xl bg-center  h-full w-full">
          </div>
          <div class="p-3 ">
            <a href="" class="py-1 px-2 font-semibold text-sm border rounded-md ">Kos Andala</a>     &emsp;           
            <a href="" class="py-1 px-2 font-semibold text-sm border rounded-md ">Putri</a>
            <p class="text-xl mt-2">Kost Griya Milenia 1 Tipe Executive Caturtunggal Depok Sleman 067DA</p>
            <p class="font-semibold">Depok</p>
            <p class="line-clamp-1 mt-1 text-gray-400">
              K. Mandi Dalam ·WiFi ·AC ·Kloset Duduk ·Kasur Televisi
            </p>
            <div class="grid grid-cols-2  h-full mt-11">
              <div >
                <p class=" font-semibold "><i class="fa-solid fa-star"></i> 4.8 </p>
              </div>
              <div class="text-right">
                <a  class="text-lg font-semibold">Rp872.000</a><a> / bulan</a> 
              </div>
            </div>
          </div>
        </button>
        

        <br>
        <div class="text-center">
          <button class="text-green-700 ">
            <i class="fa-solid fa-circle-plus"></i> Lihat Lebih Banyak lagi
          </button>
        </div>
        
      </div>
  </div>


 
  <br>

  @include('template.component.cari')

 


 
  <br>

  
 

  

 
  
  @endsection
  @section('footer')

@endsection