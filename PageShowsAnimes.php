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
        <h1 id="filme">Animes</h1>
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
            <a href="DragonBallZ.php"><img src="./img/Séries/DRAGON BALL Z - SAGA MINJIM BOO.png" class="img-fluid"
                 alt="DRAGON BALL Z - SAGA MINJIM BOO"></a>
            </div>
            <div class="col-md-2 filmes efeito efeitoCont">
            <a href="RecordRagnarok.php"><img src="./img/Séries/RECORD OF RAGNAROK.png" class="img-fluid" 
                alt="RECORD OF RAGNAROK"></a>
            </div>
            <div class="col-md-2 filmes efeito efeitoCont">
            <a href="DRstone.php"><img src="./img/Séries/_Sr. Stone.png" class="img-fluid" 
                alt="RECORD OF RAGNAROK"></a>
            </div>
            <div class="col-md-2 filmes efeito efeitoCont">
            <a href="attackontitan.php"><img src="./img/Séries/Attack on Titan.png" class="img-fluid" 
                alt="RECORD OF RAGNAROK"></a>
            </div>
            <div class="col-md-2 filmes efeito efeitoCont">
            <a href="blackclover.php"><img src="./img/Séries/Black Cover.png" class="img-fluid" 
                alt="RECORD OF RAGNAROK"></a>
            </div>
            <div class="col-md-2 filmes efeito efeitoCont">
            <a href="dbs.php"><img src="./img/Séries/Dragon Ball Super.png" class="img-fluid" 
                alt="RECORD OF RAGNAROK"></a>
            </div>
            <div class="col-md-2 filmes efeito efeitoCont">
            <a href="Jujutsu.php"><img src="./img/Séries/Jujutsu Kaizen.png" class="img-fluid" 
                alt="RECORD OF RAGNAROK"></a>
            </div>
            <div class="col-md-2 filmes efeito efeitoCont">
            <a href="spy.php"><img src="./img/Séries/Spy x Family.png" class="img-fluid" 
                alt="RECORD OF RAGNAROK"></a>
            </div>
            <div class="col-md-2 filmes efeito efeitoCont">
            <a href="darling.php"><img src="./img/Séries/Darling in the Fraxx.png" class="img-fluid" 
                alt="RECORD OF RAGNAROK"></a>
            </div>
            <div class="col-md-2 filmes efeito efeitoCont">
            <a href="deathnote.php"><img src="./img/Séries/Death Note.png" class="img-fluid" 
                alt="RECORD OF RAGNAROK"></a>
            </div>
            <div style="padding-top: 15vh;display:flex; justify-content: center; color:white;" class="col-lg-2">
                <h3>Em breve mais...</h3>
            </div>
        </div>
    </div>
    <br><br>
</body>
</html>

