const starMainSwipperEvents = () =>{

  const swiper = new Swiper('.events-resources-swipe', {
    speed: 400,
    spaceBetween: 20,
    slidesPerView: 3,
    loop: true,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    loop: true,
    autoplay: {
        delay: 10000,
    },
    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 3,
        },
    }
  });

}



window.addEventListener('DOMContentLoaded', ()=>{
  starMainSwipperEvents();
})