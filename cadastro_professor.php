<html>
<head>
	<title> Cadastro de Professores </title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/ > <!-- comando para corrigir caracteres  -->
	<script type="text/javascript" src="js/javascript.js" language="javascript"/></script>
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
	.c1{font-family:Verdana;
		color:blue;
		font-size:12px;}
	.c2{
		color:white;
	}
	.table1{
		position:relative;
		left:120px;
		top:-590px;
	}
	a:visited {
		color: blue;
	}
	#botao{ 
		position:absolute;
		top: 505px;
		left:130px;
	}	
</style>

<div id="banner">
<img src="cadastro.jpg"  style="background-repeat: no-repeat">

<table class="table1" border="0"  >
	<form method="post" name="formulario" action="cadprof.php" enctype="multipart/form-data" onsubmit="return validacao();">
	<hr></hr>
		<tr>
			<td colspan="4">
			<td colspan="2"><h1><font color="white"> Cadastro de Professores </h1>
		</tr>
		<tr>
			<td colspan="2"><font color="white"><?php echo "Olá Professor, Hoje é " . date("l") .", ".date("d"). " de ".date("F"). " de ".date("Y"). "</p>"; ?></font>
		</tr>
		<tr>
		</tr><tr>
		
			<td colspan="4"><h2><u>Informação Pessoal</h2></td>
			<td colspan="2"><h2><u>Informação Acadêmica</h2></td>
			<td colspan="3"><h2><u>Informação de Acesso</h2></td>		
			</tr>
		<tr>
			<td><b> Nome: </td>
			<td><input type="text" name="nome" required="required"/ size="30" tabindex="1" maxlength="30" ></td>
			<td></td><td class="c2">..............</td>
			<td><b>Faculdade: </td>
			<td> <input type="text" name="faculdade" required="required" tabindex="9" maxlength="30" size="25"/></td>
			<td class="c2">..</td>
			<td><b>Login: </td>
			<td><input type="text" name="login" tabindex="14" required="required" size="9" onkeyup="maskIt(this,event,'##-###-###')"  maxlength="10"/>
			<font color="red"><b>RG sem o Dígito</td></td>
			
		</tr>
		<tr>
			<td><b> Endereço: </td>
			<td><input type="text" name="endereco" required="required" size="30" maxlength="40" tabindex="2"/></td>
			<td></td><td></td>
			<td><b>Curso: </td>
			<td><input type="text" name="curso" required="required" size="25" tabindex="10" maxlength="30"/></td>
			<td></td>
			<td><b>Senha: </td>
			<td><input type="password" name="senha" tabindex="15" required="required" size="12"  maxlength="10"/>  Maximo 10 caracteres</td>
		
		
		</tr>
		<tr>
			<td><b> Bairro: </td>
			<td><input type="text" name="bairro" required="required" size="30"tabindex="3" maxlength="30"/></td>
			<td></td><td></td>
			<td><b>Disciplina: </td>
			<td>
				<select name="disciplina" required="required" tabindex="11">
								<option value=""></option>
								<option value="BIOLOGIA">BIOLOGIA</option>
								<option value="ESPANHOL">ESPANHOL</option>
								<option value="FISICA">FISICA</option>
								<option value="GEOGRAFIA">GEOGRAFIA</option>
								<option value="GRAMATICA">GRAMATICA</option>
								<option value="HISTORIA">HISTORIA</option>
								<option value="INGLES">INGLES</option>
								<option value="LITERATURA">LITERATURA</option>
								<option value="MATEMATICA">MATEMATICA</option>
								<option value="REDACAO">REDACAO</option>
								<option value="SOCIOLOGIA">SOCIOLOGIA</option>
								<option value="QUIMICA">QUIMICA</option>
						</select>
						
		</tr>
		<tr>
			<td><b>Telefone 1: </td>
			<td colspan="2"><input type="text" name="telefone1" tabindex="4" size="12" onkeyup="maskIt(this,event,'(##)####-####')" value="(__)____-____" maxlength=13/>
			
			<td></td>
			<td><b>Foto: </td>
			<td><input type="file" name="foto" tabindex="12"/></td>
			
		</tr>
		<tr>
			<td><b>Telefone 2: </td>
			<td colspan="2"><input type="text" name="telefone2" tabindex="5" size="12"onkeyup="maskIt(this,event,'(##)####-####')" value="(__)____-____" maxlength=13/>
			Opcional
			<td></td>
			<td> <td><font color="red"><b>ATENÇÃO</b></font>, a foto deve ter no MAXIMO 1 Mega<br>e formato jpeg, jpg ou gif
			
		</tr>
		<tr>
			<td><b>Celular: </td>
			<td colspan="2"><input type="text" name="celular" tabindex="6" size="12" onkeyup="maskIt(this,event,'(##)####-####')" value="(__)____-____" maxlength=13  />
			 Sem o nº 9
			 </td>
			 <td><td><b>Memorando: </td>
			<td colspan="9" rowspan="3"><textarea  name="memorando" rows=5 cols=40  tabindex="13" maxlength="200"/></textarea>
		</tr>
		<tr>
			<td><b>E-mail: </td>
			<td><input type="text" name="email" tabindex="7" size="30" maxlength="40"/></td>
		</tr>
		<tr>
			<td><b>Data de Nascimento: </td>
			<td><input type="text" name="data" tabindex="8"  size="7" required="required" onkeyup="maskIt(this,event,'##-##-####')" value="__/__/____" maxlength=10/>(dd/mm/aaaa)
		</tr>
					
			<td colspan="10" align="right">
				<hr></hr>
				<input type="submit" value="Cadastrar"/>
				<input type="reset" value="Limpar"/>
			</td>
		</tr>
	</form>
</table>
		<div id="botao">
		<a href="cadastro.php">Voltar</a>
	</div>
</div>	
</html>	