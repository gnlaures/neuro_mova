$('.c-toggleItem__head').on('click', function (e) {
    e.preventDefault();
    $(this).closest('.c-toggleItem').toggleClass('is-active');
})