<?php
    $url="";
    
    if($_GET){
        $url=explode('/',$_GET['url']);
        require_once("project_page.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style.min.css">
    <title>Portifolio Mauricio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <header>
        <nav>
            <ul class="menu">
                <a class="menu__item menu__selected" href="#banner">
                    <li class="menu__selected">Home</li>
                </a>

                <a class="menu__item" href="#about">
                    <li>Sobre Mim</li>
                </a>

                <a class="menu__item" href="#portfolio">
                    <li>Portfólio</li>
                </a>
            </ul>

            <div class="menuMobile__container">
                <button class="closeMenu" id="closeMenu">X</button>
                <ul class="menu--container">
                    <a class="menu__item menu__selected" href="#banner">
                        <li class="menu__selected">Home</li>
                    </a>
    
                    <a class="menu__item" href="#about">
                        <li>Sobre Mim</li>
                    </a>
    
                    <a class="menu__item" href="#portfolio">
                        <li>Portfólio</li>
                    </a>
                </ul>
            </div>

            <div class="menu__mobile" id="menu__mobile">
                <div class="menu__mobile__line"></div>
                <div class="menu__mobile__line"></div>
                <div class="menu__mobile__line"></div>
            </div>
        </nav>
    </header>

    <section id="banner" class="banner">
        <h5 class="banner__title">Olá, meu nome é Mauricio.</h5>
        <h6 class="banner__subtitle">Desenvolvedor Full Stack Web/Mobile</h6>
    </section>
    <div class="banner__shadow"></div>

    <section id="about" class="about">
        <h1 class="title">Sobre Mim</h1>
        <div class="about__container">
            <div class="about__slot about__slot__description">
                <p>
                Sou um desenvolvedor web com capacidade para programar no front-end e no back-end e 
                atualmente desenvolvo também aplicativos. Sempre estou com grande interesse em aprender 
                mais tecnologias e aperfeiçoar as que já domino. Esse site tem o objetivo de mostrar meus
                trabalhos e nisso mostrar minha capacidade para trabalhar nas possiveis oportunidade.
                </p>

                <div class="tecnology__title">Tecnologias Dominadas</div>
                <div class="tecnology__container">
                    <div class="tecnology__item">
                        <img align="center" alt="Mauri-HTML" height="30" width="30" src="https://raw.githubusercontent.com/devicons/devicon/master/icons/html5/html5-original.svg">
                        <div class="tecnology__description">HTML</div>
                    </div>
    
                    <div class="tecnology__item">
                        <img align="center" alt="Mauri-CSS" height="30" width="30" src="https://raw.githubusercontent.com/devicons/devicon/master/icons/css3/css3-original.svg">
                        <div class="tecnology__description">CSS</div>
                    </div>
    
                    <div class="tecnology__item">
                        <img align="center" alt="Mauri-Js" height="30" width="30" src="https://raw.githubusercontent.com/devicons/devicon/master/icons/javascript/javascript-plain.svg">
                        <div class="tecnology__description">Javascript</div>
                    </div>
                    
                    <div class="tecnology__item">
                        <img align="center" alt="Mauri-Ts" height="30" width="30" src="https://raw.githubusercontent.com/devicons/devicon/master/icons/typescript/typescript-plain.svg">
                        <div class="tecnology__description">Typescript</div>
                    </div>

                    <div class="tecnology__item">
                        <img align="center" alt="Mauri-JQuery" height="20" width="20" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/jquery/jquery-original.svg">
                        <div class="tecnology__description">JQuery</div>
                    </div>
                    
                    <div class="tecnology__item">
                        <img align="center" alt="Mauri-Bootstrap" height="30" width="30" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bootstrap/bootstrap-original.svg">
                        <div class="tecnology__description">Bootstrap</div>
                    </div>
                    
                    <div class="tecnology__item">
                        <img align="center" alt="Mauri-React" height="30" width="40" src="https://raw.githubusercontent.com/devicons/devicon/master/icons/react/react-original.svg">
                        <div class="tecnology__description">React</div>
                    </div>
                    
                    <div class="tecnology__item">
                        <img align="center" alt="Mauri-React" height="30" width="40" src="https://raw.githubusercontent.com/devicons/devicon/master/icons/react/react-original.svg">
                        <div class="tecnology__description">React Native</div>
                    </div>

                    <div class="tecnology__item">
                        <img align="center" alt="Mauri-PHP" height="30" width="40" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" />
                        <div class="tecnology__description">Php</div>
                    </div>
    
                    <div class="tecnology__item">
                        <img align="center" alt="Mauri-Laravel" height="30" width="40" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-plain.svg" />
                        <div class="tecnology__description">Laravel</div>
                    </div>
                    
                    <div class="tecnology__item">
                        <img align="center" alt="Mauri-NodeJs" height="30" width="40" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nodejs/nodejs-original.svg" />
                        <div class="tecnology__description">Node.Js</div>
                    </div>
                </div>
            </div>

            <div class="about__slot">
                <div class="my_picure">
                    <img src="public/images/minha_foto.jpeg" alt="Mauricio.jpg" width="100%">
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="modalProject" tabindex="-1" aria-labelledby="modalProject" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="carrousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active w-100">
                            <center>
                                <img src="public/images/imobiliaria/imobiliaria2.jpeg" class="d-block w-100" alt="...">
                            </center>
                        </div>
                        </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carrousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" style="background-color: black;" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carrousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon" style="background-color: black;" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                </div>
            </div>
        </div>
    </div>

   <section class="portfolio" id="portfolio">
        <h1 class="title">Portfólio</h1>
        <div class="portfolio__container">
           <div class="portfolio__card">
                <div class="portfolio__img--container">
                    <div class="portfolio__img--subcontainer">
                        <div class="portfolio-btn portfolioBtn-prev">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" class="react-icons"  width="100%" xmlns="http://www.w3.org/2000/svg" style="color: #ccc;"><path d="M872 474H286.9l350.2-304c5.6-4.9 2.2-14-5.2-14h-88.5c-3.9 0-7.6 1.4-10.5 3.9L155 487.8a31.96 31.96 0 0 0 0 48.3L535.1 866c1.5 1.3 3.3 2 5.2 2h91.5c7.4 0 10.8-9.2 5.2-14L286.9 550H872c4.4 0 8-3.6 8-8v-60c0-4.4-3.6-8-8-8z"></path></svg>
                        </div>
                        <div class="portfolio__img" target="fotografia" data-bs-toggle="modal" data-bs-target="#modalProject">
                            <img src="public/images/site_fotografia/fotografia.jpeg" width="95%">
                        </div>

                        <div class="portfolio__img" target="fotografia" data-bs-toggle="modal" data-bs-target="#modalProject">
                            <img src="public/images/site_fotografia/fotografia2.jpeg" width="95%">
                        </div>

                        <div class="portfolio__img" target="fotografia" data-bs-toggle="modal" data-bs-target="#modalProject">
                            <img src="public/images/site_fotografia/fotografia3.jpeg" width="95%">
                        </div>

                        <div class="portfolio-btn portfolioBtn-next">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" class="react-icons" width="100%" xmlns="http://www.w3.org/2000/svg" style="color: #ccc;"><path d="M869 487.8L491.2 159.9c-2.9-2.5-6.6-3.9-10.5-3.9h-88.5c-7.4 0-10.8 9.2-5.2 14l350.2 304H152c-4.4 0-8 3.6-8 8v60c0 4.4 3.6 8 8 8h585.1L386.9 854c-5.6 4.9-2.2 14 5.2 14h91.5c1.9 0 3.8-.7 5.2-2L869 536.2a32.07 32.07 0 0 0 0-48.4z"></path></svg>
                        </div>
                    </div>
                </div>

                <div class="portfolio__title">Galeria de fotos e CMS</div>
                <div class="portfolioTecnology__container">
                    <div class="portfolioTecnology__item">
                        <img align="center" alt="Mauri-HTML" height="20" width="20" src="https://raw.githubusercontent.com/devicons/devicon/master/icons/html5/html5-original.svg">
                        <div class="portfolioTecnology__description">HTML</div>
                    </div>

                    <div class="portfolioTecnology__item">
                        <img align="center" alt="Mauri-CSS" height="20" width="20" src="https://raw.githubusercontent.com/devicons/devicon/master/icons/css3/css3-original.svg">
                        <div class="portfolioTecnology__description">CSS</div>
                    </div>

                    <div class="portfolioTecnology__item">
                        <img align="center" alt="Mauri-JQuery" height="20" width="20" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/jquery/jquery-original.svg">
                        <div class="portfolioTecnology__description">JQuery</div>
                    </div>
                    
                    <div class="portfolioTecnology__item">
                        <img align="center" alt="Mauri-Laravel" height="15" width="15" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-plain.svg" />
                        <div class="portfolioTecnology__description">Laravel</div>
                    </div>

                    <div class="portfolioTecnology__item">
                        <img align="center" alt="Mauri-PHP" height="25" width="25" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" />
                        <div class="portfolioTecnology__description">PHP</div>
                    </div>
                </div>

                <div class="portfolio__footer">
                    <a href="fotografia" target="_blank" class="portfolio__footer__item">
                        <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="react-icons" height="25px" width="25px" xmlns="http://www.w3.org/2000/svg" style="color: rgb(156, 152, 166);"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                        <span>Ver Detalhes</span>
                    </a>
                </div>
            </div>

            <div class="portfolio__card">
                <div class="portfolio__img--container">
                    <div class="portfolio__img--subcontainer">
                        <div class="portfolio-btn portfolioBtn-prev">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" class="react-icons"  width="100%" xmlns="http://www.w3.org/2000/svg" style="color: #ccc;"><path d="M872 474H286.9l350.2-304c5.6-4.9 2.2-14-5.2-14h-88.5c-3.9 0-7.6 1.4-10.5 3.9L155 487.8a31.96 31.96 0 0 0 0 48.3L535.1 866c1.5 1.3 3.3 2 5.2 2h91.5c7.4 0 10.8-9.2 5.2-14L286.9 550H872c4.4 0 8-3.6 8-8v-60c0-4.4-3.6-8-8-8z"></path></svg>
                        </div>
                        
                        <div class="portfolio__img" target="imobiliaria" data-bs-toggle="modal" data-bs-target="#modalProject">
                            <img src="public/images/imobiliaria/imobiliaria2.jpeg" width="95%">
                        </div>

                        <div class="portfolio__img" target="imobiliaria" data-bs-toggle="modal" data-bs-target="#modalProject">
                            <img src="public/images/imobiliaria/imobiliaria3.jpeg" width="95%">
                        </div>

                        <div class="portfolio__img" target="imobiliaria" data-bs-toggle="modal" data-bs-target="#modalProject">
                            <img src="public/images/imobiliaria/imobiliaria4.jpeg" width="95%">
                        </div>

                        <div class="portfolio__img" target="imobiliaria" data-bs-toggle="modal" data-bs-target="#modalProject">
                            <img src="public/images/imobiliaria/imobiliaria5.jpeg" width="95%">
                        </div>

                        <div class="portfolio-btn portfolioBtn-next">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" class="react-icons" width="100%" xmlns="http://www.w3.org/2000/svg" style="color: #ccc;"><path d="M869 487.8L491.2 159.9c-2.9-2.5-6.6-3.9-10.5-3.9h-88.5c-7.4 0-10.8 9.2-5.2 14l350.2 304H152c-4.4 0-8 3.6-8 8v60c0 4.4 3.6 8 8 8h585.1L386.9 854c-5.6 4.9-2.2 14 5.2 14h91.5c1.9 0 3.8-.7 5.2-2L869 536.2a32.07 32.07 0 0 0 0-48.4z"></path></svg>
                        </div>
                    </div>
                </div>

                <div class="portfolio__title">Sistema Imobiliaria</div>
                <div class="portfolioTecnology__container">
                    <div class="portfolioTecnology__item">
                        <img align="center" alt="Mauri-HTML" height="20" width="20" src="https://raw.githubusercontent.com/devicons/devicon/master/icons/html5/html5-original.svg">
                        <div class="portfolioTecnology__description">HTML</div>
                    </div>

                    <div class="portfolioTecnology__item">
                        <img align="center" alt="Mauri-CSS" height="20" width="20" src="https://raw.githubusercontent.com/devicons/devicon/master/icons/css3/css3-original.svg">
                        <div class="portfolioTecnology__description">CSS</div>
                    </div>

                    <div class="portfolioTecnology__item">
                        <img align="center" alt="Mauri-JQuery" height="20" width="20" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/jquery/jquery-original.svg">
                        <div class="portfolioTecnology__description">JQuery</div>
                    </div>
                    
                    <div class="portfolioTecnology__item">
                        <img align="center" alt="Mauri-Laravel" height="15" width="15" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-plain.svg" />
                        <div class="portfolioTecnology__description">Laravel</div>
                    </div>

                    <div class="portfolioTecnology__item">
                        <img align="center" alt="Mauri-PHP" height="25" width="25" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" />
                        <div class="portfolioTecnology__description">PHP</div>
                    </div>
                </div>
                
                <div class="portfolio__footer">
                    <a href="imobiliaria" target="_blank" class="portfolio__footer__item">
                        <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="react-icons" height="25px" width="25px" xmlns="http://www.w3.org/2000/svg" style="color: rgb(156, 152, 166);"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                        <span>Ver Detalhes</span>
                    </a>
                </div>
            </div>

            <div class="portfolio__card">
                <div class="portfolio__img--container">
                    <div class="portfolio__img--subcontainer">
                        <div class="portfolio-btn portfolioBtn-prev">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" class="react-icons"  width="100%" xmlns="http://www.w3.org/2000/svg" style="color: #ccc;"><path d="M872 474H286.9l350.2-304c5.6-4.9 2.2-14-5.2-14h-88.5c-3.9 0-7.6 1.4-10.5 3.9L155 487.8a31.96 31.96 0 0 0 0 48.3L535.1 866c1.5 1.3 3.3 2 5.2 2h91.5c7.4 0 10.8-9.2 5.2-14L286.9 550H872c4.4 0 8-3.6 8-8v-60c0-4.4-3.6-8-8-8z"></path></svg>
                        </div>
                        
                        <div class="portfolio__img" target="tarefas" data-bs-toggle="modal" data-bs-target="#modalProject">
                            <img src="public/images/tarefas/tarefas.jpeg" width="95%">
                        </div>

                        <div class="portfolio__img" target="tarefas" data-bs-toggle="modal" data-bs-target="#modalProject">
                            <img src="public/images/tarefas/tarefas2.jpeg" width="95%">
                        </div>

                        <div class="portfolio__img" target="tarefas" data-bs-toggle="modal" data-bs-target="#modalProject">
                            <img src="public/images/tarefas/tarefas3.jpeg" width="95%">
                        </div>

                        <div class="portfolio__img" target="tarefas" data-bs-toggle="modal" data-bs-target="#modalProject">
                            <img src="public/images/tarefas/tarefas4.jpeg" width="100%">
                        </div>

                        <div class="portfolio__img" target="tarefas" data-bs-toggle="modal" data-bs-target="#modalProject">
                            <img src="public/images/tarefas/tarefas5.jpeg" width="95%">
                        </div>
                        
                        <div class="portfolio__img" target="tarefas" data-bs-toggle="modal" data-bs-target="#modalProject">
                            <img src="public/images/tarefas/tarefas6.jpeg" width="20%">
                        </div>

                        <div class="portfolio__img" target="tarefas" data-bs-toggle="modal" data-bs-target="#modalProject">
                            <img src="public/images/tarefas/tarefas7.jpeg" width="20%">
                        </div>

                        <div class="portfolio__img" target="tarefas" data-bs-toggle="modal" data-bs-target="#modalProject">
                            <img src="public/images/tarefas/tarefas8.jpeg" width="20%">
                        </div>

                        <div class="portfolio-btn portfolioBtn-next">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" class="react-icons" width="100%" xmlns="http://www.w3.org/2000/svg" style="color: #ccc;"><path d="M869 487.8L491.2 159.9c-2.9-2.5-6.6-3.9-10.5-3.9h-88.5c-7.4 0-10.8 9.2-5.2 14l350.2 304H152c-4.4 0-8 3.6-8 8v60c0 4.4 3.6 8 8 8h585.1L386.9 854c-5.6 4.9-2.2 14 5.2 14h91.5c1.9 0 3.8-.7 5.2-2L869 536.2a32.07 32.07 0 0 0 0-48.4z"></path></svg>
                        </div>
                    </div>
                </div>

                <div class="portfolio__title">Sistema de Tarefas</div>
                <div class="portfolioTecnology__container">
                    <div class="portfolioTecnology__item">
                        <img align="center" alt="Mauri-React" height="15" width="15" src="https://raw.githubusercontent.com/devicons/devicon/master/icons/react/react-original.svg">
                        <div class="portfolioTecnology__description">React</div>
                    </div>
                    
                    <div class="portfolioTecnology__item">
                        <img align="center" alt="Mauri-React" height="15" width="15" src="https://raw.githubusercontent.com/devicons/devicon/master/icons/react/react-original.svg">
                        <div class="portfolioTecnology__description">React Native</div>
                    </div>

                    <div class="portfolioTecnology__item">
                        <img align="center" alt="Mauri-Laravel" height="15" width="15" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-plain.svg" />
                        <div class="portfolioTecnology__description">Laravel</div>
                    </div>

                    <div class="portfolioTecnology__item">
                        <img align="center" alt="Mauri-PHP" height="25" width="25" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" />
                        <div class="portfolioTecnology__description">PHP</div>
                    </div>
                </div>
                
                <div class="portfolio__footer">
                    <a href="tarefas" target="_blank" class="portfolio__footer__item">
                        <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="react-icons" height="25px" width="25px" xmlns="http://www.w3.org/2000/svg" style="color: rgb(156, 152, 166);"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                        <span>Ver Detalhes</span>
                    </a>
                </div>
            </div>

            <div class="portfolio__card">
                <div class="portfolio__img--container">
                    <div class="portfolio__img--subcontainer">
                        <div class="portfolio-btn portfolioBtn-prev">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" class="react-icons"  width="100%" xmlns="http://www.w3.org/2000/svg" style="color: #ccc;"><path d="M872 474H286.9l350.2-304c5.6-4.9 2.2-14-5.2-14h-88.5c-3.9 0-7.6 1.4-10.5 3.9L155 487.8a31.96 31.96 0 0 0 0 48.3L535.1 866c1.5 1.3 3.3 2 5.2 2h91.5c7.4 0 10.8-9.2 5.2-14L286.9 550H872c4.4 0 8-3.6 8-8v-60c0-4.4-3.6-8-8-8z"></path></svg>
                        </div>
                       
                        <div class="portfolio__img" target="endoquiz" data-bs-toggle="modal" data-bs-target="#modalProject">
                            <img src="public/images/endoquiz/endoquiz3.jpeg" width="95%">
                        </div>

                        <div class="portfolio__img" target="endoquiz" data-bs-toggle="modal" data-bs-target="#modalProject">
                            <img src="public/images/endoquiz/endoquiz4.jpeg" width="95%">
                        </div>

                        <div class="portfolio__img" target="endoquiz" data-bs-toggle="modal" data-bs-target="#modalProject">
                            <img src="public/images/endoquiz/endoquiz5.jpeg" width="95%">
                        </div>

                        <div class="portfolio__img" target="endoquiz" data-bs-toggle="modal" data-bs-target="#modalProject">
                            <img src="public/images/endoquiz/endoquiz6.jpeg" width="95%">
                        </div>

                        <div class="portfolio-btn portfolioBtn-next">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" class="react-icons" width="100%" xmlns="http://www.w3.org/2000/svg" style="color: #ccc;"><path d="M869 487.8L491.2 159.9c-2.9-2.5-6.6-3.9-10.5-3.9h-88.5c-7.4 0-10.8 9.2-5.2 14l350.2 304H152c-4.4 0-8 3.6-8 8v60c0 4.4 3.6 8 8 8h585.1L386.9 854c-5.6 4.9-2.2 14 5.2 14h91.5c1.9 0 3.8-.7 5.2-2L869 536.2a32.07 32.07 0 0 0 0-48.4z"></path></svg>
                        </div>
                    </div>
                </div>

                <div class="portfolio__title">Endoquiz Api/Painel</div>
                <div class="portfolioTecnology__container">
                    <div class="portfolioTecnology__item">
                        <img align="center" alt="Mauri-HTML" height="20" width="20" src="https://raw.githubusercontent.com/devicons/devicon/master/icons/html5/html5-original.svg">
                        <div class="portfolioTecnology__description">HTML</div>
                    </div>

                    <div class="portfolioTecnology__item">
                        <img align="center" alt="Mauri-CSS" height="20" width="20" src="https://raw.githubusercontent.com/devicons/devicon/master/icons/css3/css3-original.svg">
                        <div class="portfolioTecnology__description">CSS</div>
                    </div>

                    <div class="portfolioTecnology__item">
                    <img align="center" alt="Mauri-Js" height="20" width="20" src="https://raw.githubusercontent.com/devicons/devicon/master/icons/javascript/javascript-plain.svg">
                        <div class="portfolioTecnology__description">Javascript</div>
                    </div>
                    
                    <div class="portfolioTecnology__item">
                        <img align="center" alt="Mauri-Laravel" height="15" width="15" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-plain.svg" />
                        <div class="portfolioTecnology__description">Laravel</div>
                    </div>

                    <div class="portfolioTecnology__item">
                        <img align="center" alt="Mauri-PHP" height="25" width="25" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" />
                        <div class="portfolioTecnology__description">PHP</div>
                    </div>
                </div>
                
                <div class="portfolio__footer">
                    <a href="endoquiz" target="_blank" class="portfolio__footer__item">
                        <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="react-icons" height="25px" width="25px" xmlns="http://www.w3.org/2000/svg" style="color: rgb(156, 152, 166);"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                        <span>Ver Detalhes</span>
                    </a>
                </div>
            </div>

            <div class="portfolio__card">
                <div class="portfolio__img--container">
                    <div class="portfolio__img--subcontainer">
                        <div class="portfolio-btn portfolioBtn-prev">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" class="react-icons"  width="100%" xmlns="http://www.w3.org/2000/svg" style="color: #ccc;"><path d="M872 474H286.9l350.2-304c5.6-4.9 2.2-14-5.2-14h-88.5c-3.9 0-7.6 1.4-10.5 3.9L155 487.8a31.96 31.96 0 0 0 0 48.3L535.1 866c1.5 1.3 3.3 2 5.2 2h91.5c7.4 0 10.8-9.2 5.2-14L286.9 550H872c4.4 0 8-3.6 8-8v-60c0-4.4-3.6-8-8-8z"></path></svg>
                        </div>
                       
                        <div class="portfolio__img" target="processoAgil" data-bs-toggle="modal" data-bs-target="#modalProject">
                            <img src="public/images/processoAgil/processo.jpeg" width="20%">
                        </div>

                        <div class="portfolio__img" target="processoAgil" data-bs-toggle="modal" data-bs-target="#modalProject">
                            <img src="public/images/processoAgil/processo2.jpeg" width="20%">
                        </div>

                        <div class="portfolio__img" target="processoAgil" data-bs-toggle="modal" data-bs-target="#modalProject">
                            <img src="public/images/processoAgil/processo3.jpeg" width="20%">
                        </div>

                        <div class="portfolio__img" target="processoAgil" data-bs-toggle="modal" data-bs-target="#modalProject">
                            <img src="public/images/processoAgil/processo4.jpeg" width="20%">
                        </div>

                        <div class="portfolio-btn portfolioBtn-next">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" class="react-icons" width="100%" xmlns="http://www.w3.org/2000/svg" style="color: #ccc;"><path d="M869 487.8L491.2 159.9c-2.9-2.5-6.6-3.9-10.5-3.9h-88.5c-7.4 0-10.8 9.2-5.2 14l350.2 304H152c-4.4 0-8 3.6-8 8v60c0 4.4 3.6 8 8 8h585.1L386.9 854c-5.6 4.9-2.2 14 5.2 14h91.5c1.9 0 3.8-.7 5.2-2L869 536.2a32.07 32.07 0 0 0 0-48.4z"></path></svg>
                        </div>
                    </div>
                </div>

                <div class="portfolio__title">Processo Agil App</div>
                <div class="portfolioTecnology__container">
                    <div class="portfolioTecnology__item">
                        <img align="center" alt="Mauri-React" height="15" width="15" src="https://raw.githubusercontent.com/devicons/devicon/master/icons/react/react-original.svg">
                        <div class="portfolioTecnology__description">React Native</div>
                    </div>

                </div>
                
                <div class="portfolio__footer">
                    <a href="processoAgil" target="_blank" class="portfolio__footer__item">
                        <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="react-icons" height="25px" width="25px" xmlns="http://www.w3.org/2000/svg" style="color: rgb(156, 152, 166);"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                        <span>Ver Detalhes</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="footer__content">
            <h6>Desenvolvido por Mauricio.</h6>
            <h6>Email: mauricio-ferreira2015@outlook.com</h6>
            <a href="https://github.com/Mauricio720">
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" class="react-icons" height="30px" width="30px" xmlns="http://www.w3.org/2000/svg" style="color:white;"><path d="M511.6 76.3C264.3 76.2 64 276.4 64 523.5 64 718.9 189.3 885 363.8 946c23.5 5.9 19.9-10.8 19.9-22.2v-77.5c-135.7 15.9-141.2-73.9-150.3-88.9C215 726 171.5 718 184.5 703c30.9-15.9 62.4 4 98.9 57.9 26.4 39.1 77.9 32.5 104 26 5.7-23.5 17.9-44.5 34.7-60.8-140.6-25.2-199.2-111-199.2-213 0-49.5 16.3-95 48.3-131.7-20.4-60.5 1.9-112.3 4.9-120 58.1-5.2 118.5 41.6 123.2 45.3 33-8.9 70.7-13.6 112.9-13.6 42.4 0 80.2 4.9 113.5 13.9 11.3-8.6 67.3-48.8 121.3-43.9 2.9 7.7 24.7 58.3 5.5 118 32.4 36.8 48.9 82.7 48.9 132.3 0 102.2-59 188.1-200 212.9a127.5 127.5 0 0 1 38.1 91v112.5c.8 9 0 17.9 15 17.9 177.1-59.7 304.6-227 304.6-424.1 0-247.2-200.4-447.3-447.5-447.3z"></path></svg>
                <span style="color: white;">Github</span>
            </a>
        </div>
    </footer>

    <a  href="https://wa.me/5511991457859" target="_blank" class="whatsApp" >
        <div class="whatsApp__icon">
            <img src="public/images/whatsApp.png" 
                width="100%" >
        </div>
    </a>

    <script src="public/js/dataJson.min.js"></script>
    <script src="public/js/header.min.js"></script>
    <script src="public/js/portfolio.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>