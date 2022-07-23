
const addContact=async (endpoint:string,body:FormData)=>{
    //@ts-ignore
    const res=await fetch(BASEAPI+endpoint,{
        method:'POST',
        body        
    });
    
    const json= await res.json();
    if(json.error===""){
        let alert=document.querySelector('.alert-success') as HTMLElement;
        alert.classList.remove('d-none');
        clearInputsForm();
    }else{
        let alert=document.querySelector('.alert-danger') as HTMLElement;
        alert.classList.remove('d-none');
        alert.innerHTML=json.error;
    }
}

let submitBtn=document.querySelector('#submit-btn') as HTMLInputElement;

submitBtn.addEventListener('click',(event)=>{
    event.preventDefault();
    let formBudget=document.querySelector('.form-budget') as HTMLFormElement;
    let formData=new FormData(formBudget);

    addContact('add_client',formData);
    
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