"use strict";
const addContact = async (endpoint, body) => {
    //@ts-ignore
    const res = await fetch(BASEAPI + endpoint, {
        method: 'POST',
        body
    });
    const json = await res.json();
};
let submitBtn = document.querySelector('#submit-btn');
submitBtn.addEventListener('click', (event) => {
    event.preventDefault();
    let formBudget = document.querySelector('.form-budget');
    let formData = new FormData(formBudget);
    //addContact('add_client',formData);
    let alert = document.querySelector('.alert');
    alert.classList.remove('d-none');
    clearInputsForm();
});
function clearInputsForm() {
    let formBudget = document.querySelector('.form-budget');
    let inputs = [...formBudget.querySelectorAll('input[type=text]')];
    inputs.forEach((inputItem) => {
        inputItem.value = "";
    });
    let textarea = formBudget.querySelector('textarea');
    textarea.innerHTML = "";
}
