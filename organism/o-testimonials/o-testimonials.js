'use strinct'

const testimonialSwiper = () => {
    const swiper = new Swiper('.o-testimonials__swiper', {
        loop: true,
        spaceBetween: 20,
        slidesPerView: 2,
        centeredSlides: true,
        loop: true,
        pagination: {
            el: '.swiper-pagination--testimonials',
            clickable: true,
        },
        autoplay: {
            delay: 10000,
        },
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            },
        },
        initialSlide: 1,
    });
}

window.addEventListener('DOMContentLoaded', () => {
    testimonialSwiper();
})