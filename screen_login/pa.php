  <?php 
  error_reporting(0);
session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
  unset($_SESSION['login']);
  unset($_SESSION['senha']);
  header('location:index.php');
  }
 
$logado = $_SESSION['login'];
$nome= $_SESSION['nome'];
$conexao = mysql_connect("127.0.0.1","root","root");
$banco = mysql_select_db('banco');
$selecao="SELECT * FROM cadastro WHERE login='$logado'";
$resultado=mysql_query($selecao);
$linha=mysql_fetch_assoc($resultado);
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<h2 style="border: 0px solid">
        SISTEMA WEB   </h2>
        <?php
        echo "Bem Vindo ";
  echo $linha['nome']." ";
  echo $linha['sobrenome'];
  ?>
</head>
 
<body>

<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="padding: 0; margin: 0"  >
    <fieldset style="background-color: #EEE9E9;border-width: 1px;border-style: solid;border-color: #DCDCDC">
            <ul class="nav navbar-nav" style="margin: 8; margin-left: -1;margin-bottom: 4">

                          <a style="color: black; margin: 0;background-color: #8B8989;margin-left: -52; padding: 15px 20px 15px 20px" href="pa.php"><strong>Requerimento</strong></a>
                                       
                           <a style="color: black; margin: 0;  padding: 15px 20px 15px 20px" href="site.php"><strong>Alterar dados</strong></a>
                        
            
                        
                        
            </ul> 
            </fieldset>       
        </div>
<div class="row" style="margin-top: 10px;" >
    <div class="col-lg-6" width="546" ">
        <fieldset>
            <h3>Dados Pessoais</h3>
            
            <div style="border:0px solid;" class="col-sm-12">
                <label >Nome :</label><minhatag > <BIG ><STRONG > <?php echo $linha['nome']; echo ' ',$linha['sobrenome'] ?></STRONG></BIG></minhatag>               
            </div>
            <div style="border:0px solid;" class="col-sm-12">
                <label >Data de Nascimento:</label><minhatag> <?php echo ' ', $linha['dia']; echo'/',$linha['mes']; echo '/',$linha['ano']; ?></minhatag>               
            </div>
            <div style="border:0px solid;" class="col-sm-12">
                <label >CPF:</label><minhatag> <?php  echo $linha['CPF']; echo '-',$linha['CPF2'];?></minhatag>               
            </div>
            <div style="border:0px solid;" class="col-sm-12">
                <label >RG:</label><minhatag> <?php  echo $linha['RG']; ?> </minhatag>               
            </div>
                </fieldset>
            <div class="col-lg-6" style="margin-top:  10px;">
        <fieldset>
            <h3>Endereço</h3>
            
            <div style="border:0px solid;" class="col-sm-12">
                <label >Endereço: </label><minhatag> <?php echo  $linha['rua']; ?></minhatag>               
            
                <label  >Numero:    </label><minhatag> <?php echo $linha['numero']; ?></minhatag>               
            
        </div>
            <div style="border:0px solid;" class="col-sm-12">
                <label >Bairro:</label><minhatag> <?php echo $linha['bairro']; ?></minhatag>               
            </div>
            <div style="border:0px solid;" class="col-sm-12">
                <label >Estado:</label><minhatag> <?php echo $linha['estado']; ?></minhatag>               
            </div>
            <div style="border:0px solid;" class="col-sm-12">
                <label >Cidade:</label><minhatag> <?php echo $linha['cidade']; ?></minhatag>               
            </div>
            <div style="border:0px solid;" class="col-sm-12">
                <label >CEP:</label><minhatag> <?php echo $linha['CEP']; echo '-',$linha['CEP2'] ?></minhatag>               
            </div>        </fieldset>
    
</div>
<div class="row" style="margin-top: 10px; page-break-before: always; " >
    <div class="col-lg-12" style="float: bottom;" >
        <fieldset>
            <h3>Contato</h3>
            <div style="border:0px solid;" class="col-sm-12">
                <label >Email:</label><minhatag> <?php echo $linha['email']; ?></minhatag> 
                <form name="frm-senha" id="frm-senha" method="post" class="modal fade" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary">
               
            </div>

        </div>
    </div>
</form>