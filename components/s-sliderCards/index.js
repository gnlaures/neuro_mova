var sSliderCards__lancamentos = new Swiper(".js-swiperProductSlider__lancamentos", {
    slidesPerView: 4,
    spaceBetween: 15,
    navigation: {
        nextEl: '.js-swiperProductSlider__lancamentos .c-arrowButton.--right',
        prevEl: '.js-swiperProductSlider__lancamentos .c-arrowButton.--left',
    }
});

var sSliderCards__maisVendidos = new Swiper(".js-swiperProductSlider__maisVendidos", {
    slidesPerView: 4,
    spaceBetween: 15,
    navigation: {
        nextEl: '.js-swiperProductSlider__maisVendidos .c-arrowButton.--right',
        prevEl: '.js-swiperProductSlider__maisVendidos .c-arrowButton.--left',
    }
});

var sSliderCards__categorias = new Swiper(".js-swiperProductSlider__categories", {
    slidesPerView: 6,
    spaceBetween: 10,
    navigation: {
        nextEl: '.js-swiperProductSlider__categories .c-arrowButton.--right',
        prevEl: '.js-swiperProductSlider__categories .c-arrowButton.--left',
    }
});