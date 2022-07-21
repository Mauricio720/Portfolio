
const addContact=async (endpoint:string,body:FormData)=>{
    //@ts-ignore
    const res=await fetch(BASEAPI+endpoint,{
        method:'POST',
        body        
    });
    
    const json= await res.json();
}

let submitBtn=document.querySelector('#submit-btn') as HTMLInputElement;

submitBtn.addEventListener('click',(event)=>{
    event.preventDefault();
    let formBudget=document.querySelector('.form-budget') as HTMLFormElement;
    let formData=new FormData(formBudget);

    //addContact('add_client',formData);
    let alert=document.querySelector('.alert') as HTMLElement;
    alert.classList.remove('d-none');
    clearInputsForm();
})

function clearInputsForm(){
    let formBudget=document.querySelector('.form-budget') as HTMLFormElement;
    let inputs=[...formBudget.querySelectorAll('input[type=text]')] as HTMLInputElement[];

    inputs.forEach((inputItem)=>{
        inputItem.value="";
    });

    let textarea=formBudget.querySelector('textarea') as HTMLTextAreaElement;
    textarea.innerHTML="";
}