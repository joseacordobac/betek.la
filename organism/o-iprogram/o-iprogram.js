const startPrograToSwiper = () =>{
    const swiperProgram = document.querySelector('.o-iprogram__wrapper');
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