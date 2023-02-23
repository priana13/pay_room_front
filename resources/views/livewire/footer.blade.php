<div id="footer" class="max-w-6xl mx-auto">
    <div class="grid lg:grid-cols-[28%_34%_20%_18%] gap-5 px-2">
        <div>
            <a href=""><img src="{{asset('storage/icon/logo_payRoom.png')}}" class="w-[125px]" alt=""></a>
            <p class="mt-3">
             {{$company['bio']}}
            </p>
            <div class="flex  mt-5">
            <img class="w-32 " src="storage/download_gplay.png" alt="">           
            </div>   
        </div>
        <div>
            <p class="text-lg font-semibold">KeyPayRoom</p>
            <div class="grid grid-cols-2 mt-3 gap-2">
                <div>               
                <p class="mt-3"><a href="">Rumtel</a></p>     
                <p class="mt-3"><a href="">Apartel</a></p>          
               
                </div>
                <div>
                <p class="mt-3"><a href="{{ route('static-page', 'about') }}">Tentang Kami</a></p>
                <p class="mt-3"><a href="{{ route('static-page', 'contact') }}">Contact</a></p>               
                </div>
            </div>
            <a href=""></a>
        </div>
        <div>
            <p class="text-lg font-semibold">Kebijakan</p>
            <p class="mt-3"></p>
            <p class="mt-3"><a href="{{ route('static-page', 'kebijakan-privacy') }}">Kebijakan Privasi</a></p>
            <p class="mt-3"><a href="{{ route('static-page', 'syarat-dan-ketentuan') }}">Syarat dan Ketentuan Umum</a></p>
        </div>
        <div>
            <p class="text-lg font-semibold">Hubungi Kami</p>
            <p class="mt-3"></p>
            <p class="mt-3"><a href=""><i class="fa-solid fa-envelope"></i> {{ $email }}</a></p>
            <p class="mt-3"><a href=""><i class="fa-brands fa-whatsapp"></i> {{ $telp}}</a></p>
            <p class="mt-3"><a href=""><i class="fa-brands fa-home"></i> {{ $alamat }}</a></p>
        </div>
        </div>
        <p class="border my-8"></p>
        <div class="grid grid-cols-2 px-2">
        <div class="text-sm">
            © {{ date('Y') }} keypayroom.co.id, All rights reserved
        </div>
        <div class="text-right text-2xl">
            <a href=""><i class="fa-brands fa-facebook"></i></a>&emsp;
            <a href=""><i class="fa-brands fa-twitter"></i></a>&emsp;
            <a href=""><i class="fa-brands fa-instagram"></i></a>
        </div>
    </div>
</div>
<br> <br> 