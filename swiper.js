document.addEventListener('DOMContentLoaded', function () {
    const swiper = new Swiper('.swiper-container', {
        loop: true,
        slidesPerView: 1,
        spaceBetween: 32,
        autoplay: {
            delay: 8000,
        },
        navigation: {
            nextEl: '.next-button',
            prevEl: '.prev-button',
        },
        breakpoints: {
            640: {
                slidesPerView: 1.5,
                centeredSlides: true,
            },
            1024: {
                centeredSlides: false,
                slidesPerView: 2.25,
            },
        },
    })
})