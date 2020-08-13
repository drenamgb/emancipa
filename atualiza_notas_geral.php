<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/ >
<script type="text/javascript" src="js/javascript.js" /></script>
 
</head>
<?php
include("conexao.php");
$matematica1=$_POST['matematica1'];
$matematica2=$_POST['matematica2'];
$matematica3=$_POST['matematica3'];
$quimica1=$_POST['quimica1'];
$quimica2=$_POST['quimica2'];
$quimica3=$_POST['quimica3'];
$fisica1=$_POST['fisica1'];
$fisica2=$_POST['fisica2'];
$fisica3=$_POST['fisica3'];
$biologia1=$_POST['biologia1'];
$biologia2=$_POST['biologia2'];
$biologia3=$_POST['biologia3'];
$portugues1=$_POST['portugues1'];
$portugues2=$_POST['portugues2'];
$portugues3=$_POST['portugues3'];
$historia1=$_POST['historia1'];
$historia2=$_POST['historia2'];
$historia3=$_POST['historia3'];
$geografia1=$_POST['geografia1'];
$geografia2=$_POST['geografia2'];
$geografia3=$_POST['geografia3'];
$sociologia1=$_POST['sociologia1'];
$sociologia2=$_POST['sociologia2'];
$sociologia3=$_POST['sociologia3'];
$filosofia1=$_POST['filosofia1'];
$filosofia2=$_POST['filosofia2'];
$filosofia3=$_POST['filosofia3'];
$espanhol1=$_POST['espanhol1'];
$espanhol2=$_POST['espanhol2'];
$espanhol3=$_POST['espanhol3'];
$ingles1=$_POST['ingles1'];
$ingles2=$_POST['ingles2'];
$ingles3=$_POST['ingles3'];
$redacao1=$_POST['redacao1'];
$redacao2=$_POST['redacao2'];
$redacao3=$_POST['redacao3'];
$mediasala1=$_POST['mediasala1'];
$mediasala2=$_POST['mediasala2'];
$mediasala3=$_POST['mediasala3'];

if (($redacao1 <10) and ($redacao1 <> '')){
	$redacao1=$redacao1*10;
}
	
if (($redacao2 <10) and ($redacao2 <>'')){
	$redacao2=$redacao2*10;}
	
if (($redacao3 < 10) and ($redacao3 <> '')){
	$redacao3=$redacao3*10;}

if (($redacao1 > 100) or ($redacao2 >100) or ($redacao3 >100) or ($mediasala1 > 90)or ($mediasala2 > 90)or ($mediasala3 > 90)){
	echo"<script>
		alert('A nota da REDAÇÃO deve ser MENOR que 100% e a Nota Geral Menor que 90 Pontos !');
		window.location = 'simulado.php'
		</script>";
		
}else{

$sql="update notas set
	matematica1='$matematica1',
	matematica2='$matematica2',
	matematica3='$matematica3',
	quimica1='$quimica1',
	quimica2='$quimica2',
	quimica3='$quimica3',
	fisica1='$fisica1',
	fisica2='$fisica2',
	fisica3='$fisica3',
	geografia1='$geografia1',
	geografia2='$geografia2',
	geografia3='$geografia3',
	historia1='$historia1',
	historia2='$historia2',
	historia3='$historia3',
	portugues1='$portugues1',
	portugues2='$portugues2',
	portugues3='$portugues3',
	filosofia1='$filosofia1',
	filosofia2='$filosofia2',
	filosofia3='$filosofia3',
	sociologia1='$sociologia1',
	sociologia2='$sociologia2',
	sociologia3='$sociologia3',
	ingles1='$ingles1',
	ingles2='$ingles2',
	ingles3='$ingles3',
	espanhol1='$espanhol1',
	espanhol2='$espanhol2',
	espanhol3='$espanhol3',
	biologia1='$biologia1',
	biologia2='$biologia2',
	biologia3='$biologia3',
	redacao1='$redacao1',
	redacao2='$redacao2',
	redacao3='$redacao3',
	mediasala1='$mediasala1',
	mediasala2='$mediasala2',
	mediasala3='$mediasala3' where codigo='1'";
$execbanco=mysql_query($sql,$conexao);
header("location:simulado.php");

}
?>