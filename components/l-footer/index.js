$('.l-footer__menu .c-defaultContentStyle').on('click', function (e) {
    e.preventDefault();
    $('.c-siteMap__item').removeClass('is-active');
    $(this).closest('.c-siteMap__item').addClass('is-active');
})