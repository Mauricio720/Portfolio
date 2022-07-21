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
            <a class="btn btn-info" href="./" style="color:white;">Voltar</a>
        </nav>
    </header>

    <section class="container__project">
        <h2 class="title project__title"></h2>
        <div class="content__project">
            <div class="project__slot carrousel__slot">
                <div id="carrouselProject" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active w-100">
                            <center>
                                <img src="public/images/imobiliaria/imobiliaria2.jpeg" class="d-block w-100" alt="...">
                            </center>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carrouselProject" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon prev-carousel-project" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carrouselProject" data-bs-slide="next">
                        <span class="carousel-control-next-icon next-carousel-project" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            
            <div class="project__slot project__info">
                <div class="tecnology__container tecnologyProject__container">
                    <h2 class="project__title">Descrição do projeto</h2>
                    <p class="description"></p>
                </div>
                <div class="tecnologyProject__container">
                    <h2 class="project__title">Tecnologias Utilizadas</h2>
                    <div class="tecnology__container tecnology__container--project">
                        <div class="tecnology__item">
                            <img align="center" alt="" height="30" width="30" src="">
                            <div class="tecnology__description"></div>
                        </div>
                    </div>
                </div>

                <div class="container__github">
                    <h2 class="project__title">GitHub</h2>
                    <div class="content__github">
                        <a class="github__item" href="http://">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" class="react-icons" height="40" width="40" xmlns="http://www.w3.org/2000/svg" style="color: rgb(156, 152, 166);"><path d="M511.6 76.3C264.3 76.2 64 276.4 64 523.5 64 718.9 189.3 885 363.8 946c23.5 5.9 19.9-10.8 19.9-22.2v-77.5c-135.7 15.9-141.2-73.9-150.3-88.9C215 726 171.5 718 184.5 703c30.9-15.9 62.4 4 98.9 57.9 26.4 39.1 77.9 32.5 104 26 5.7-23.5 17.9-44.5 34.7-60.8-140.6-25.2-199.2-111-199.2-213 0-49.5 16.3-95 48.3-131.7-20.4-60.5 1.9-112.3 4.9-120 58.1-5.2 118.5 41.6 123.2 45.3 33-8.9 70.7-13.6 112.9-13.6 42.4 0 80.2 4.9 113.5 13.9 11.3-8.6 67.3-48.8 121.3-43.9 2.9 7.7 24.7 58.3 5.5 118 32.4 36.8 48.9 82.7 48.9 132.3 0 102.2-59 188.1-200 212.9a127.5 127.5 0 0 1 38.1 91v112.5c.8 9 0 17.9 15 17.9 177.1-59.7 304.6-227 304.6-424.1 0-247.2-200.4-447.3-447.5-447.3z"></path></svg>
                            <span></span>
                        </a>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
   

    <a href="https://wa.me/5511991457859" target="_blank" class="whatsApp" >
        <div class="whatsApp__icon">
            <img src="public/images/whatsApp.png" 
                width="100%" >
        </div>
    </a>

    <?php include_once('partials/footer.php')?>
</body>

<script src="public/js/dataJson.min.js"></script>
<script src="public/js/portfolioPage.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</html>
