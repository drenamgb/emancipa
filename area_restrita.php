<html>
<head>
<title>Área Restrita	</title>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/ >
<script type="text/javascript" src="js/javascript.js" /></script>
 
</head>
<style>
	a:visited {
		color: green;
	}
	#funcoes{
		position:relative;
		left: 300px;
		top: 200px;
	
	}	
</style>
<body background="cadastro.jpg"  style="background-repeat: no-repeat"> 


<div id="funcoes">
<marquee><font color="red"><u><b>ÁREA RESTRITA</marquee>
<font size="6"><b>ATENÇÃO, </font><font size="4" color="red"> Tenha muito cuidado com as alterações feitas no sistema<p><p></font>
<form action="lista_de_alunos.php" method="post">
<font size="4"><b>1- </font> <input type="submit" value="Lançar Nota dos Simulados dos ALUNOS" style="width:300;height:40"/>
</form> <p>
<form action="simulado.php" method="post">
<input type="hidden" name="codigo" value="1"/>
<font size="4"><b>2- </font> <input type="submit" value="Lançar Nota dos Simulados do CURSINHO" style="width:300;height:40"/>
</form><p>
<form action="adicionar_eventos.php" method="post">
<font size="4"><b>3- </font> <input type="submit" value="Adicionar EVENTOS" style="width:200;height:40"/>
</form><p>
<form action="adicionar_grade.php" method="post">
<font size="4"><b>4- </font> <input type="submit" value="Adicionar GRADE de HORÁRIO" style="width:250;height:40"/>
</form><p>
<form action="remover_material.php" method="post">
<font size="4"><b>5- </font> <input type="submit" value="Remover MATERIAL de ESTUDO" style="width:250;height:40"/>
</form><p><p>
<a href="professores.php"><font color="red" size="5"><b>SAIR</font></a>
</div>
