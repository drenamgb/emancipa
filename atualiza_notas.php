<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/ >
<script type="text/javascript" src="js/javascript.js" /></script>
 
</head>
<?php
include("conexao.php");
$codigo=$_POST['codigo'];
$media1=$_POST['media1'];
$red1=$_POST['red1'];
$media2=$_POST['media2'];
$red2=$_POST['red2'];
$media3=$_POST['media3'];
$red3=$_POST['red3'];

if (($red1<10) and ($red1<>'')){
	$red1=$red1*10;
}
	
if (($red2<10) and ($red2<>'')){
	$red2=$red2*10;}
	
if (($red3<10) and ($red3<>'')){
	$red3=$red3*10;}

if (($red1 > 100) or ($red2 >100) or ($red3 >100)){
	echo"<script>
		alert('A nota da REDAÇÃO deve ser MENOR que 100%!');
		window.location = 'editar_simulado.php'
		</script>";
		
}else{
	
$sql="update alunos set
	media1='$media1',
	red1='$red1',
	media2='$media2',
	red2='$red2',
	media3='$media3',
	red3='$red3'
	where codigo='$codigo'";
$execbanco=mysql_query($sql,$conexao);
 header("location:lista_de_alunos.php");

}
?>