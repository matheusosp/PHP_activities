

<html>
<head>
<title> Alterar Dados Pessoais </title>
</head>
<body>
<html>
 <head>
 <title> Alteração</title>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
 </head>

 <body>
  <h1> Preencha o formulário abaixo </h1> <br/>

<form action="" method="post">

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
         ?>
</html>       