<html>
<head>
	<title> Login </title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/ > <!-- comando para corrigir caracteres  -->
	<script type="text/javascript"  src="js/javascript.js" /> </script> <!-- Biblioteca javascript-->
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
		color: gray;
	}
	#center{ 
		position:absolute;
		top: 280px;
		left:550px;
	}
	#botao{ 
		position:absolute;
		top: 400px;
		left:690px;
	}
	.info{
		position:absolute;	
		top: 210px;
		left: 560px;
	}
	#cad{ 
		position:absolute;
		top: 450px;
		left:400px;
	}
</style>
<!-- O # e para a DIV e o .(ponto) e para class -->
<body>
<div id="banner">
	<img src="emancipa.jpg" style="background-repeat: no-repeat" >
<table align="center" class="info">
	<tr><td><h2><font color="white">Informações do Acesso
</table>
	<div id="center"  >
		<form method="post" name="form1" action="verifica.php" onsubmit="return validaRadio();">
			<b>Tipo de acesso</b>
			<input type="radio" name="opcao" value="0"><b>Aluno 
			<input type="radio" name="opcao" value="1" >Professor 	</b>	
		</p>Login:
			<input type="text" name="login" required="required"  size="15" onkeyup="maskIt(this,event,'##-###-###')" value="RG sem o dígito" maxlength="10" />               
			</br>Senha:
			<input type="password" name="senha" size="12" maxlength=10/> 
			<a href="senha.php"><font color="blue">Esqueci a senha</td></a></font>
		</p></p>
	</div>		
	<div id="botao">
			<input type="submit" " value="Entrar"/>
			<input type="reset" value="Limpar"/>
	</form>
	</div>
<br>
<div id="cad">
Para ter acesso a CENTRAL DO ALUNO <a href="cadastro.php"><font color="green" size="4"><b> CADASTRE-SE</a> aqui ! 
</div>
</div>
</body>
</html>
