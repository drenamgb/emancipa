<html>
<head>
	<title> Cadastro de Alunos </title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/> <!-- comando para corrigir caracteres  -->
	<script type="text/javascript"  src="js/javascript.js" /> </script>
</head>
<script>
			alert("Seja Bem vindo Aluno");
</script>

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
		color:gray;
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
		top: 565px;
		left:130px;
	}
</style>

<div id="banner">
<img src="cadastro.jpg" >


<table class="table1" border="0" >
	<form method="post"  name="form1" action="cadalu.php" enctype="multipart/form-data" onsubmit="return validaEscolaeSemestre();" >
	<hr></hr>
	</hr>
	<tr>
		<td colspan="4">
		<td colspan="2"><h1><font color="white"> Cadastro de Alunos </h1>
	</tr>
	<tr>
		<td colspan="2"><font color="white"><?php echo "Olá aluno, Hoje é " . date("l") .", ".date("d"). " de ".date("F"). " de ".date("Y"). "</p>"; ?></font>
	</tr>
		<tr>
			<td colspan="4"><h2><u>Informação Pessoal</h2></td>
			<td colspan="3"><h2><u>Informação Acadêmica</h2></td>
			<td colspan="3"><h2><u>Informação de Acesso</h2></td>		
		</tr>
		<tr>
			<td><b> Nome: </td>
			<td><input type="text" name="nome" required="required" tabindex="1" size="30" maxlength="30"/></td>
			<td></td><td class="c2"><font color="white">..............</font></td>
			<td><b>Unidade: </td>
			<td colspan="2">
						<select name="unidade" required="required" tabindex="10">
								<option value=""></option>
								<option value="Florestan Fernandes">Florestan Fernandes</option>
								
						</select>
			</td>
			<td><b>Login: </td>
			<td><input type="text" name="login" required="required" onkeyup="maskIt(this,event,'##-###-###')"  tabindex="20" size="9"  maxlength="10"/>
			<font color="red"><b>RG sem o Dígito</td>
			
		</tr>
		<tr>
			<td><b> Endereço: </td>
			<td><input type="text" name="endereco"  size="30"  required="required"  maxlength="40" tabindex="2"/></td>
			<td></td><td></td>
			<td><b>Turma: </td>
			<td><select name="turma" tabindex="11" required="required">
						<option value=""></option>
						<option value="Sabado" >Sabado</option>
				</select>
			</td>
			<td></td>
			<td><b>Senha: </td>
			<td><input type="password" name="senha" required="required"  size="12" tabindex="21" maxlength="10" /> Maximo 10 caracteres</td>
		</tr>
		<tr>
			<td><b> Bairro: </td>
			<td><input type="text" name="bairro"  size="30"  required="required"tabindex="3" maxlength="30"/></td>
			<td></td><td></td>
			<td><b>Semestre: </td>
			<td><input type="radio" name="semestre" value="0" tabindex="13" >1º Semestre 
				<input type="radio" name="semestre" value="1" tabindex="14">2º Semestre
		</tr>
		<tr>
			<td><b>Cidade: </td>
			<td><input type="text" name="cidade"  size="20" required="required" tabindex="4" maxlength="25"/>
			<td></td><td></td>
			<td><b>Sala: </td>
			<td><select name="sala" required="required" tabindex="14" >
						<option value=""></option>
						<option value="A">A</option>
						<option value="B">B</option>
						<option value="C">C</option>
						<option value="D">D</option>
						<option value="E">E</option>
						<option value="F">F</option>
				</select>
		</tr>
		<tr>
			<td><b>Complemento: </td>
			<td><input type="text" name="complemento" size="15"  tabindex="5" maxlength="15"/>
			 </td>
			<td></td><td></td>
			<td><b>Curso: </td>
			<td><input type="text" name="curso" size="25" tabindex="15"  maxlength="30"/></td>
		</tr>
		<tr>
			<td><b>Telefone 1: </td>
			<td colspan="2"><input type="text" name="telefone1"  tabindex="5" size="12" onkeyup="maskIt(this,event,'(##)####-####')" value="(__)____-____"  maxlength=13 />
			<td></td>
			<td><b>Área: </td>
			<td><select name="area" required="required" tabindex="16">
						<option value=""></option>
						<option value="BIOLOGICAS">BIOLOGICAS</option>
						<option value="EXATAS">EXATAS</option>
						<option value="HUMANAS">HUMANAS</option>
				</select>
		</tr>
		<tr>
			<td><b>Telefone 2: </td>
			<td colspan="2"><input type="text" name="telefone2" tabindex="6" onkeyup="maskIt(this,event,'(##)####-####')" value="(__)____-____" maxlength=13 size="12"/>
			Opcional
			<td></td>
			<td><b>Escola Pública: </td>
			<td>
			<input type="radio" name="escola" value="0" tabindex="17">Sim 
			<input type="radio" name="escola" value="1" tabindex="18">Não
		</tr>
		<tr>
			<td><b>Celular: </td>
			<td colspan="2"><input type="text"  tabindex="7" name="celular" onkeyup="maskIt(this,event,'(##)####-####')" value="(__)____-____" maxlength=13 size="12"  />
			Sem o nº 9
			<td></td>
			<td><b>Foto:</td>
			<td><input type="file" name="foto" tabindex="19"/></td>
		</tr>
		<tr>
			<td><b>E-mail: </td>
			<td><input type="text" name="email" required="required" size="30" tabindex="8" maxlength="40"/></td>
			<td><td>
			<td><td><font color="red"><b>ATENÇÃO</font></b>, a foto deve ter no MAXIMO 1 Mega<br>e formato jpeg, jpg ou gif
		</tr>
		<tr>
			<td><b>Data de Nascimento: </td>
			<td><input type="text" name="data" tabindex="9" size="8" required="required"  onkeyup="maskIt(this,event,'##-##-####')"  maxlength=10 /> (dd/mm/aaaa)
			
			
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