<html>
<head>
<title> Dados do Usuário </title>
</head>
<body>
<html>
 <head>
 <meta name="description" content="Aprenda a criar um site completo que usa formulários em HTML">
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
 </head>
  <?php 
  error_reporting(0);
session_start();

    $login=$_POST["login"];
        $senha=$_POST["senha"];
        $nome = $_POST["nome"];
        $sobrenome=$_POST["sobrenome"];
        $dia=$_POST["dia"];
        $mes=$_POST["mes"];
        $ano=$_POST["ano"];
        $rg=$_POST["rg"];
        $cpf=$_POST["cpf"];
        $cpf2=$_POST["cpf2"];
        $rua-$_POST["rua"];
        $numero=$_POST["numero"];
        $bairro=$_POST["bairro"];
        $estado=$_POST["estado"];
        $cidade=$_POST["cidade"];
        $cep=$_POST["cep"];
        $cep2=$_POST["cep2"];
        $email=$_POST["email"];
        $imagem=$_FILES["imagem"];
        $botao=$_POST["botao"];
        $logado = $_SESSION['login'];
        $conexao = mysql_connect("127.0.0.1","root","root");
        $banco = mysql_select_db('banco');
        $id = $_GET['id'];
$result_usuario = "SELECT * FROM cadastro WHERE id = '$id'";
$resultado_usuario = mysql_query($result_usuario);
$row_usuario = mysql_fetch_assoc($resultado_usuario); 
  if(isset($_SESSION['msg'])){
      echo $_SESSION['msg'];
      unset($_SESSION['msg']);
    }  
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
  unset($_SESSION['login']);
  unset($_SESSION['senha']);
  header('location:index.php');
  }
 

$logado = $_SESSION['login'];
$conexao = mysql_connect("127.0.0.1","root","root");
$banco = mysql_select_db('banco');
$selecao="SELECT * FROM cadastro WHERE login='$logado'";
$resultado=mysql_query($selecao);
$linha=mysql_fetch_assoc($resultado);
?>
  <h2 style="border: 0px solid">
        SISTEMA WEB   </h2>
        <?php
        error_reporting(0);
        echo "Bem Vindo ";
  echo $linha['nome']." ";
  echo $linha['sobrenome'];
  ?>
</head>
 
<body>

<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="padding: 0; margin: 0"  >
    <fieldset style="background-color: #EEE9E9;border-width: 1px;border-style: solid;border-color: #DCDCDC">
            <ul class="nav navbar-nav" style="margin: 8; margin-left: -1;margin-bottom: 4;border: 0px solid black">

                         <a style="color: black; margin: 0; margin-left: -52;  padding: 15px 20px 15px 20px" href="http://127.0.0.1/kkkk/pa.php"><strong>Requerimento</strong></a>
                                       
                           <a style="color: black; margin: 0;background-color: #8B8989; padding: 15px 20px 15px 20px" href="site.php"><strong>Alterar dados</strong></a>
                                          
            </ul> 
            </fieldset>       
        </div>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SISTEMA WEB</title>
</head>
 
<body>
  <form method="POST">
    <input type="hidden" name="id" value="<?php echo $linha['id']; ?>">
  <tr>
    <td width="546"><fieldset>
 <legend>Dados Pessoais</legend>
 <table cellspacing="10">
  <tr>
   <td>
    <label for="nome">Nome: </label>
   </td>
   <td align="left">
    <input type="text" name="nome"  value="<?php echo $linha['nome']; ?>">>
   </td>
   <td>
    <label for="sobrenome">Sobrenome: </label>
   </td>
   <td align="left">
    <input type="text" name="sobrenome"  value="<?php echo $linha['sobrenome']; ?>">
   </td>
  </tr>
  <tr>
   <td>
    <label>Nascimento: </label>
   </td>
   <td align="left">
    <input type="text" name="dia" size="2" maxlength="2"  value="<?php echo $linha['dia']; ?>"> 
   <input type="text" name="mes" size="2" maxlength="2"  value="<?php echo $linha['mes']; ?>"> 
   <input type="text" name="ano" size="4" maxlength="4"  value="<?php echo $linha['ano']; ?>">
   </td>
  </tr>
  <tr>
   <td>
    <label for="rg">RG: </label>
   </td>
   <td align="left">
    <input type="text" name="rg" size="13" maxlength="13"  value="<?php echo $linha['RG']; ?>"> 
   </td>
  </tr>
  <tr>
   <td>
    <label>CPF:</label>
   </td>
   <td align="left">
    <input type="text" name="cpf" size="9" maxlength="9"  value="<?php echo $linha['CPF']; ?>" > - <input type="text" name="cpf2" size="2" maxlength="2"  value="<?php echo $linha['CPF2']; ?>">
   </td>
  </tr>
 </table>
</fieldset>

