// carousel for the trending now in hero section 

let swiperInstance = null;

  function handleSwiper() {
    const screenWidth = window.innerWidth;

    if (screenWidth < 768) {
      if (!swiperInstance) {
        swiperInstance = new Swiper(".trending-swiper", {
          loop: true,
          slidesPerView: 1,
          spaceBetween: 20,
          autoplay: {
            delay: 3000,
            disableOnInteraction: false,
          },
        });
      }
    } else {
      // Destroy swiper if screen is large
      if (swiperInstance) {
        swiperInstance.destroy(true, true);
        swiperInstance = null;
      }
    }
  }

  // Run on load
  document.addEventListener("DOMContentLoaded", handleSwiper);
  // Run on resize
  window.addEventListener("resize", handleSwiper);