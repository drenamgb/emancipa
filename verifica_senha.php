<?php 
//define que vc vai usar as propriedades de sessao
session_start();
$opcao=$_POST['opcao'];
$login=$_POST['login'];
$data=$_POST['data'];
include("conexao.php");


if ($opcao==0) {$sql="select*from alunos where login='$login' and data='$data'";
		$execbanco=mysql_query($sql,$conexao);
		if(mysql_num_rows($execbanco)==0){
			echo"<script>
				alert('Login ou Data invalidos');
				history.go(-1);
				</script>";
			}
		else{
			
			$dados=mysql_fetch_array($execbanco);
			echo "<b>Senha: ".$dados['senha'];
			}
		}
else  {$sql="select*from professores where login='$login' and data='$data'";
		$execbanco=mysql_query($sql,$conexao);
		if(mysql_num_rows($execbanco)==0){
			echo"<script>
					alert('Login ou Data invalidos');
					history.go(-1);
				</script>";
			}
		else{?>
			<?php
			$dados=mysql_fetch_array($execbanco);
			echo "<b>Senha: ".$dados['senha'];
			}
		}
?>
	<form action="index.php">
<p><input type="submit" value="Entrar"> 