const startPrograToSwiper = () =>{
    
    const withScreen = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

    const swiperProgram = document.querySelector('.o-iprogram__wrapper');

    if(withScreen < 780 ) return;

    const swiper = new Swiper(swiperProgram, {
        spaceBetween: 20,
        loop: true,
        navigation: {
            nextEl: '.o-iprogram__pagination',
        },
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 3,
            }
        }
    });

}

window.addEventListener('DOMContentLoaded', () => {
    startPrograToSwiper();
})