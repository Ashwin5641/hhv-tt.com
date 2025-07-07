var swiper = new Swiper(".products-wrapper", {
    slidesPerView: 4,
    spaceBetween: 10,
    loop: true,
    loopedSlides: 9,

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
        501: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        701: {
            slidesPerView: 1,
            spaceBetween: 20,
        },  
        800: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        1000: {
            slidesPerView: 3,
            spaceBetween: 10,
        },
        1450: {
            slidesPerView: 4,
            spaceBetween: 20,
        }
    }
});