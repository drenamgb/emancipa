<html>
<head>
<title>Gerar Carteirinha	</title>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/ >
<script type="text/javascript" src="js/javascript.js" /></script>
 
</head>
<style>
	.logo{
		
		position:relative;
		top:40px;
	}
	.botao{
		position:relative;
		top:-50px;
		left: 500px;	
	}
	#p{
	position:relative;
		top:   350px;
		left: 50px;
	
	}

</style>

<?php /* esse bloco de código em php verifica se existe a sessão, pois o usuário pode simplesmente não
// fazer o login e digitar na barra de endereço do seu navegador o caminho para a página principal do site (sistema),
// burlando assim a obrigação de fazer um login, com isso se ele não estiver feito o login não será criado a session, 
então ao verificar que a session não existe a página redireciona o mesmo para a index.php.*/

 session_start(); if((!isset ($_SESSION['slogin']) == true) and (!isset ($_SESSION['ssenha']) == true))
 { 
 unset($_SESSION['slogin']); 
 unset($_SESSION['ssenha']); 
 unset($_SESSION['scodigo']); 
 header('location:login.php'); 
 }
 $logado = $_SESSION['slogin'];
 $senha=$_SESSION['ssenha'];
 $codigo=$_SESSION['scodigo'];

include("conexao.php");
$sql="select*from alunos where login='$logado'";
$execbanco=mysql_query($sql,$conexao);
$campo=mysql_fetch_array($execbanco);
?>
<br>
<body  background="car2.jpg" style="background-repeat: no-repeat">

<table border="0"  class="logo"  >
	<tr>
		<td align="center"><font color="white" font size="4"><b><?php echo $campo['ano'];?>
	</tr>
	<tr>
		<td><p>
		<td>
		
	</tr>
	<tr>		
		<td rowspan="4"  valign="top"><?php echo"<img src='fotos_alu/".$campo['foto']."'height='100' border='2' width='95'/>"?>
		<td colspan="2"><b><font color="yellow" font size="2">NOME: </font><font size="3"> <?php echo $campo['nome'];?> </b>
	</tr>
		<td><b><font color="yellow" size="2">UNIDADE: </font color="yellow"><font size="3"> <?php echo $campo['unidade'];?>
		</tr>
	<tr>
		<td><b><font color="yellow" font size="2">TURMA: </font color="yellow"><font size="3"><?php echo $campo['turma'];?>
		<b><font color="yellow" font size="2">AREA: </font color="yellow"><font size="2"><?php echo $campo['area'];?>
	</tr>
	
</table>

<div id="p">
<b><h2>P L A S T I F I Q U E
</div>


<button onclick="imprime()" class="botao" style="width:120;height:50"><b> Imprimir </button><br><br>
<a href="alunos.php"><button class="botao" style="width:100;height:50"><b> Voltar </button>