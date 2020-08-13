<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/ > <!-- comando para corrigir caracteres  -->
	
</head>
</html>
<?php session_start(); if((!isset ($_SESSION['slogin']) == true) and (!isset ($_SESSION['ssenha']) == true))
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
$sql="select*from professores where login='$logado'";
$execbanco=mysql_query($sql,$conexao);
$campo=mysql_fetch_array($execbanco);
?>

<?php
  
	$disponivel=$_POST['disponivel'];
	if ($disponivel==1) {$disponivel="PROFESSORES";}
	else if ($disponivel==2){$disponivel="ALUNOS";}
		else{$disponivel="TODOS";}
		
	$hora2=date("H")."h : ".date("i")."s";
	$hora=$_POST['hora'];
	$responsavel=$campo['nome'];
	$evento=$_POST['evento'];
	$data=$_POST['data'];
	$data2=date("d")."/".date("m")."/".date("Y");
	$organizador=$_POST['organizador'];
	$local=$_POST['local'];
	$descricao=$_POST['descricao'];
	include("conexao.php");
	$sql="select*from eventos";
	$execbanco=mysql_query($sql,$conexao);
	$sql="insert into eventos (evento,descricao,local,organizador,data,data2,hora,hora2,disponivel,responsavel) 
					values ('$evento','$descricao','$local','$organizador','$data','$data2','$hora','$hora2','$disponivel','$responsavel')";
		$execbanco=mysql_query($sql,$conexao);
		echo"<script>
			alert('Eventos adicionado com Sucesso !');
			window.location = 'adicionar_eventos.php';
			</script>";
		?>