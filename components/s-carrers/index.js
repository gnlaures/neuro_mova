// toggle job
$('.c-cardOpenJob__head').on('click', function() {
    $(this).closest('.c-cardOpenJob').toggleClass('is-active');
})

// select job
const listSelectedJobs = $('.c-cardOpenJob__selectedJobList');
const btnToAddJobInList = $('.js-c-cardOpenJob__addToApplyList');

btnToAddJobInList.on('click', function () {
    $('.c-field.--jobs').removeClass('u-dnone');
    $(this).closest('.c-cardOpenJob').addClass('is-added');
    $(this).find('.c-btn__caption').html('Selecionado');
    const thisCode = $(this).closest('.c-cardOpenJob').attr('data-job-id');
    const thisTitle = $(this).closest('.c-cardOpenJob').find('.c-cardOpenJob__title').find('h4').html();
    listSelectedJobs.append('<li><p>' + thisTitle + ' - ' + thisCode + '</p><span class="js-removeSelectedJob"' + ' data-job-id="'+thisCode+'"></span></li>');

    goToSection__scroll('.s-carrers__form', 150, 150, 300, 10)
});

$(document).on('click', '.js-removeSelectedJob', function() {
    const thisCode = $(this).attr('data-job-id');
    const qtfList = listSelectedJobs.children('li').length;

    // active btn
    $('.c-cardOpenJob[data-job-id="' + thisCode + '"]')
        .removeClass('is-added')
        .find('.c-cardOpenJob__infos')
        .find('.c-btn__caption')
        .html('Inscreva-se');

    // remove li
    $(this).closest('li').remove();
    if (qtfList === 1) {
        $('.c-field.--jobs').addClass('u-dnone');
    }
})