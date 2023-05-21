function updateSliderPageInfo(slider) {
    const totalPagesEl = slider.querySelector(".totalPages");
    const activePageEl = slider.querySelector(".activePage");
    const totalSlides = slider.querySelectorAll(".swiper-slide").length;
    const activeSlideIndex = slider.querySelector(".swiper-slide-active").getAttribute('aria-label').split(' /')[0];

    totalPagesEl.textContent = totalSlides;
    activePageEl.textContent = activeSlideIndex;
}

// deve ser utilizado na declaracao do swiper
// veja exemplo em l-headerHome.js