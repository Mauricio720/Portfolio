"use strict";
let cardsPortfolio = [...document.querySelectorAll('.portfolio__card')];
initPortfolio();
function initPortfolio() {
    cardsPortfolio.forEach((card) => {
        let portfolioBtnPrev = card.querySelector('.portfolioBtn-prev');
        let portfolioBtnNext = card.querySelector('.portfolioBtn-next');
        portfolioBtnPrev.addEventListener('click', () => {
            prevBtnAction(card);
        });
        portfolioBtnNext.addEventListener('click', () => {
            nextBtnAction(card);
        });
    });
}
function prevBtnAction(card) {
    let image = card.querySelector('.portfolio__img');
    let widthImage = image.clientWidth;
    let containerImage = card.querySelector('.portfolio__img--subcontainer');
    let marginLeft = parseFloat(getComputedStyle(containerImage).marginLeft);
    if (marginLeft < 0) {
        containerImage.style.marginLeft = `${marginLeft + widthImage}px`;
    }
}
function nextBtnAction(card) {
    let image = card.querySelector('.portfolio__img');
    let widthImage = image.clientWidth;
    let containerImage = card.querySelector('.portfolio__img--subcontainer');
    let totalImages = card.querySelectorAll('.portfolio__img').length;
    let totalWidth = -(widthImage * totalImages);
    let marginLeft = parseFloat(getComputedStyle(containerImage).marginLeft);
    if (marginLeft > (totalWidth + widthImage)) {
        containerImage.style.marginLeft = `${marginLeft - widthImage}px`;
    }
}
var selectedTarget = "";
var selectedPicture = 0;
cardsPortfolio.forEach((card) => {
    let subcontainer = card.querySelector('.portfolio__img--subcontainer');
    let portfolioImg = [...subcontainer.querySelectorAll('.portfolio__img')];
    portfolioImg.forEach((picture, index) => {
        picture.addEventListener('click', (e) => {
            let pictureElement = e.currentTarget;
            let target = pictureElement.getAttribute('target');
            selectedTarget = target;
            selectedPicture = index;
            let pictures = getPictures(target);
            fillModalPictures(pictures);
        });
    });
});
function getPictures(target) {
    let index = data.findIndex((item) => {
        if (item.target === target) {
            return true;
        }
    });
    return data[index].pictures;
}
function fillModalPictures(pictures) {
    var _a;
    let modal = document.querySelector('#modalProject');
    let pictureItem = (_a = modal.querySelector('.carousel-item')) === null || _a === void 0 ? void 0 : _a.cloneNode(true);
    pictureItem.classList.remove('active');
    let modalCarouselInner = modal.querySelector('.carousel-inner');
    modalCarouselInner.innerHTML = "";
    pictures.map((picture, index) => {
        let pictureClone = pictureItem.cloneNode(true);
        if (index === 0) {
            pictureClone.classList.add('active');
        }
        let pictureCloneImg = pictureClone.querySelector('img');
        if (picture.isMobile) {
            pictureCloneImg.classList.remove('w-100');
            pictureCloneImg.classList.add('w-25');
        }
        else {
            pictureCloneImg.classList.add('w-100');
            pictureCloneImg.classList.remove('w-25');
        }
        if (selectedPicture !== 0) {
            if (index === selectedPicture) {
                pictureClone.classList.add('active');
            }
            else {
                pictureClone.classList.remove('active');
            }
        }
        pictureCloneImg.setAttribute('src', picture.src);
        modalCarouselInner.append(pictureClone);
    });
}
