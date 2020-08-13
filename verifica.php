<?php 
//define que vc vai usar as propriedades de sessao
session_start();
$opcao=$_POST['opcao'];
$login=$_POST['login'];
$senha=$_POST['senha'];
include("conexao.php");


if ($opcao==0) {$sql="select*from alunos where login='$login' and senha='$senha'";
		$execbanco=mysql_query($sql,$conexao);
		if(mysql_num_rows($execbanco)==0){
			echo"<script>
				alert('Login ou senha invalidos');
				history.go(-1);
				</script>";
			}
		else{
			$_SESSION['slogin']="$login";
			$_SESSION['ssenha']="$senha";
			$_SESSION['scodigo']="$codigo";
			header("location:alunos.php");
			}
		}
else  {$sql="select*from professores where login='$login' and senha='$senha'";
		$execbanco=mysql_query($sql,$conexao);
		if(mysql_num_rows($execbanco)==0){
			echo"<script>
					alert('Login ou senha invalidos');
					history.go(-1);
				</script>";
			}
		else{?>
			<?php
			$_SESSION['slogin']="$login";
			$_SESSION['ssenha']="$senha";
			$_SESSION['scodigo']="$codigo";
			header("location:professores.php");
			}
		}
?>