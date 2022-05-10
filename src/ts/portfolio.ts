let cardsPortfolio=[...document.querySelectorAll('.portfolio__card')] as HTMLElement[];

initPortfolio();

function initPortfolio(){
    cardsPortfolio.forEach((card)=>{
        let portfolioBtnPrev=card.querySelector('.portfolioBtn-prev') as HTMLElement;
        let portfolioBtnNext=card.querySelector('.portfolioBtn-next') as HTMLElement;
        
        portfolioBtnPrev.addEventListener('click',()=>{
            prevBtnAction(card);
        });
    
        portfolioBtnNext.addEventListener('click',()=>{
            nextBtnAction(card);
        });
    })
}

function prevBtnAction(card:HTMLElement){
    let image=card.querySelector('.portfolio__img') as HTMLElement;
    let widthImage:number=image.clientWidth;
    let containerImage=card.querySelector('.portfolio__img--subcontainer') as HTMLElement;
    let marginLeft=parseFloat(getComputedStyle(containerImage).marginLeft);
    
    if(marginLeft<0){
        containerImage.style.marginLeft=`${marginLeft+widthImage}px`;
    }
}

function nextBtnAction(card:HTMLElement){
    let image=card.querySelector('.portfolio__img') as HTMLElement;
    let widthImage:number=image.clientWidth;
    let containerImage=card.querySelector('.portfolio__img--subcontainer') as HTMLElement;
    let totalImages:number=card.querySelectorAll('.portfolio__img').length;
    let totalWidth:number=-(widthImage*totalImages);
    let marginLeft=parseFloat(getComputedStyle(containerImage).marginLeft);
    
    if(marginLeft > (totalWidth+widthImage)){
        containerImage.style.marginLeft=`${marginLeft-widthImage}px`;
    }
}

var selectedTarget : string="";
var selectedPicture : number=0;

cardsPortfolio.forEach((card)=>{
    let subcontainer=card.querySelector('.portfolio__img--subcontainer') as HTMLElement;
    let portfolioImg=[...subcontainer.querySelectorAll('.portfolio__img')]
    portfolioImg.forEach((picture,index)=>{
        picture.addEventListener('click',(e)=>{
            let pictureElement=e.currentTarget as HTMLElement;
            let target:string=pictureElement.getAttribute('target') as string;
            selectedTarget=target;
            selectedPicture=index;
            let pictures=getPictures(target);
            fillModalPictures(pictures);
        })
    })
});


function getPictures(target:string){
    let index=data.findIndex((item)=>{
        if(item.target===target){
            return true;
        }
    });
    
    return data[index].pictures;
}

function fillModalPictures(pictures:Pictures[]){
    let modal=document.querySelector('#modalProject') as HTMLElement;
    let pictureItem=modal.querySelector('.carousel-item')?.cloneNode(true) as HTMLElement;
    pictureItem.classList.remove('active');
    let modalCarouselInner=modal.querySelector('.carousel-inner') as HTMLElement;
    modalCarouselInner.innerHTML="";
    
    pictures.map((picture,index)=>{
        let pictureClone=pictureItem.cloneNode(true) as HTMLElement;
        if(index===0){
            pictureClone.classList.add('active');
        }
        let pictureCloneImg=pictureClone.querySelector('img') as HTMLElement;
        if(picture.isMobile){
            pictureCloneImg.classList.remove('w-100');
            pictureCloneImg.classList.add('w-25');
        }else{
            pictureCloneImg.classList.add('w-100');
            pictureCloneImg.classList.remove('w-25');
        }

        if(selectedPicture !== 0){
            if(index===selectedPicture){
                pictureClone.classList.add('active');
            }else{
                pictureClone.classList.remove('active');
            }
        }
        pictureCloneImg.setAttribute('src',picture.src);
        modalCarouselInner.append(pictureClone);
    })
}