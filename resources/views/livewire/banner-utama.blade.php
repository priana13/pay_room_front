<div class="max-w-6xl mx-auto px-1 <?php (count($banners) > 0)?'hidden':''; ?>">
    <div class="swiper mySwiper ">
      <div class="swiper-wrapper ">

        @foreach($banners as $banner)

        <div class="swiper-slide ">
          <a class="banner" href="{{$banner['url']}}">          
            <img src="{{$banner['image']}}" alt="">
          </a>
        </div>

        @endforeach

     
      </div>
    </div>
    <div class="btn__navigation mt-10">
      <div class="swiper-button-prev "><i class="fa-solid fa-chevron-left"></i></div>
        <a class="navigation-link" href="">Lihat semua promo</a>
      <div class="swiper-button-next"><i class="fa-solid fa-chevron-right"></i></div>
    </div>
</div>