if ($('.s-productGrid')) {
    $(window).on('load', function() {
        let viewportW = $(window).width();
        if (viewportW <= 920) {
            $('.c-productsAside .c-toggleItem').removeClass('is-active')
        }
    })
}