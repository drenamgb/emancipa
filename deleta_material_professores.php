<html>
<head>

<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/ >
<script type="text/javascript" src="js/javascript.js" /></script>
 
</head>
<?php
include("conexao.php");
$codigo=$_POST['codigo'];
$sql="select*from listas where cod='$codigo'";
$execbanco=mysql_query($sql,$conexao);
if(mysql_num_rows($execbanco)==0){
	echo"<script>
		alert('Material não encontrado !');
		history.go(-1);
	</script>";
}
else{

$sql="delete from listas where cod='$codigo'";
$execbanco=mysql_query($sql,$conexao);
echo"<script>
		alert('Material removido com sucesso !');
		history.go(-1);
	</script>";


}
?>