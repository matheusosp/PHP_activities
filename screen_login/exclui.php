<html>
<head>
<title> exclusão </title>
</head>
<body>
<html>
 <head>
 <meta name="description" content="Aprenda a criar um site completo que usa formulários em HTML">
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
 </head>
 <body>
 	<input type="submit" class="btn btn-lg btn-primary btn-block" name="botao" value="Exclui">
  <?php
   $logado = $_SESSION['login'];
   $conexao = mysql_connect("127.0.0.1","root","root");
   $banco = mysql_select_db('banco');
   $selecao="DELETE * FROM cadastro WHERE login='$logado'";
   $resultado=mysql_query($selecao);
   $linha=mysql_fetch_assoc($resultado);
   ?>
</body>
</html>