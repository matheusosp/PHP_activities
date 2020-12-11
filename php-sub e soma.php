<!DOCTYPE html>
<html>
 <head>
  <title></title>
  <meta charset="windows-1252">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  </head>
  <body>

    <form method="post">
	   <input type="text" name="valor1"><br/>
	   <input type="text" name="valor2"><br/>
	   <input type="submit" name="botao" value="exibir">
	</form>
	<?php
	$botao = $_POST["botao"];
	if($botao == "exibir"){
     class calc{
	 //dentro da classe temos a funcao soma  
      function soma(){
		  $valor1 = $_POST["valor1"];
	      $valor2 = $_POST["valor2"];
		  $soma = $valor1 + $valor2;
		  echo "A soma dos valores eh: $soma <br>";
	  }
	   function subtracao(){
		  $valor1 = $_POST["valor1"];
	      $valor2 = $_POST["valor2"];
		  $subtracao = $valor1 - $valor2;
		  echo "A subtracao dos valores eh: $subtracao <br>";
	  }
     }
 //criando o objeto $php que vai instanciar os metodos e atributos da classe calc
 $php = new calc;
 $php -> soma();
 $php -> subtracao();
	}
	else{
		echo " ";
	}
 ?>
 </body>
 </html>
