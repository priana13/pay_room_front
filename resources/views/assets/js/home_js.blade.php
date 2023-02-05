<script>
    //swiper
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1.5,
        spaceBetween: 30,
        speed: 900,
        centeredSlides: true,loop: true,
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
          disabledClass: 'disabled_swiper_button'

        },
        breakpoints: {
          640: {
            spaceBetween: -100,
          },
        },
        
        
      });


      var swiper2 = new Swiper(".mySwiper-card", {
        slidesPerView: 1,
        spaceBetween: 10,
        speed: 900,
        centeredSlides: true,
        
        navigation: {
          nextEl: ".swiper-button-next-card",
          prevEl: ".swiper-button-prev-card",
          disabledClass: 'disabled_swiper_button'

        },    
      });

      var swiper3 = new Swiper(".mySwiper-testimoni", {
        slidesPerView: 1.2,
        spaceBetween: 30,
        speed: 900,        
        navigation: {
          nextEl: ".swiper-button-next-testimoni",
          prevEl: ".swiper-button-prev-testimoni",
        }, 
        breakpoints: {
          640: {
            slidesPerView: 3,
            spaceBetween: 30,
          },
        },   
      });

      var swiper4 = new Swiper(".mySwiper-card3", {
        slidesPerView: 1,
        spaceBetween: 10,
        speed: 900,
        centeredSlides: true,
        
        navigation: {
          nextEl: ".swiper-button-next-card3",
          prevEl: ".swiper-button-prev-card3",
          disabledClass: 'disabled_swiper_button'

        },    
      });

      var swiper5 = new Swiper(".mySwiper-card2", {
        slidesPerView: 1,
        spaceBetween: 10,
        speed: 900,
        centeredSlides: true,
        
        navigation: {
          nextEl: ".swiper-button-next-card2",
          prevEl: ".swiper-button-prev-card2",
          disabledClass: 'disabled_swiper_button'

        },    
      });

      
    // move search

    $(window).scroll(function() {

      var hT = $('#move-search').offset().top,
          hH = $('#move-search').outerHeight(),
          wH = $(window).height(),
          wS = $(this).scrollTop();
      if($( document ).width() < 850){
        if (wS > (hT+hH-wH) && (hT > wS) && (wS+wH > hT+hH)){
          $('#sch-top-mobile').hide()
        } else {
          $('#sch-top-mobile').show()
        }
        return;
      }
        
      if (wS > (hT+hH-wH) && (hT > wS) && (wS+wH > hT+hH)){
        $('#sch-top').hide()
      } else {
        $('#sch-top').show()
      }
    });


    const axios = require('axios');

    // Make a request for a user with a given ID
    axios.get('/api/houses')
      .then(function (response) {
        // handle success
        console.log(response);
      })
      .catch(function (error) {
        // handle error
        console.log(error);
      })
      .then(function () {
        // always executed
      });
      
        
    </script>