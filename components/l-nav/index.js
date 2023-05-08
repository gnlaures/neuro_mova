const lNav = document.querySelector('.l-nav');

// Initial state
let lNavScrollInitPosition = 0;

// adding scroll event
function scrollEffect() {
    if ((document.body.getBoundingClientRect()).top === 0) {
        lNav.classList.remove('--scrolledDown');
        lNav.classList.remove('--scrolledUp');
    } else if ((document.body.getBoundingClientRect()).top > lNavScrollInitPosition) {
        //console.log('up')
        lNav.classList.add('--scrolledUp');
        lNav.classList.add('--scrolled');
        lNav.classList.remove('--scrolledDown');
    } else {
        //console.log('down')
        lNav.classList.remove('--scrolledUp');
        lNav.classList.add('--scrolledDown');
        lNav.classList.add('--scrolled');
    }
    // saves the new position for iteration.
    lNavScrollInitPosition = (document.body.getBoundingClientRect()).top;
}
$(window).on('scroll', function() {scrollEffect()})
$(window).on('load', function() {scrollEffect()})