
<html>
<head>
<title> Cadastro de Usuário </title>
</head>
<body>
<form method="POST" action="cadastro.php">
<label>Login:</label><input type="text" name="login" id="login"><br>
<label>Senha:</label><input type="password" name="senha" id="senha"><br>
<<button class="btn btn-lg btn-primary btn-block" type="submit"
        name="botao" value="Cadastrar">Cadastrar</button>
</form>
</body>
<?php
       $login=$_POST["login"];
        $senha=$_POST["senha"];
        $botao=$_POST["botao"];
 if($botao == "Cadastrar"){
         $conexao = mysql_connect("127.0.0.1","root","root");
        $banco = mysql_select_db(banco);
        $insercao = "insert into cadastro (login,senha) values ('$login','$senha')";
        $resultado = mysql_query($insercao);
         echo "<script>alert('Dados Cadastrados');</script>";
  }
?>
</html>