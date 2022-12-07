<?php
include('protect.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="imagem/icon" href="img/BreakPlayIcone.ico"/>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styleFilms.css">
    <script src="bootstrap.js"></script>
    <title>BreakPlay | Filmes</title>
</head>
<body class="bg-dark" >
<nav class="navbar bg-dark navbar-gradient">   
        <div class="container">
            <a class="logo" href="PageShows.php">
                <img src="./img/logo.png" alt="Logo BreakPlay">
            </a>
        <div class="container">
            <ul  class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="PageShowsFilms.php">Filmes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="PageShowsSeries.php">Séries</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="PageShowsAnimes.php">Animes</a>
                </li>
            </ul>
        </div>
        <div>
            <ul class="nav">
                <li class="nav-items borda">
                    <a class="nav-link" href="PageExit.php">
                        Sair
                    </a>
                </li>
            </ul>
        </div>

        </div>
    </nav>

        <div id="carouselExampleIndicators" class="container carousel slide" data-bs-ride="true">
            <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            </div>
            <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/DcomoTreinar.png" class="d-block w-100" alt="...">
            </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
            </button>
        </div>        


    <br>
    <div class="container" style="color:White">
        <h1 id="filme">Filmes</h1>
    </div>
    <div class="container" >
        <div class="row">
            <div  class="col-md-2 filmes efeito efeitoCont">
                <a href="KarateKid.php"><img src="./img/Filmes/THE KARATE KID.png" class="img-fluid" 
                alt="The Karate Kid"></a>
            </div>
            <div class="col-md-2 filmes efeito efeitoCont">
                <a href="As Branquelas.php"><img src="./img/Filmes/AS BRANQUELAS.png" class="img-fluid" 
                alt="As Branquelas"></a>
            </div>
            <div  class="col-md-2 filmes efeito efeitoCont">
                <a href="Kung-Fusao.php"><img src="./img/Filmes/KUNG-FUSÃO.png" class="img-fluid" 
                alt="KUNG-FUSÃO"></a>
            </div>
            <div class="col-md-2 filmes efeito efeitoCont">
                <a href="KarateKid3.php"><img src="./img/Filmes/THE KARATE KID III.png" class="img-fluid" 
                alt="The Karate Kid 3"></a>
            </div>
            <div  class="col-md-2 filmes efeito efeitoCont">
                <a href="A procura da felicidade.php"><img src="./img/Filmes/A PROCURA DA FELICIDADE.png" class="img-fluid" 
                alt="A PROCURA DA FELICIDADE"></a>
            </div>
            <div  class="col-md-2 filmes efeito efeitoCont">
            <a href="chuck.php"><img src="./img/Filmes/BRINQUEDO ASSASSINO - 1988.png" class="img-fluid" 
                alt="BRINQUEDO ASSASSINO - 1988"></a>
            </div>
            <div  class="col-md-2 filmes efeito efeitoCont">
            <a href="click.php"><img src="./img/Filmes/CLICK.png" class="img-fluid" alt="CLICK"></a>
            </div>
            <div  class="col-md-2 filmes efeito efeitoCont">
            <a href="megamente.php"><img src="./img/Filmes/MEGAMENTE.png" class="img-fluid" alt="MEGAMENTE"></a>
            </div>
            <div  class="col-md-2 filmes efeito efeitoCont">
            <a href="Por Agua Abaixo.php"><img src="./img/Filmes/POR AGUA ABAIXO.png" class="img-fluid" 
            alt="POR AGUA ABAIXO"></a>
            </div>
            <div  class="col-md-2 filmes efeito efeitoCont">
            <a href="KarateKid2.php"><img src="./img/Filmes/THE KARATE KID II.png" class="img-fluid" alt="THE KARATE KID 2"></a>
            </div>
            <div  class="col-md-2 filmes efeito efeitoCont">
            <a href="comotreinar.php"><img src="./img/Filmes/COMO TREINAR SEU DRAGÃO.png" class="img-fluid" 
                alt="COMO TREINAR SEU DRAGÃO"></a>
            </div>
            <div  class="col-md-2 filmes efeito efeitoCont">
            <a href="A fuga das galinhas.php"><img src="./img/Filmes/A FUGA DASD GALINHAS.png" class="img-fluid" 
                alt="A FUGA DASD GALINHAS"></a>
            </div>
            <div  class="col-md-2 filmes efeito efeitoCont">
            <a href="sonho de liberdade.php"><img src="./img/Filmes/UM SONHO DE LIBERDADE.png" class="img-fluid" 
                alt="UM SONHO DE LIBERDADE"></a>
            </div>
            <div  class="col-md-2 filmes efeito efeitoCont">
            <a href="zumbilandia.php"><img src="./img/Filmes/ZUMBILANDIA.png" class="img-fluid" alt="ZUMBILANDIA"></a>
            </div>
            <div style="padding-top: 15vh;display:flex; justify-content: center; color:white;" class="col-lg-2">
                <h3>Em breve mais...</h3>
            </div>
        </div>
    </div>
    <br><br>
</body>
</html>

