<?php
    if(isset($_GET['project_name']) && !empty($_GET['project_name'])){
        $insubdominio = $_GET['project_name'];
        echo $insubdominio;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do projeto</title>
    <link rel="stylesheet" href="public/css/style.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <header>
        <nav>
            <a href="./" style="color:white;">Voltar</a>
        </nav>
    </header>

    <section class="container__project">
        <h2 class="title project__title">Sistema Imobiliaria</h2>

       <div class="content__project">
            <div class="project__slot carrousel__slot">
                <div id="carrouselProject" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active w-100">
                            <img src="public/images/imobiliaria/imobiliaria2.jpeg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item w-100">
                            <img src="public/images/imobiliaria/imobiliaria2.jpeg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item w-100">
                            <img src="public/images/imobiliaria/imobiliaria3.jpeg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carrouselProject" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carrouselProject" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            
            <div class="project__slot project__info">
                <div class="tecnology__container tecnologyProject__container">
                    <h2 class="project__title">Descrição do projeto</h2>
                    <p >
                        Sistema de gerenciamento completo para uma imobiliária do Paraná Gênesis Urbana.
                        O sistema teve seu desenvolvimento feito em laravel 8, usando o template no front Admin LTE. O sistema tem como objetivo gerenciar completamente as atividades da Imobiliaria Genesis Urbana: Seus clientes, as vendas feitas por ele, as parcelas pagas ou atrasadas, um gerador de boletos automatizado e alguns gerenciamentos administrativos internos da empresa. Além de ações feitas por contatos para mudanças de status em cada contrato.
                        Escolhi o laravel novamente por seus inúmeros recursos e ao lado de uma biblioteca que integrava o laravel ao Admin Lte, tive poucas preocupações em relação ao front. Mas claro sempre tendo uma certa liberdade para dar um toque a mais, para o sistema ficar completo.
                    </p>
                </div>
                <div class="tecnologyProject__container">
                    <div class="tecnology__title">Tecnologias Utilizadas</div>
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
                            <img align="center" alt="Mauri-Laravel" height="30" width="40" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-plain.svg" />
                            <div class="tecnology__description">Laravel</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</html>
