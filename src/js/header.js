"use strict";
let menus = [...document.querySelectorAll('.menu__item')];
let menuBtn = document.querySelector('#menu__mobile');
let menuClose = document.querySelector('#closeMenu');
var isOpen = false;
menuBtn.addEventListener('click', () => {
    openCloseMenu();
});
menuClose.addEventListener('click', () => {
    openCloseMenu();
});
function openCloseMenu() {
    let menuContainer = document.querySelector('.menuMobile__container');
    if (!isOpen) {
        menuContainer.style.display = 'flex';
        setTimeout(() => {
            menuContainer.style.opacity = "1";
        }, 500);
        isOpen = true;
    }
    else {
        menuContainer.style.opacity = "0";
        setTimeout(() => {
            menuContainer.style.display = "none";
        }, 500);
        isOpen = false;
    }
}
initMenus();
function initMenus() {
    menus.forEach((menu) => {
        menu.addEventListener('click', () => {
            selectedMenu(menu);
        });
    });
}
function selectedMenu(menu) {
    clearMenuSelected();
    menu.classList.add('menu__selected');
    let menuDescription = menu.querySelector('li');
    menuDescription.classList.add('menu__selected');
}
function clearMenuSelected() {
    menus.forEach((menu) => {
        menu.classList.remove('menu__selected');
        let menuDescription = menu.querySelector('li');
        menuDescription.classList.remove('menu__selected');
    });
}
