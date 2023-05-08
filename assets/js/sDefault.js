const sDefault = document.querySelectorAll('.sDefault');

sDefault.forEach((section) => {
    section.querySelector('.sDefault__head').addEventListener('click', function() {
        section.classList.toggle('is-active')
    });
});