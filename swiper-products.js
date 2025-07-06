var swiper = new Swiper(".products-wrapper", {
    slidesPerView: 3,
    spaceBetween: 10,

    // ✅ Pagination (dots)
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
 
    // ✅ Navigation arrows
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },

    // ✅ Autoplay
    autoplay: {
        delay: 3000, // 3 seconds
        disableOnInteraction: false,
    },

    // ✅ Responsive settings
    breakpoints: {
        320: {
            slidesPerView: 1,
            spaceBetween: 10,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 30,
        }
    }
});