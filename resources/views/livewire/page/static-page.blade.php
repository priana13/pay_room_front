<div class="grid lg:grid-cols-[30%_80%] sm:grid-cols-none">
    <div>          
        
        
        <a href="{{ route('static-page', 'about') }}" id="kost_saya" class="flex mt-2 py-4 text-{{ ($slug == 'about')?'black':'gray-500' }} border-b-2 w-full">
            <i class="fa-solid fa-house text-lg"></i> 
            <p class="ml-3 mt-1">About</p>
        </a>
        <a href="{{ route('static-page', 'kebijakan-privacy') }}" id="rwyt_book" class="flex mt-2 py-4 text-{{ ($slug == 'kebijakan-privacy')?'black':'gray-500' }} border-b-2 w-full" >
            <i class="fa-solid fa-book-bookmark text-lg"></i>
            <p class="ml-3 mt-1">Kebijakan Privacy</p>
        </a>
        <a href="{{ route('static-page', 'syarat-dan-ketentuan') }}" id="rwyt_kost" class="flex mt-2 py-4 text-{{ ($slug == 'syarat-dan-ketentuan')?'black':'gray-500' }} border-b-2 w-full" >
            <i class="fa-solid fa-house-laptop text-lg"></i>
            <p class="ml-3 mt-1">Syarat & Ketentuan</p>
        </a> 
        <a id="rwy_tr" class="flex mt-2 py-4 text-{{ ($slug == 'faq')?'black':'gray-500' }} border-b-2 w-full hidden">
            <i class="fa-solid fa-magnifying-glass text-lg"></i>
            <p class="ml-3 mt-1">FAQ</p>
        </a>
        <a href="{{ route('static-page', 'contact') }}" id="verif" class="flex mt-2 py-4 text-{{ ($slug == 'contact')?'black':'gray-500' }} border-b-2 w-full">
            <i class="fa-solid fa-phone text-lg"></i>
            <p class="ml-3 mt-1">Contact Us</p>
        </a>
    </div>
    <div>

        <div id="kost_saya_tab" class="tab_menu p-2">
            <div class="p-5 lg:w-[90%] mx-auto mt-3">
              <p class="font-bold text-2xl">{{ $page['title'] }}</p>
              <div class="lg:px-5 mt-5">               

                {!! $page['body'] !!}
                
              </div>
            </div>
        </div>               
       
    </div>
</div>
