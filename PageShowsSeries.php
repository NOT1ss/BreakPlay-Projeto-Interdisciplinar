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
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class="active" aria-current="true" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" class="active" aria-current="true" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/Djujutsu.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item ">
            <img src="img/Dround6.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item ">
            <img src="img/DsandMan.png" class="d-block w-100" alt="...">
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
        <h1 id="filme">Séries</h1>
    </div>
    <div class="container" >
        <div class="row">
            <div  class="col-md-2 filmes efeito efeitoCont">
                <a href="Baki.php"><img src="./img/Séries/BAKI HANMA.png" class="img-fluid" 
                alt="BAKI HANMA"></a>
            </div>
            <div class="col-md-2 filmes efeito efeitoCont">
            <a href="DemonSlayer.php"><img src="./img/Séries/DEMON SLAYER.png" class="img-fluid" 
                alt="DEMON SLAYER"></a>
            </div>
            <div  class="col-md-2 filmes efeito efeitoCont">
            <a href="TheWitcher.php"><img src="./img/Séries/THE WITCHER.png" class="img-fluid" 
                alt="THE WITCHER"></a>
            </div>
            <div class="col-md-2 filmes efeito efeitoCont">
            <a href="TheSandMan.php"><img src="./img/Séries/THE SANDMAN.png" class="img-fluid" 
                alt="THE SANDMAN"></a>
            </div>
            <div  class="col-md-2 filmes efeito efeitoCont">
            <a href="DragonBallZ.php"><img src="./img/Séries/DRAGON BALL Z - SAGA MINJIM BOO.png" class="img-fluid"
                 alt="DRAGON BALL Z - SAGA MINJIM BOO"></a>
            </div>
            <div  class="col-md-2 filmes efeito efeitoCont">
            <a href="LiveRobots.php"><img src="./img/Séries/love death robots.png"class="img-fluid" 
                alt="LOVE DEATH + ROBOTS"></a>
            </div>
            <div  class="col-md-2 filmes efeito efeitoCont">
            <a href="RecordRagnarok.php"><img src="./img/Séries/RECORD OF RAGNAROK.png" class="img-fluid" 
                alt="RECORD OF RAGNAROK"></a>
            </div>
            <div  class="col-md-2 filmes efeito efeitoCont">
            <a href="Round6.php"><img src="./img/Séries/ROUND 6.png" class="img-fluid" 
                alt="ROUND 6"></a>
            </div>
            <div  class="col-md-2 filmes efeito efeitoCont">
            <a href="attackontitan.php"><img src="./img/Séries/Attack on Titan.png" class="img-fluid" 
                alt="ROUND 6"></a>
            </div>
            <div  class="col-md-2 filmes efeito efeitoCont">
            <a href="blackclover.php"><img src="./img/Séries/Black Cover.png" class="img-fluid" 
                alt="ROUND 6"></a>
            </div>
            <div  class="col-md-2 filmes efeito efeitoCont">
            <a href="darling.php"><img src="./img/Séries/Darling in the Fraxx.png" class="img-fluid" 
                alt="ROUND 6"></a>
            </div>
            <div  class="col-md-2 filmes efeito efeitoCont">
            <a href="deathnote.php"><img src="./img/Séries/Death Note.png" class="img-fluid" 
                alt="ROUND 6"></a>
            </div>
            <div  class="col-md-2 filmes efeito efeitoCont">
            <a href="dbs.php"><img src="./img/Séries/Dragon Ball Super.png" class="img-fluid" 
                alt="ROUND 6"></a>
            </div>
            <div  class="col-md-2 filmes efeito efeitoCont">
            <a href="Jujutsu.php"><img src="./img/Séries/Jujutsu Kaizen.png" class="img-fluid" 
                alt="ROUND 6"></a>
            </div>
            <div  class="col-md-2 filmes efeito efeitoCont">
            <a href="orange.php"><img src="./img/Séries/orange is the new black.png" class="img-fluid" 
                alt="ROUND 6"></a>
            </div>
            <div  class="col-md-2 filmes efeito efeitoCont">
            <a href="blinders.php"><img src="./img/Séries/peaky blinders.png" class="img-fluid" 
                alt="ROUND 6"></a>
            </div>
            <div  class="col-md-2 filmes efeito efeitoCont">
            <a href="spy.php"><img src="./img/Séries/Spy x Family.png" class="img-fluid" 
                alt="ROUND 6"></a>
            </div>
            <div  class="col-md-2 filmes efeito efeitoCont">
            <a href="stranger.php"><img src="./img/Séries/stranger things .png" class="img-fluid" 
                alt="Stranger Things"></a>
            </div>
            <div  class="col-md-2 filmes efeito efeitoCont">
            <a href="cobrakai.php"><img src="./img/Séries/cobra kai.png" class="img-fluid" 
                alt="Cobra Kai"></a>
            </div>
            <div style="padding-top: 15vh;display:flex; justify-content: center; color:white;" class="col-lg-2">
                <h3>Em breve mais...</h3>
            </div>
        </div>
    </div>
    <br><br>
</body>
</html>

