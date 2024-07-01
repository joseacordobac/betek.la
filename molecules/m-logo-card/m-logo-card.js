const sliderLogoCard = () => {
  const getLogoCard = document.querySelector('.js-alians-brands');
  console.log(getLogoCard)
  if(!getLogoCard) return;

  const swiper = new Swiper(getLogoCard, {
    slidesPerView: 8,
      loop: true,
      speed: 3000,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      centeredSlides: true,
      autoplay: {
        delay: 0,
      },
      breakpoints: {
        0: {
          slidesPerView: 2,
        },
        768: {
          slidesPerView: 4,
        },
        1024: {
          slidesPerView: 8,
        },
      }
  });
}


window.addEventListener('load', ()=>{
  sliderLogoCard();
})