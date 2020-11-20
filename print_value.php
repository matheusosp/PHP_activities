<!DOCTYPE html>
<html>
 <head>
  <title>coe ce</title>
  <meta charset="windows-1252">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  </head>
  <body>

    <form method="post">
	   <input type="text" name="valor1"><br/>
	   <input type="submit" name="botao" value="imprimir">
	</form>
	<?php
    $valor1= $_POST["valor1"];
	echo "o valor digitado eh= $valor1 <br>";
 ?>
 </body>
 </html>