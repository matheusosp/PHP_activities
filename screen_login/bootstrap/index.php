
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Sistema de login</title>

    <!-- Bootstrap core CSS -->
    <link href="Bootstrap/css/Bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="bootstrap/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

      <form class="form-signin" method="post">
        <h2 class="form-signin-heading" style="text-align: center;">Sistema de login</h2>
        <label for="inputEmail" class="sr-only" method="post">Login</label>
        <input type="login" id="login" class="form-control" placeholder="Login" required autofocus>
        <label for="Senha" class="sr-only">Senha</label>
        <input type="password" id="senha" name="senha" class="form-control" placeholder="Senha" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="lembre-me"> Lembre-me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
      </form>
    
     <?php
    error_reporting(0);
        $login=$_POST["login"];
        $senha=$_POST["senha"];
        $conecao =  msql_connect("127.0.0.1","root","root");
        $banco = msql_select_db(banco);
        $selecao = "select login, senha from cadastro where (login= '$login' and senha='$senha')";
        $resultado = mssql_query($selecao);
        $linha = mssql_fetch_assoc($resultado);
        $login_banco =$login["login"];
        $senha_banco =$senha["senha"];


      if(( $longin_banco == $login) and( $senha_banco ==$senha)){
        echo "<script>alert('ok!');</script>";
      }
      else
        echo "<script>alert('Login ou senha Incorretos!);</script>";
        
        ?>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  
        
  </body>
</html>