<br />
<!-- ENDEREÇO -->
<fieldset>
 <legend>Dados de Endereço</legend>
 <table cellspacing="10">

  <tr>
   <td>
    <label for="rua">Rua:</label>
   </td>
   <td align="left">
    <input type="text" name="rua"  value="<?php echo $linha['rua']; ?>" >
   </td>
   <td>
    <label for="numero">Numero:</label>
   </td>
   <td align="left">
    <input type="text" name="numero" size="4"  value="<?php echo $linha['numero']; ?>">
   </td>
  </tr>
  <tr>
   <td>
    <label for="bairro">Bairro: </label>
   </td>
   <td align="left">
    <input type="text" name="bairro"   value="<?php echo $linha['bairro']; ?>">
   </td>
  </tr>
  <tr>
   <td >
    <label for="estado">Estado</label>
    <td>
    <input type="text" name="estado"   value="<?php echo $linha['estado']; ?>"></td>
   </td>
  </tr>
  <tr>
   <td>
    <label for="cidade">Cidade: </label>
   </td>
   <td align="left">
    <input type="text" name="cidade"  value="<?php echo $linha['cidade']; ?>">
   </td>
  </tr>
  <tr>
   <td>
    <label for="cep">CEP: </label>
   </td>
   <td align="left">
    <input type="text" name="cep" size="5" maxlength="5" value="<?php echo $linha['CEP']; ?>"> - <input type="text" name="cep2" size="3" maxlength="3"  value="<?php echo $linha['CEP2']; ?>">
   </td>
  </tr>
 </table>
</fieldset>
<br />


<!-- DADOS DE LOGIN -->
<fieldset>
 <legend>Dados de login</legend>
 <table cellspacing="10">
  <tr>
   <td>
    <label for="email">E-mail: </label>
   </td>
   <td align="left">
    <input type="text" name="email"  value="<?php echo $linha['email']; ?>">
   </td>
  </tr>
  <tr>
   <td>
    <label for="imagem">Imagem de perfil:</label>
   </td>
   <td>
    <br/>
    <br/>
    <input type="file"  name="imagem" >
    <br/>
</td>
  </tr>
 </table>
</fieldset>
<br /></td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#000000"> </td>
  </tr>
</table>
</body>
</html>
<input type="submit" class="btn btn-lg btn-primary btn-block" name="botao" value="Alterar_Dados">
<input type="submit" class="btn btn-lg btn-primary btn-block" name="botao2" value="Excluir_tudo">
</form>
<input name="Voltar" type="button" value="VOLTAR" class="botao" onClick=top.window.location="index.php"; >



<?php

  $botao = $_POST['botao'];
  $botao2 = $_POST['botao2'];

if ($botao2 == "Excluir_tudo") {
  error_reporting(0);
  session_start();
  $id = $_GET['id'];
  $login=$_POST["login"];
  $logado = $_SESSION['login'];

  $conexao = mysql_connect("127.0.0.1","root","root");
  $banco = mysql_select_db('banco');
  $DELETE = "DELETE FROM cadastro WHERE login='$logado'";
  $resultado = mysql_query($DELETE);
  $linha=mysql_fetch_assoc($resultado);
  header("location: index.php");
}

if($botao == "Alterar_Dados"){
error_reporting(0);
session_start();
$id = $_GET['id'];
    $login=$_POST["login"];
        $senha=$_POST["senha"];
        $nome = $_POST["nome"];
        $sobrenome=$_POST["sobrenome"];
        $dia=$_POST["dia"];
        $mes=$_POST["mes"];
        $ano=$_POST["ano"];
        $rg=$_POST["rg"];
        $cpf=$_POST["cpf"];
        $cpf2=$_POST["cpf2"];
        $rua=$_POST["rua"];
        $numero=$_POST["numero"];
        $bairro=$_POST["bairro"];
        $estado=$_POST["estado"];
        $cidade=$_POST["cidade"];
        $cep=$_POST["cep"];
        $cep2=$_POST["cep2"];
        $email=$_POST["email"];
        $imagem=$_FILES["imagem"];
        $botao=$_POST["botao"];
        $logado = $_SESSION['login'];

        $conexao = mysql_connect("127.0.0.1","root","root");
        $banco = mysql_select_db('banco');

//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

echo "<form method='post'>";
echo "<input type='submit' name='botao' value='Atualiza'>";
echo "</form>";

$UPDATE = "UPDATE cadastro SET nome='$nome',sobrenome='$sobrenome',dia='$dia',mes='$mes',ano='$ano',RG='$rg',CPF='$cpf',CPF2='$cpf2',rua='$rua',numero='$numero',bairro='$bairro',estado='$estado',cidade='$cidade',CEP='$cep',CEP2='$cep2',email='$email' WHERE login='$logado'";
$resultado = mysql_query($UPDATE);
$linha=mysql_fetch_assoc($resultado);
if(mysql_affected_rows($conexao)){
  $_SESSION['msg'] = "<p style='color:green;'>Usuário editado com sucesso</p>";
  header("Location: pa.php");
}else{
  $_SESSION['msg'] = "<p style='color:red;'>Usuário não foi editado com sucesso</p>";
  header("Location: site.php?id=$id");
}
}

?>
</body>
</html>