<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="imagem/icon" href="./img/BreakPlayIcone.ico"/>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="./css/stylecs.css">
    <title>BreakPlay | Login</title>
</head>
<body class="bg-dark text-center">
    <nav class="navbar bg-dark navbar-gradient">
        <div class="container">
          <a class="logo" href="PageSingUp.php">
            <img src="./img/logo.png" alt="Logo BreakPlay">
          </a>
            <ul class="nav">
                <li class="nav-items borda">
                  <a class="nav-link" href="PageSingUp.php">
                    Cadastrar-se
                  </a>
                </li>
            </ul>
        </div>
    </nav>
    <section>
      <div class="container box">
      <form autocomplete="off" method="POST">
          <h2>Entrar
          </h2>
          <div class="inputBox">
              <input type="email" name="email" required="required">
              <span>Email</span>
              <i></i>
          </div>
          <div class="inputBox">
              <input type="password" name="senha" required="required">
              <span>Senha</span>
              <i></i>
          </div>
          <div class="links">
              <a href="PageAddSingUp.php">Cadastrar-se</a>
          </div>
          <input type="submit" name="btn" value="Login">
      </form>
  </div>
  <label class="lblfim">Novo por aqui? faça agora sua <strong><a class="assinatura" href="PageAddSingUp.php">assinatura!</a></strong></label>
</section>
</body>
</html>

<?php
include_once('bdbreakplay.php');
$u = new Usuario;

$submit = @$_REQUEST['btn'];
$email = addslashes(@$_REQUEST['email']);
$senha = addslashes(@$_REQUEST['senha']);

if($submit){
      $u->conectar("breakplay", "localhost", "root", "");
      if($u->msgErro == ""){
        if($u->logar($email, $senha)){
          header("Location: PageShows.php");
        }else{
          echo "<script>
          alert('Email ou Senha incorretos!')
          </script>";
        }
      }else{
        echo "<script>
        alert($u->msgErro);
        </script>";
      }
  }
?>