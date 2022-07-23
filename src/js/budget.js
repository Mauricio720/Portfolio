"use strict";
const addContact = async (endpoint, body) => {
    //@ts-ignore
    const res = await fetch(BASEAPI + endpoint, {
        method: 'POST',
        body
    });
    const json = await res.json();
    if (json.error === "") {
        let alert = document.querySelector('.alert-success');
        alert.classList.remove('d-none');
        clearInputsForm();
    }
    else {
        let alert = document.querySelector('.alert-danger');
        alert.classList.remove('d-none');
        alert.innerHTML = json.error;
    }
};
let submitBtn = document.querySelector('#submit-btn');
submitBtn.addEventListener('click', (event) => {
    event.preventDefault();
    let formBudget = document.querySelector('.form-budget');
    let formData = new FormData(formBudget);
    addContact('add_client', formData);
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
