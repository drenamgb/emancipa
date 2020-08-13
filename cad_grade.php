<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/ > <!-- comando para corrigir caracteres  -->

</head>
</html>

<?php
  
	$data=$_POST['data'];
	$local=$_POST['local'];
	$oficina=$_POST['oficina'];
	$monitoria=$_POST['monitoria'];
	$a1s1=$_POST['a1s1'];
	$a1s2=$_POST['a1s2'];
	$a1s3=$_POST['a1s3'];
	$a1s4=$_POST['a1s4'];
	$a2s1=$_POST['a2s1'];
	$a2s2=$_POST['a2s2'];
	$a2s3=$_POST['a2s3'];
	$a2s4=$_POST['a2s4'];
	$a3s1=$_POST['a3s1'];
	$a3s2=$_POST['a3s2'];
	$a3s3=$_POST['a3s3'];
	$a3s4=$_POST['a3s4'];
	$a4s1=$_POST['a4s1'];
	$a4s2=$_POST['a4s2'];
	$a4s3=$_POST['a4s3'];
	$a4s4=$_POST['a4s4'];
	$a5s1=$_POST['a5s1'];
	$a5s2=$_POST['a5s2'];
	$a5s3=$_POST['a5s3'];
	$a5s4=$_POST['a5s4'];
	$a6s1=$_POST['a6s1'];
	$a6s2=$_POST['a6s2'];
	$a6s3=$_POST['a6s3'];
	$a6s4=$_POST['a6s4'];
	$a7s1=$_POST['a7s1'];
	$a7s2=$_POST['a7s2'];
	$a7s3=$_POST['a7s3'];
	$a7s4=$_POST['a7s4'];
	$a8s1=$_POST['a8s1'];
	$a8s2=$_POST['a8s2'];
	$a8s3=$_POST['a8s3'];
	$a8s4=$_POST['a8s4'];
	include("conexao.php");
	$sql="select*from grade";
	$execbanco=mysql_query($sql,$conexao);
	$sql="insert into grade(a1s1 ,a1s2 ,a1s3 ,a1s4 ,a2s1 ,a2s2 ,a2s3 ,a2s4 ,a3s1 ,a3s2 ,a3s3 ,a3s4 ,a4s1 ,a4s2 ,a4s3 ,a4s4 ,a5s1 ,a5s2 ,a5s3 ,a5s4 ,a6s1 ,a6s2 ,a6s3 ,a6s4 ,a7s1 ,a7s2 ,a7s3 ,a7s4 ,a8s1 ,a8s2 ,a8s3 ,a8s4 ,data ,oficina ,local,monitoria) 
					values ('$a1s1','$a1s2','$a1s3','$a1s4','$a2s1','$a2s2','$a2s3','$a2s4','$a3s1','$a3s2','$a3s3','$a3s4','$a4s1','$a4s2','$a4s3','$a4s4','$a5s1','$a5s2','$a5s3','$a5s4','$a6s1','$a6s2','$a6s3','$a6s4','$a7s1','$a7s2','$a7s3','$a7s4','$a8s1','$a8s2','$a8s3','$a8s4','$data','$oficina','$local','$monitoria')";
		$execbanco=mysql_query($sql,$conexao);
		echo"<script>
			alert('GRADE enviado com Sucesso !');
			window.location = 'adicionar_grade.php';
			</script>";
		?>