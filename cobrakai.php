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
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/styleFilms.css">
    <title>BreakPlay | Cobra Kai</title>
    <style type="text/css">
        .neat {
        display: none;
        clear: both;
        margin-top:180px;
        }
    </style>
   <script type="text/javascript" src="jquery-1.5.1.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
        $('#animate-fade').click(function () {
        $('.neat').animate({ opacity : 'toggle' }, 'slow');
        });
        });
    </script>
</head>
<body class="bg-dark text-center" >
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
    <br><br><br><br><br>
    <div class="container" >    
        <table>
        <tr>
            <div>
                <td><img class="banner" src="img/Séries/cobra kai.png" alt="" width="280px"></td>
            </div>
        <td>
        <div style="margin-top:80px">
        <h4  class="txtone">ASSISTIR A COBRA KAI</h4>
        
        <h1 class="txttwo">COBRA KAI</h1>
        <div class="dados">
            <img style="filter:invert(100%);"src="img/calendario.png" alt="" width="32px">
            <h3 style="font-size:18px ;margin-left:8px;">
                2018
            </h3>
        </div>
            <div style="color:white; display:flex; margin-left:34px">
            <h3 style="font-size:16px">
                <strong>Criadores: </strong>Josh Heald, Jon Hurwitz, Hayden Schlossberg
            </h3>
            </div>
        <p style="color:white; display:flex; margin-left:15px; padding:20px;  text-align: justify;">
        Cobra Kai acontece 30 anos após os acontecimentos do filme original e segue a história 
        de Johnny Lawrence fracassado e alcoólatra, que busca redenção, ao reabrir o infame 
        dojo Cobra Kai, reacendendo a sua rivalidade com o agora bem-sucedido Daniel LaRusso, 
        que tem lutado para manter o equilíbrio em sua vida sem a orientação de seu mentor, 
        sr. Miyagi. Dois homens que direcionam os traumas do passado e as frustrações 
        do presente na única maneira que eles sabem como resolver: através do karatê.</p>
        </td>
        </tr>
        </div>
        <td>
        <div class="container" >  
            <a id="animate-fade" class="efeito efeitoCont" style="
            margin-top:20px;
            border: 3.5px solid #96d9ff;
            display: block; 
            border-radius:10px;" href="#"><h2 style="padding-top:10px;color:white;">Assistir</h2></a>
        </div> 
        </td>
        </table>
        <div style="color:white;display:flex; margin-left:308px; padding:10px; margin-top:-180px; ">
                <h3 class="fixa"><strong>Ficha Técnica:</strong></h3>
                <a class="fixa" href="#">Série</a>
                <p class="fixa">Classificação 14</p>
                <p class="fixa">Comédia</p>
                <p class="fixa">Drama</p>
                <p class="fixa">Assista em: Netflix</p>
            </div>   
            <iframe class="neat" width="765" height="470" src="https://www.youtube.com/embed/xCwwxNbtK6Y" title="Official Cobra Kai Trailer - The Karate Kid saga continues" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
    
    <br><br>
</body>
</html>

