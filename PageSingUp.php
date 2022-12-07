<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="imagem/icon" href="./img/BreakPlayIcone.ico"/>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="./css/styleP.css">
    <title>BreakPlay | Inscrição</title>
</head>
<body class="bg-dark text-center" >
    <nav class="navbar bg-dark navbar-gradient">
        <div class="container">
            <a class="logo" href="PageSingUp.php">
                <img src="./img/logo.png" alt="Logo BreakPlay">
            </a>
            <ul class="nav">
                <li class="nav-items borda">
                  <a class="nav-link" href="PageLogin.php">
                      Entrar
                  </a>
                </li>
                <li  style="margin-left: 10px;"class="nav-items borda">
                    <a class="nav-link" href="PageShows.php">
                        Assistir
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <br>
    <br>
    <br>
    <section>
        <div class="container">
            <h1>Filmes, séries e muito mais.</h1>
            <h2>Vamos Assistir?</h2>
            <h3>Informe um email, para prosseguir 
            com a criação de sua <strong>assinatura!</strong></h3>
        </div>
        <div>
            <form method="POST">
                <input class="inputp1" type="email" name="email" placeholder="exemplo@gmail.com">
                <input class="inputp1Sub" type="submit" name="btn" value="Enviar">      
          </form>
        </div>
    </section>
</body>
</html>

<?php
$email = @$_REQUEST["email"];
$submit = @$_REQUEST["btn"];

if($submit){
    if($email == ""){
        echo "<script>
        alert('Por favor, preencha o campo do email!')
        </script>";
    }else{
        header ("Location: PageAddSingUp.php");
    }
}
?>