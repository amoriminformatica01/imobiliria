<?php

session_start();

if ((isset($_SESSION['email'])) && (isset($_SESSION['senha']))) {
  header("location:administracao/painel");
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="Login do site">
  <meta name="author" content="Pedro Amorim, Developer Soluções Web.">
  <link rel="icon" href="img/favicon.ico">

  <title>Acesso Ao Sistema</title>

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.css" rel="stylesheet">

  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/signin.css" rel="stylesheet">

  <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
  <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
  <script src="assets/js/ie-emulation-modes-warning.js"></script>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

  <div class="container">

    <form action="administracao/valida.php" method="post" class="form-signin">
      <h2 class="form-signin-heading text-center"><img class="text-center" src="img/logo.png" width="180px" height="72px"></h2>
      <label for="inputEmail" class="sr-only">Endereço de Email</label>
      <input name="email" type="email" autofocus required class="form-control" id="email" placeholder="Endereço de Email">
      <label for="inputPassword" class="sr-only">Senha de Usuário</label>
      <input name="senha" type="password" required class="form-control" id="senha" placeholder="Senha de Usuário">
      <div class="checkbox">
        <label>
          <input type="checkbox" value="remember-me"> me Lembrar
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Logar</button>
      <p class="text-center text-danger">
        <?php if (isset($_SESSION['loginErro'])) {
          echo $_SESSION['loginErro'];
          unset($_SESSION['loginErro']);
        } ?>
      </p>
      <p class="text-center text-success">
        <?php
        if (isset($_SESSION['logindeslogado'])) {
          echo $_SESSION['logindeslogado'];
          unset($_SESSION['logindeslogado']);
        }
        ?>
      </p>
      <p class="text-center text-danger h4">
        Desenvolvido por Pedro Amorim .</p>

    </form>

  </div> <!-- /container -->


  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script src="js/jquery-3.4.1.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.js"></script>
</body>

</html>