<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/ >
<script type="text/javascript" src="js/javascript.js" /></script>
 
</head>
<?php
include("conexao.php");
$codigo=$_POST['codigo'];
$nome=$_POST['nome'];
$data=$_POST['data'];
$endereco=$_POST['endereco'];
$bairro=$_POST['bairro'];
$cidade=$_POST['cidade'];
$complemento=$_POST['complemento'];
$telefone1=$_POST['telefone1'];
$telefone2=$_POST['telefone2'];
$celular=$_POST['celular'];
$email=$_POST['email'];
$curso=$_POST['curso'];
$area=$_POST['area'];
$unidade=$_POST['unidade'];
$senha=$_POST['senha'];

$sql="update alunos set
	nome='$nome',
	data='$data',
	endereco='$endereco',
	bairro='$bairro',
	cidade='$cidade',
	complemento='$complemento',
	telefone1='$telefone1',
	telefone2='$telefone2',
	celular='$celular',
	email='$email',
	curso='$curso',
	area='$area',
	unidade='$unidade',
	senha='$senha' where codigo='$codigo'";
$execbanco=mysql_query($sql,$conexao);
 echo"<script>
				
				history.go(-1);
				</script>";


?>