var sSliderCards__lancamentos = new Swiper(".js-swiperProductSlider__lancamentos", {
    slidesPerView: 1,
    spaceBetween: 10,
    navigation: {
        nextEl: '.js-swiperProductSlider__lancamentos .c-arrowButton.--right',
        prevEl: '.js-swiperProductSlider__lancamentos .c-arrowButton.--left',
    },
    breakpoints: {
        530: {
            slidesPerView: 2,
            spaceBetween: 15,
        },
        840: {
            slidesPerView: 3,
            spaceBetween: 15,
        },
        1240: {
            slidesPerView: 4,
            spaceBetween: 15,
        }
    }
});

var sSliderCards__maisVendidos = new Swiper(".js-swiperProductSlider__maisVendidos", {
    slidesPerView: 1,
    spaceBetween: 10,
    navigation: {
        nextEl: '.js-swiperProductSlider__maisVendidos .c-arrowButton.--right',
        prevEl: '.js-swiperProductSlider__maisVendidos .c-arrowButton.--left',
    },
    breakpoints: {
        530: {
            slidesPerView: 2,
            spaceBetween: 15,
        },
        840: {
            slidesPerView: 3,
            spaceBetween: 15,
        },
        1240: {
            slidesPerView: 4,
            spaceBetween: 15,
        }
    }
});

var sSliderCards__categorias = new Swiper(".js-swiperProductSlider__categories", {
    slidesPerView: 1,
    spaceBetween: 10,
    navigation: {
        nextEl: '.js-swiperProductSlider__categories .c-arrowButton.--right',
        prevEl: '.js-swiperProductSlider__categories .c-arrowButton.--left',
    },
    breakpoints: {
        620: {
            slidesPerView: 3,
            spaceBetween: 15,
        },
        800: {
            slidesPerView: 4,
            spaceBetween: 15,
        },
        1024: {
            slidesPerView: 5,
            spaceBetween: 15,
        },
        1260: {
            slidesPerView: 6,
            spaceBetween: 15,
        }
    }
});