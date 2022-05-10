var links=[...document.querySelectorAll('.menu a')] as HTMLElement[];
var linksMenu=[...document.querySelectorAll('.menuMobile__container a')] as HTMLElement[];

document.addEventListener('scroll',()=>{
    scrollMenu();
})

function scrollMenu(){
    let scrollY=window.scrollY;
    
    links.forEach((link,index)=>{
        let href=link.getAttribute('href') as string;
        let linkMenu=document.querySelector(href) as HTMLElement;
        
        let posSection=linkMenu.offsetTop;
        let heightSection=linkMenu.offsetHeight;
        
        if(posSection <= scrollY && (posSection + heightSection) > scrollY){
            selectedMenu(link);
            selectedMenu(linksMenu[index]);
        }else{
            removeSelectedMenu(link);
            removeSelectedMenu(linksMenu[index]);
        }
    })
}

function removeSelectedMenu(itemMenu:HTMLElement){
    itemMenu.classList.remove('menu__selected');
    let menuDescription=itemMenu.querySelector('li') as HTMLElement;
    menuDescription.classList.remove('menu__selected');

}

function selectedMenu(menu:HTMLElement) {
    menu.classList.add('menu__selected');
    let menuDescription=menu.querySelector('li') as HTMLElement;
    menuDescription.classList.add('menu__selected');
}

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



