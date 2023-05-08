const swiper = new Swiper('.l-headerHome__slider', {
    pagination: {
        el: '.l-headerHome .swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.l-headerHome__controls__arrows .c-arrowButton.--right',
        prevEl: '.l-headerHome__controls__arrows .c-arrowButton.--left',
    },
    on: {
        init: function () {
            updateSliderPageInfo(document.querySelector(".l-headerHome"));
        },
        slideNextTransitionStart: function () {
            updateSliderPageInfo(document.querySelector(".l-headerHome"));
        },
        slidePrevTransitionEnd: function () {
            updateSliderPageInfo(document.querySelector(".l-headerHome"));
        },
    },
});