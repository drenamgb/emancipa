<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/ > <!-- comando para corrigir caracteres  -->

</head>
</html>

<?php
  
	$disciplina=$_POST['disciplina'];
	$data=$_POST['data'];
	$lista=$_FILES["lista"]["name"];
	$link=$_POST['link'];
	$hora=$_POST['hora'];
	$professor=$_POST['professor'];
	include("conexao.php");
	$sql="select*from listas";
	$execbanco=mysql_query($sql,$conexao);
	move_uploaded_file($_FILES["lista"]["tmp_name"],"lista/$disciplina.$lista");
	$sql="insert into listas (disciplina,professor,data,hora,lista,link) 
					values ('$disciplina','$professor','$data','$hora','$disciplina.$lista','$link')";
		$execbanco=mysql_query($sql,$conexao);
		echo"<script>
			alert('MATERIAL enviado com Sucesso !');
			history.go(-1);
			</script>";
		?>