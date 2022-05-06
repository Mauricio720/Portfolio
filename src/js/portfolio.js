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
