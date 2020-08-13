<html>
<head>
	<title> Recuperação de Senha </title>
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

	#center{ 
		position:absolute;
		top: 280px;
		left:550px;
	}
	#rec{ 
		position:absolute;
		top: 400px;
		left:750px;
	}
	.info{
		position:absolute;	
		top: 210px;
		left: 550px;
	}
	#botao{ 
		position:absolute;
		top: 400px;
		left:400px;
	}
	a:visited {
		color: blue;
	}
	
</style>
<div id="banner">
<img src="emancipa.jpg" >

<table align="center" class="info">
<tr><td><h2><font color="red">Recuperação de Senha

</table>
<br><br><br><br><br><br><p><font color="white"><?php echo "Hoje é ".date("l").", ".date("d")." de ".date("F")." de ".date("Y");?></font>
<div id="center"  >
	
	<form method="post" name="form1" action="verifica_senha.php" onsubmit="return validaRadio();">
		 <b>Tipo de acesso     </b>
			<input type="radio" name="opcao" value="0">Aluno 
			<input type="radio" name="opcao" value="1" >Professor 		
		</p>
		 Login:
			<input type="text" name="login" required="required"  size="14" onkeyup="maskIt(this,event,'##-###-###')" value="RG sem o dígito" maxlength="10" />               
			</br>Data de Nascimento:
			<input type="text" name="data" size="8" onkeyup="maskIt(this,event,'##-##-####')" value="00/00/000"/> 
			</td>
		</p>
		</p>
</div>		

<div id="rec">

			<input type="submit" " value="Recuperar"/>
			<input type="reset" value="Limpar"/>
	</form>
	</div>
	<div id="botao">
		<a href="index.php">Voltar</a>
	</div>

</div></body>
</html>
