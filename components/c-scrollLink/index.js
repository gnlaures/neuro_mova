$('.c-scrollLink').on('click', function(e) {
    e.preventDefault();
    const elScrollDestiny = $(this).attr('href')
    goToSection__scroll(elScrollDestiny, 86, 86, 500, 10)
})