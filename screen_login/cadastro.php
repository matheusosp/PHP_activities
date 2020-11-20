

<html>
<head>
<title> Cadastro de Usuário </title>
</head>
<body>
<html>
 <head>
 <title> Cadastro</title>
 <meta name="description" content="Aprenda a criar um site completo que usa formulários em HTML">
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
 </head>

 <body>
  <h1> Preencha o formulário abaixo </h1> <br/>

<form action="cadastro.php" method="post">

<!-- DADOS PESSOAIS-->
<fieldset>
 <legend>Dados Pessoais</legend>
 <table cellspacing="10">
  <tr>
   <td>
    <label for="nome">Nome: </label>
   </td>
   <td align="left">
    <input type="text" name="nome">
   </td>
   <td>
    <label for="sobrenome">Sobrenome: </label>
   </td>
   <td align="left">
    <input type="text" name="sobrenome">
   </td>
  </tr>
  <tr>
   <td>
    <label>Nascimento: </label>
   </td>
   <td align="left">
    <input type="text" name="dia" size="2" maxlength="2" value="dd"> 
   <input type="text" name="mes" size="2" maxlength="2" value="mm"> 
   <input type="text" name="ano" size="4" maxlength="4" value="aaaa">
   </td>
  </tr>
  <tr>
   <td>
    <label for="rg">RG: </label>
   </td>
   <td align="left">
    <input type="text" name="rg" size="13" maxlength="13"> 
   </td>
  </tr>
  <tr>
   <td>
    <label>CPF:</label>
   </td>
   <td align="left">
    <input type="text" name="cpf" size="9" maxlength="9"> - <input type="text" name="cpf2" size="2" maxlength="2">
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
    <input type="text" name="rua">
   </td>
   <td>
    <label for="numero">Numero:</label>
   </td>
   <td align="left">
    <input type="text" name="numero" size="4">
   </td>
  </tr>
  <tr>
   <td>
    <label for="bairro">Bairro: </label>
   </td>
   <td align="left">
    <input type="text" name="bairro">
   </td>
  </tr>
  <tr>
   <td>
    <label for="estado">Estado:</label>
   </td>
   <td align="left">
    <select name="estado"> 
    <option value="ac">Acre</option> 
    <option value="al">Alagoas</option> 
    <option value="am">Amazonas</option> 
    <option value="ap">Amapá</option> 
    <option value="ba">Bahia</option> 
    <option value="ce">Ceará</option> 
    <option value="df">Distrito Federal</option> 
    <option value="es">Espírito Santo</option> 
    <option value="go">Goiás</option> 
    <option value="ma">Maranhão</option> 
    <option value="mt">Mato Grosso</option> 
    <option value="ms">Mato Grosso do Sul</option> 
    <option value="mg">Minas Gerais</option> 
    <option value="pa">Pará</option> 
    <option value="pb">Paraíba</option> 
    <option value="pr">Paraná</option> 
    <option value="pe">Pernambuco</option> 
    <option value="pi">Piauí</option> 
    <option value="rj">Rio de Janeiro</option> 
    <option value="rn">Rio Grande do Norte</option> 
    <option value="ro">Rondônia</option> 
    <option value="rs">Rio Grande do Sul</option> 
    <option value="rr">Roraima</option> 
    <option value="sc">Santa Catarina</option> 
    <option value="se">Sergipe</option> 
    <option value="sp">São Paulo</option> 
    <option value="to">Tocantins</option> 
   </select>
   </td>
  </tr>
  <tr>
   <td>
    <label for="cidade">Cidade: </label>
   </td>
   <td align="left">
    <input type="text" name="cidade">
   </td>
  </tr>
  <tr>
   <td>
    <label for="cep">CEP: </label>
   </td>
   <td align="left">
    <input type="text" name="cep" size="5" maxlength="5"> - <input type="text" name="cep2" size="3" maxlength="3">
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
    <input type="text" name="email">
   </td>
  </tr>
  <tr>
   <td>
    <label for="imagem">Imagem de perfil:</label>
   </td>
   <td>
    <br/>
    <br/>
    <input type="file" name="imagem" >
    <br/>
<label>Login:</label><input type="text" name="login" id="login"><br/>
<label>Senha:</label><input type="password" name="senha" id="senha"><br/>
</td>
  </tr>
 </table>
</fieldset>
<br />
<button class="btn btn-lg btn-primary btn-block" type="submit"
        name="botao" value="Cadastrar">Cadastrar</button>
<input name="Voltar" type="button" value="VOLTAR" class="botao" onClick=top.window.location="index.php"; >
</body>
<?php
error_reporting(0);
        $login=$_POST["login"];
        $senha=$_POST["senha"];
        $nome=$_POST["nome"];
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
 if($botao == "Cadastrar"){
  session_start();
       $conexao = mysql_connect("127.0.0.1","root","root");
        $banco = mysql_select_db(banco);
        $insercao = "insert into cadastro (login,senha,nome,sobrenome,dia,mes,ano,RG,CPF,CPF2,rua,numero,bairro,estado,cidade,CEP,CEP2,email,imagem) values ('$login','$senha','$nome','$sobrenome','$dia','$mes','$ano','$rg','$cpf','$cpf2','$rua','$numero','$bairro','$estado','$cidade','$cep','$cep2','$email','$imagem')";
        $resultado = mysql_query($insercao);
        $_SESSION['nome'] = $nome;
        $_SESSION['sobrenome'] = $sobrenome;
        $_SESSION['dia'] = $dia;
        $_SESSION['mes'] = $mes;
        $_SESSION['ano'] = $ano;
        $_SESSION['rg'] = $rg;
        $_SESSION['cpf'] = $cpf;
        $_SESSION['cpf2'] = $cpf2;
        $_SESSION['rua'] = $rua;
        $_SESSION['numero'] = $numero;
        $_SESSION['bairro'] = $bairro;
        $_SESSION['estado'] = $estado;
        $_SESSION['cidade'] = $cidade;
        $_SESSION['cep'] = $cep;
        $_SESSION['cep2'] = $cep2;
        $_SESSION['email'] = $email;
        $_SESSION['imagem'] = $imagem;

         echo "<script>alert('Dados Cadastrados');</script>";
         header("Location: index.php");
  }
  if($botao == "Voltar"){
    header("Location: index.php");
  }
?>
</html>