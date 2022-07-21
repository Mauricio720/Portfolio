"use strict";
var links = [...document.querySelectorAll('.menu a')];
var linksMenu = [...document.querySelectorAll('.menuMobile__container a')];
document.addEventListener('scroll', () => {
    scrollMenu();
});
const addAccess = async (endpoint) => {
    //@ts-ignore
    const res = await fetch(BASEAPI + endpoint, {
        method: 'POST',
    });
    const json = await res.json();
};
addAccess('add_access');
function scrollMenu() {
    let scrollY = window.scrollY;
    links.forEach((link, index) => {
        let href = link.getAttribute('href');
        let linkMenu = document.querySelector(href);
        let posSection = linkMenu.offsetTop;
        let heightSection = linkMenu.offsetHeight;
        if (posSection <= scrollY && (posSection + heightSection) > scrollY) {
            selectedMenu(link);
            selectedMenu(linksMenu[index]);
        }
        else {
            removeSelectedMenu(link);
            removeSelectedMenu(linksMenu[index]);
        }
    });
}
function removeSelectedMenu(itemMenu) {
    itemMenu.classList.remove('menu__selected');
    let menuDescription = itemMenu.querySelector('li');
    menuDescription.classList.remove('menu__selected');
}
function selectedMenu(menu) {
    menu.classList.add('menu__selected');
    let menuDescription = menu.querySelector('li');
    menuDescription.classList.add('menu__selected');
}
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
