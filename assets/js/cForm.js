const cForm = document.querySelectorAll('.cForm');
const cForm__selects = document.querySelectorAll('.cForm select');

// feedbacks
function cForm__submit(e) {
    e.preventDefault();
}
function cForm__selectPlaceholderColor(select) {
    if (select.value.toLowerCase() === 'selecione') {
        select.closest('.cField').classList.add('is-placeholder-option-selected')
        select.closest('.cField').classList.remove('isnt-placeholder-option-selected')
    } else {
        select.closest('.cField').classList.add('isnt-placeholder-option-selected')
        select.closest('.cField').classList.remove('is-placeholder-option-selected')
    }
}

cForm.forEach((form) => {
   form.addEventListener('submit', cForm__submit);
});

// select
cForm__selects.forEach((select) => {
    select.addEventListener('focusin', () => {
        select.closest('.cField').classList.add('is-focus')
        cForm__selectPlaceholderColor(select)
    })
    select.addEventListener('change', () => {
        select.closest('.cField').classList.remove('is-focus')
        cForm__selectPlaceholderColor(select)
    })
    select.addEventListener('focusout', () => {
        select.closest('.cField').classList.remove('is-focus')
        cForm__selectPlaceholderColor(select)
    })
});