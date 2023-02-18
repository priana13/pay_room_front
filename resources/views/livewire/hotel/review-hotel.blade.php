<div class="mt-7 border-t">
    <p class=" text-2xl my-5 font-semibold ml-3"><i class="fa-solid fa-star text-green-500"></i> {{ $total_bintang }} ({{ $jumlah }} review)</p>
    
    @forelse($reviews as $review)
   
    <div>
        <div class="grid grid-cols-[auto_70px] mt-7">
            <div class="flex items-center text-gray-600 text-xl ">
            <div class=" flex w-12 h-12 bg-gray-200 rounded-full justify-center items-center">
                <i class="fa-solid fa-user my-auto"></i>
            </div>
            <div class="ml-3">
                <p class="text-md font-semibold">{{ $review['nama_user'] }}</p>

               
                <p class="text-sm text-gray-400 font-semibold">{{  date('d-m-Y H:i:s', strtotime($review['tanggal']))  }}</p>
            </div>
            </div>
            <div class="flex justify-end">
            <p class="text-[#383746] text-md font-semibold h-9 w-14 p-1 border"><i class="fa-solid fa-star"></i> {{ $review['bintang'] }}</p>
            </div>
        </div>
        <p class="text-sm text-gray-600 my-5">{{ $review['ulasan'] }}</p>
        <div class="px-7 border-l-2 mt-1 hidden">
            <p class="text-md font-semibold">Balasan dari Resepsionis</p>
            <p class="text-sm text-gray-400 font-semibold">4 minggu yang lalu</p>
            <p class="mt-4">Halo, Kakak. Terima kasih atas review dan ratingnya. Semoga Anda selalu betah untuk singgah di hotel kami :)</p>
        </div>
    </div>

    @empty

    @endforelse

    <button class="p-3 border rounded-md mt-7 font-semibold" wire:click = "lainnya">
    Lihat Review Lainnya
    </button>
</div>