let menus=[...document.querySelectorAll('.menu__item')] as HTMLElement[];
let menuBtn=document.querySelector('#menu__mobile') as HTMLElement;
let menuClose=document.querySelector('#closeMenu') as HTMLElement;
var isOpen:boolean=false;

menuBtn.addEventListener('click',()=>{
    openCloseMenu();
});

menuClose.addEventListener('click',()=>{
    openCloseMenu();
});

function openCloseMenu() {
    let menuContainer=document.querySelector('.menuMobile__container') as HTMLElement; 
    
    if(!isOpen){
        menuContainer.style.display='flex';
        setTimeout(()=>{
            menuContainer.style.opacity="1";
        },500);

        isOpen=true;
    }else{
        menuContainer.style.opacity="0";
        setTimeout(()=>{
            menuContainer.style.display="none";
        },500);

        isOpen=false;
    }
}

initMenus();

function initMenus(){
    menus.forEach((menu)=>{
        menu.addEventListener('click',()=>{
            selectedMenu(menu);
        });
    })
}

function selectedMenu(menu:HTMLElement) {
    clearMenuSelected(); 
    menu.classList.add('menu__selected');
    let menuDescription=menu.querySelector('li') as HTMLElement;
    menuDescription.classList.add('menu__selected');
}

function clearMenuSelected() {
    menus.forEach((menu)=>{
        menu.classList.remove('menu__selected');
        let menuDescription=menu.querySelector('li') as HTMLElement;
        menuDescription.classList.remove('menu__selected');
    })   
}


