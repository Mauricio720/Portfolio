"use strict";
var _a;
var portfolioArray = setPorfolioArray();
var pictureItem = (_a = document.querySelector('.carousel-item')) === null || _a === void 0 ? void 0 : _a.cloneNode(true);
var carouselInner = document.querySelector('.carousel-inner');
init();
const addProjectInterestInPage = async (endpoint, projectName, category) => {
    let formData = new FormData();
    formData.append('project_name', projectName);
    formData.append('category', category);
    //@ts-ignore
    const res = await fetch(BASEAPI + endpoint, {
        method: 'POST',
        body: formData
    });
    const json = await res.json();
};
addProjectInterestInPage('add_project', portfolioArray.projectName, portfolioArray.category);
function init() {
    setTitle();
    setPicturesInCarrousel();
    setDescription();
    setTecnologies();
    setGitItems();
}
function setPorfolioArray() {
    let index = data.findIndex((item) => {
        //@ts-ignore
        if (item.target === TARGET_URL) {
            return true;
        }
    });
    if (index === -1) {
        window.location.href = "/";
    }
    return data[index];
}
function setTitle() {
    let titleElement = document.querySelector('.title');
    titleElement.innerHTML = portfolioArray.title;
}
function setPicturesInCarrousel() {
    carouselInner.innerHTML = "";
    portfolioArray.pictures.forEach((picture, index) => {
        fillCarouselPictures(picture, index);
    });
}
function fillCarouselPictures(picture, index) {
    pictureItem.classList.remove('active');
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
    pictureCloneImg.setAttribute('src', picture.src);
    carouselInner.append(pictureClone);
}
function setDescription() {
    let descriptionElement = document.querySelector('.description');
    descriptionElement.innerHTML = portfolioArray.description;
}
function setTecnologies() {
    let tecnologiesContainer = document.querySelector('.tecnology__container--project');
    let tecnologieItem = tecnologiesContainer.querySelector('.tecnology__item');
    tecnologiesContainer.innerHTML = "";
    portfolioArray.tecnologies.map((tec) => {
        let tecnologieItemElement = tecnologieItem.cloneNode(true);
        let img = tecnologieItemElement.querySelector('img');
        img.setAttribute('src', tec.icon);
        img.setAttribute('alt', tec.alt);
        let tecnologyDescription = tecnologieItemElement.querySelector('.tecnology__description');
        tecnologyDescription.innerHTML = tec.title;
        tecnologiesContainer.append(tecnologieItemElement);
    });
}
function setGitItems() {
    let githubContainer = document.querySelector('.content__github');
    let githubItem = githubContainer.querySelector('.github__item');
    githubContainer.innerHTML = "";
    portfolioArray.github.map((git) => {
        let githubItemElement = githubItem.cloneNode(true);
        githubItemElement.setAttribute('href', git.url);
        let description = githubItemElement.querySelector('span');
        description.innerHTML = git.title;
        githubContainer.append(githubItemElement);
    });
}
