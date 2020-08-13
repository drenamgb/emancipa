<html>
<head>
	<title> Cadastro </title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/ > <!-- comando para corrigir caracteres  -->
	<script type="text/javascript"  src="js/javascript.js" /> </script>
</head>
<style>
	#banner {
	position:relative;
	left:-1px;
	top:0px;
	width:1400px;
	z-index:1;
	margin-right: auto;
	margin-left: auto;
	}

	a:visited {
		color: blue;
	}
	#center{ 
		position:absolute;
		top: 270px;
		left:550px;
	}
	#botao{ 
		position:absolute;
		top: 400px;
		left:400px;
	}
	.info{
		position:absolute;	
		top: 210px;
		left: 480px;
	}
	
	
	
	
</style>

<!-- O # e para a DIV e o .(ponto) e para class -->
<div id="banner">
<img src="emancipa.jpg" style="background-repeat: no-repeat" >

<table  class="info" >
<tr><td><h2><font color="white">Seja Bem Vindo, informe o Cadastro

</table>

<div id="center"  >
	<form method="post" action="cadastro_alunos.php" >
	<input type="submit" value="Cadastro de Aluno" style="width:180;height:30;color:green" />
			
	</form>		
	
	<form method="post" action="verifica_cadastro.php"> 
	<input type="submit" value="Cadastro de Professor" style="width:180;height:30;color:blue"/>
			
	</form>

</div>
<div id="botao">
<a href="index.php">Voltar</a>
</div>