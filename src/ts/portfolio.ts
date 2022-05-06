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