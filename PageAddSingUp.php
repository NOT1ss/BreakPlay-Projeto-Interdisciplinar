<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
	<link rel="stylesheet" href="./css/stylecs.css">
    <link rel="icon" type="imagem/icon" href="./img/BreakPlayIcone.ico"/>
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
            </ul>
        </div>
    </nav>
    <section>
        <div class="container box">
        <form autocomplete="off" method="POST">
            <h2>Cadastrar
            </h2>
            <div class="inputBox">
                <input type="text" name="usuario" required="required" maxlength="30">
                <span>Usuário</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="email" name="email" required="required" maxlength="40">
                <span>Email</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="password" name="senha" required="required" maxlength="32">
                <span>Senha</span>
                <i></i>
            </div>
            <div class="links">
                <a href="PageLogin.php">Logar</a>
            </div>
            <input type="submit" name="bt"value="Enviar">
        </form>
    </div>
  </section>
</body>
</html>


<?php


include_once ('bdbreakplay.php');

$u = new Usuario;

$nome = addslashes(@$_REQUEST['usuario']);
$email = addslashes(@$_REQUEST['email']);
$senha = addslashes(@$_REQUEST['senha']);
$submit = addslashes(@$_REQUEST['bt']);


if($submit){
    $u->conectar("breakplay", "localhost", "root", "");
    if($u->msgErro == ""){
        if($u->cadastrar($nome, $email, $senha)){
            echo "<script>
            alert('Cadastrado com sucesso!');
            </script>";
        }else{
            echo "<script>
            alert('Email já cadastrado!');
            </script>";
        }
    }else{
        echo "<script>
        alert($u->msgErro);
        </script>";
    }
}
?>

