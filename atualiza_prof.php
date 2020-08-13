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
$telefone1=$_POST['telefone1'];
$telefone2=$_POST['telefone2'];
$celular=$_POST['celular'];
$email=$_POST['email'];
$faculdade=$_POST['faculdade'];
$curso=$_POST['curso'];
$disciplina=$_POST['disciplina'];
$memorando=$_POST['memorando'];
$senha=$_POST['senha'];

$sql="update professores set
	nome='$nome',
	telefone1='$telefone1',
	telefone2='$telefone2',
	celular='$celular',
	endereco='$endereco',
	bairro='$bairro',
	email='$email',
	faculdade='$faculdade',
	curso='$curso',
	disciplina='$disciplina',
	memorando='$memorando',
	senha='$senha' where codigo='$codigo'";
$execbanco=mysql_query($sql,$conexao);
 echo"<script>
				
				history.go(-1);
				</script>";


?>