
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
                  