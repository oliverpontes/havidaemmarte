<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Contato</title>

        <!--link bootstrap-->
        <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css" />

        <!--link do icomoon--> 
        <link rel="stylesheet" href="plugins/icomoon/icomoon.css.css" />

        <!--link do css-->
        <link rel="stylesheet" href="paginas/css/stylo.css" />

    </head>
    <body>
        <!--slides-->
        <header class="container">

            <!--slides-->
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="../../assets/img/img1.png" alt="Primeiro Slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../../assets/img/img2.png" alt="Segundo Slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../../assets/img/img3.jpg" alt="Terceiro Slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Próximo</span>
                </a>

            </div>
            <!--fim dos slides-->

            <!--barra de navegação-->
            <nav class="navbar navbar-expand-lg navbar-dark bg-warning">
                <a class="navbar-brand" href="#"><spam class="vic-home"></spam></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active"><a class="nav-link" href="?pg=inicio">Inicio <span class="sr-only">(página atual)</span></a></li> 
                        <li class="nav-item active"><a class="nav-link" href="?pg=sobre">Sobre <span class="sr-only">(página atual)</span></a></li> 
                        <li class="nav-item active"><a class="nav-link" href="?pg=servicos">Serviços <span class="sr-only">(página atual)</span></a></li> 
                        <li class="nav-item active"><a class="nav-link" href="?pg=produtos">Produtos <span class="sr-only">(página atual)</span></a></li> 
                        <li class="nav-item active"><a class="nav-link" href="?pg=contato">Contatos <span class="sr-only">(página atual)</span></a></li> 

                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                        <button class="btn btn-outline-success mr-sm-2 my-2 my-sm-0" type="submit">Pesquisar</button>
                        <!-- Example split danger button -->

                    </form>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Área Administrativa</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="?pg=login">Login</a>
                                <a class="dropdown-item" href="?pg=login2">Login2</a>
                                <a class="dropdown-item" href="?pg=login3">Login3</a>

                            </div>
                        </li>
                    </ul>

                </div>
            </nav> 
            <!--fim da barra de navegação-->

        </header>
        <!--fim do header-->
