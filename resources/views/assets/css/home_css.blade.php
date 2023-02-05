<style>

    .swiper {
      width: 100%;
      height: 100%;
      padding-top: 16px;
      padding-bottom: 16px;
    }

    .swiper-slide .banner {
      text-align: center;
      font-size: 18px;
      /* Center slide text vertically */
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;
    }

    
      .swiper-slide a img {
        display: block;
        width: 70%;
        height: 70%;
        object-fit: cover;
        transition: all 0.6s ease;
        border-radius: 10px;
      }
    

    
    
    

    .swiper-slide-active a img {
      transform: scale(1.13);
    }

  .btn__navigation {
      display: flex;
      justify-content: center;
  }

  .swiper-button-next,.swiper-button-prev {
      align-self: center;
      left: 240px;
      margin-top: 0;
      position: static;
      top: 0;
      background: #fff;
      color: darkgrey;
      border-radius: 100px;
      box-shadow: 0 1px 8px rgb(36 36 36 / 14%);
      display: flex;
      height: 40px;
      justify-content: center;
      padding: 6px;
      width: 40px;
      content: "";
      background-image: url(./next.svg);
      z-index: 10;

  }

  .swiper-button-next-card,.swiper-button-prev-card,
  .swiper-button-next-card2,.swiper-button-prev-card2,
  .swiper-button-next-card3,.swiper-button-prev-card3 {
    align-items: center;
    border-radius: 100px;
    box-shadow: 0 -1px 4px rgb(0 0 0 / 4%), 0 4px 8px rgb(0 0 0 / 8%);
    display: flex;
    height: 40px;
    justify-content: center;
    outline: 0;
    width: 40px;

  }

  .swiper-button-prev-testimoni {
    align-items: center;
    background-image: none;
    background: #fff;
    border-radius: 50%;
    box-shadow: 0 4px 4px rgb(0 0 0 / 25%);
    display: flex;
    height: 40px;
    justify-content: center;
    left: 0;
    position: absolute;
    top: 50%;
    width: 40px;
    z-index: 10;
  }
  .swiper-button-next-testimoni {
    align-items: center;
    background-image: none;
    background: #fff;
    border-radius: 50%;
    box-shadow: 0 4px 4px rgb(0 0 0 / 25%);
    display: flex;
    height: 40px;
    justify-content: center;
    right: 0;
    position: absolute;
    top: 50%;
    width: 40px;
    z-index: 10;
  }

  .navigation-link {
      color: #000;
      font-weight: 600;
      margin: 8px 32px;
      position: static;
      text-align: center;
      font-size: 14px;
      top: 0;
      width: 136px;
  }

  .swiper-button-next::after,.swiper-button-prev::after, 
  .swiper-button-next-card::after,.swiper-button-prev-card::after ,
  .swiper-button-next-card2::after,.swiper-button-prev-card2::after ,
  .swiper-button-next-card3::after,.swiper-button-prev-card3::after ,
  .swiper-button-next-testimoni::after,.swiper-button-prev-testimoni::after{
    display: none;
  }

  
  select {
    -webkit-appearance: none;
    -moz-appearance: none;
    background: transparent;
    background-image: url("data:image/svg+xml;utf8,<svg fill='black' height='24' viewBox='0 0 24 24' width='24' xmlns='http://www.w3.org/2000/svg'><path d='M7 10l5 5 5-5z'/><path d='M0 0h24v24H0z' fill='none'/></svg>");
    background-repeat: no-repeat;
    background-position-x: 100%;
    background-position-y: 5px;
  }
  
    

</style>