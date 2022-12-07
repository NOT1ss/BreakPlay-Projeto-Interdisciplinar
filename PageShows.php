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
    <title>BreakPlay | Filmes e Séries</title>
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
        <div class="carousel-indicators ">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/Dround6.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/DcomoTreinar.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/DsandMan.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/Djujutsu.png" class="d-block w-100" alt="...">
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
    <div class="container">
        <div class="row">
            <div class="col-md-2 efeito efeitoCont">
                <a href="KarateKid.php"><img src="./img/Filmes/THE KARATE KID.png" class="img-fluid" alt="The Karate Kid"></a>
            </div>
            <div class="col-md-2 efeito efeitoCont">
                <a href="As Branquelas.php"><img src="./img/Filmes/AS BRANQUELAS.png" class="img-fluid" alt="As Branquelas"></a>
            </div>
            <div class="col-md-2 efeito efeitoCont">
                <a href="Kung-Fusao.php"><img src="./img/Filmes/KUNG-FUSÃO.png" class="img-fluid" alt="KUNG-FUSÃO"></a>
            </div>
            <div class="col-md-2 efeito efeitoCont">
                <a href="KarateKid3.php"><img src="./img/Filmes/THE KARATE KID III.png" class="img-fluid" alt="The Karate Kid 3"></a>
            </div>
            <div class="col-md-2 efeito efeitoCont">
                <a href="Por Agua Abaixo.php"><img src="./img/Filmes/POR AGUA ABAIXO.png" class="img-fluid" alt="The Karate Kid 3"></a>
            </div>
            <div class="col-md-2 efeito efeitoCont">
                <a href="A fuga das galinhas.php"><img src="./img/Filmes/A FUGA DASD GALINHAS.png" class="img-fluid" alt="The Karate Kid 3"></a>
            </div>
        </div>
        <a href="PageShowsFilms.php"><h5 style="display:flex; justify-content: flex-end; padding-top: 8px; color:white;">Veja mais...</h5></a>
    </div>

    <br>
    <div class="container" style="color:White">
        <h1 id="serie">Séries</h1>
    </div>
    <div class="container" >
        <div class="row">
            <div class="col-md-2 efeito efeitoCont">
                <a href="LiveRobots.php"><img src="./img/Séries/love death robots.png" class="img-fluid" alt="The Karate Kid"></a>
            </div>
            <div class="col-md-2 efeito efeitoCont">
                <a href="Round6.php"><img src="./img/Séries/ROUND 6.png" class="img-fluid" alt="As Branquelas"></a>
            </div>
            <div class="col-md-2 efeito efeitoCont">
                <a href="TheSandMan.php"><img src="./img/Séries/THE SANDMAN.png" class="img-fluid" alt="KUNG-FUSÃO"></a>
            </div>
            <div class="col-md-2 efeito efeitoCont">
                <a href="TheWitcher.php"><img src="./img/Séries/THE WITCHER.png" class="img-fluid" alt="The Karate Kid 3"></a>
            </div>
            <div class="col-md-2 efeito efeitoCont">
                <a href="TheWitcher.php"><img src="./img/Séries/orange is the new black.png" class="img-fluid" alt="The Karate Kid 3"></a>
            </div>
            <div class="col-md-2 efeito efeitoCont">
                <a href="TheWitcher.php"><img src="./img/Séries/cobra kai.png" class="img-fluid" alt="The Karate Kid 3"></a>
            </div>
        </div>
        <a  href="PageShowsSeries.php"><h5 style="display:flex; justify-content: flex-end; padding-top: 8px; color:white;">Veja mais...</h5></a>
    </div>
    <br>
    <div class="container" style="color:White">
        <h1 id="serie">Animes</h1>
    </div>
    <div class="container" >
        <div class="row">
            <div class="col-md-2 efeito efeitoCont">
                <a href="Baki.php"><img src="./img/Séries/BAKI HANMA.png" class="img-fluid" alt="The Karate Kid"></a>
            </div>
            <div class="col-md-2 efeito efeitoCont">
                <a href="DemonSlayer.php"><img src="./img/Séries/DEMON SLAYER.png" class="img-fluid" alt="As Branquelas"></a>
            </div>
            <div class="col-md-2 efeito efeitoCont">
                <a href="RecordRagnarok.php"><img src="./img/Séries/RECORD OF RAGNAROK.png" class="img-fluid" alt="KUNG-FUSÃO"></a>
            </div>
            <div class="col-md-2 efeito efeitoCont">
                <a href="DragonBallZ.php"><img src="./img/Séries/DRAGON BALL Z - SAGA MINJIM BOO.png" class="img-fluid" alt="The Karate Kid 3"></a>
            </div>
            <div class="col-md-2 efeito efeitoCont">
                <a href="DRstone.php"><img src="./img/Séries/_Sr. Stone.png" class="img-fluid" alt="The Karate Kid 3"></a>
            </div>
            <div class="col-md-2 efeito efeitoCont">
                <a href="Jujutsu.php"><img src="./img/Séries/Jujutsu Kaizen.png" class="img-fluid" alt="The Karate Kid 3"></a>
            </div>
        </div>
        <a  href="PageShowsAnimes.php"><h5 style="display:flex; justify-content: flex-end; padding-top: 8px; color:white;">Veja mais...</h5></a>
    </div>
    <br><br><br><br>
    <footer>
        <div>

            <div class="container contact-box text-center">
                <div class="row">
                    <div class="col-md-12">
                        <h1 style="color:white"class="main-title">Projeto Break Play - Trabalho Interdisciplinar</h1>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <p style="color:white">₢ Desenvolvimento por mim (eu fiz qse tudo) e pelo miguelito | 2ªDS - 2022</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>

