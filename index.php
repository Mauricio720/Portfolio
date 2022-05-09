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
                <ul class="menu menu--container">
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
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                    when an unknown printer took a galley of type and scrambled it to make a type 
                    specimen book. It has survived not only five centuries, but also the leap into 
                    electronic typesetting, remaining essentially unchanged. It was popularised in the 
                    1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more 
                    recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
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

   <section class="portfolio" id="portfolio">
        <h1 class="title">Portfólio</h1>
        
        <div class="portfolio__container">
           <div class="portfolio__card">
                <div class="portfolio__img--container">
                    <div class="portfolio__img--subcontainer">
                        <div class="portfolio-btn portfolioBtn-prev">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" class="react-icons"  width="100%" xmlns="http://www.w3.org/2000/svg" style="color: #ccc;"><path d="M872 474H286.9l350.2-304c5.6-4.9 2.2-14-5.2-14h-88.5c-3.9 0-7.6 1.4-10.5 3.9L155 487.8a31.96 31.96 0 0 0 0 48.3L535.1 866c1.5 1.3 3.3 2 5.2 2h91.5c7.4 0 10.8-9.2 5.2-14L286.9 550H872c4.4 0 8-3.6 8-8v-60c0-4.4-3.6-8-8-8z"></path></svg>
                        </div>
                        <div class="portfolio__img">
                            <img src="public/images/site_fotografia/fotografia.jpeg" width="95%">
                        </div>

                        <div class="portfolio__img">
                            <img src="public/images/site_fotografia/fotografia2.jpeg" width="95%">
                        </div>

                        <div class="portfolio__img">
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
                        
                        <div class="portfolio__img">
                            <img src="public/images/imobiliaria/imobiliaria2.jpeg" width="95%">
                        </div>

                        <div class="portfolio__img">
                            <img src="public/images/imobiliaria/imobiliaria3.jpeg" width="95%">
                        </div>

                        <div class="portfolio__img">
                            <img src="public/images/imobiliaria/imobiliaria4.jpeg" width="95%">
                        </div>

                        <div class="portfolio__img">
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
                        
                        <div class="portfolio__img">
                            <img src="public/images/tarefas/tarefas.jpeg" width="95%">
                        </div>

                        <div class="portfolio__img">
                            <img src="public/images/tarefas/tarefas2.jpeg" width="95%">
                        </div>

                        <div class="portfolio__img">
                            <img src="public/images/tarefas/tarefas3.jpeg" width="95%">
                        </div>

                        <div class="portfolio__img">
                            <img src="public/images/tarefas/tarefas4.jpeg" width="100%">
                        </div>

                        <div class="portfolio__img">
                            <img src="public/images/tarefas/tarefas5.jpeg" width="95%">
                        </div>
                        
                        <div class="portfolio__img">
                            <img src="public/images/tarefas/tarefas6.jpeg" width="20%">
                        </div>

                        <div class="portfolio__img">
                            <img src="public/images/tarefas/tarefas7.jpeg" width="20%">
                        </div>

                        <div class="portfolio__img">
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
                       
                        <div class="portfolio__img">
                            <img src="public/images/endoquiz/endoquiz3.jpeg" width="95%">
                        </div>

                        <div class="portfolio__img">
                            <img src="public/images/endoquiz/endoquiz4.jpeg" width="95%">
                        </div>

                        <div class="portfolio__img">
                            <img src="public/images/endoquiz/endoquiz5.jpeg" width="95%">
                        </div>

                        <div class="portfolio__img">
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
                       
                        <div class="portfolio__img">
                            <img src="public/images/processoAgil/processo.jpeg" width="20%">
                        </div>

                        <div class="portfolio__img">
                            <img src="public/images/processoAgil/processo2.jpeg" width="20%">
                        </div>

                        <div class="portfolio__img">
                            <img src="public/images/processoAgil/processo3.jpeg" width="20%">
                        </div>

                        <div class="portfolio__img">
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
                    <a href="fotografia" target="_blank" class="portfolio__footer__item">
                        <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="react-icons" height="25px" width="25px" xmlns="http://www.w3.org/2000/svg" style="color: rgb(156, 152, 166);"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                        <span>Ver Detalhes</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <footer></footer>

    <a  href="https://wa.me/5511991457859" target="_blank" class="whatsApp" >
        <div class="whatsApp__icon">
            <img src="public/images/whatsApp.png" 
                width="100%" >
        </div>
    </a>

    <script src="public/js/header.min.js"></script>
    <script src="public/js/portfolio.min.js"></script>
</body>
</html>