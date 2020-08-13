<html>
<head>
<title>Adicionar GRADE - Área Restrita</title>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/ >
<script type="text/javascript" src="js/javascript.js" /></script>
 
</head>
<style>
	a:visited {
		color: blue;
	}
		
</style>
<a href="professores.php"><font size="5" color="green"><b>Central do Aluno</a></font><p>			
<a href="area_restrita.php"><font size="5">Voltar</a><p></font>




<table align="center" bordercolor="black">
	<tr><td colspan="5" align="center"><font size="5"><b>Adicionar uma nova <font color="red">GRADE DE HORÁRIO</font></b><p></td>
		
	</tr>
	<form method="post" action="cad_grade.php">
		<tr>
			<td></td>
			<td><b> Data <input type="text" size="8" name="data"  onkeyup="maskIt(this,event,'##/##/####')"  required="required" maxlength="10"> </b>dd/mm/aaaa</td>
			<td></td>
			<td colspan="3"> <b>Local de AULA <input type="text" name="local" required="required"> </td>
			
		</tr>
		<tr>
			<td colspan="6"><b>Monitoria <input type="text" name="monitoria" size="70"><p></td>
		</tr>
		<tr>	
			<td><b>HORÁRIO</td>
			<td align="center"><b>Sala A + B</td>
			<td align="center"><b>Sala C + D</td>
			<td align="center"><b>Sala E</td>
			<td align="center"><b>Sala F</td>
		</tr>
		<tr>
			<td align="center">8h - 9h</td>
			<td><select name="a1s1"required="required" >
										<option value=""></option>
										<option value="CIRCULO">CIRCULO</option>
										<option value="Leonardo - CIENCIAS">Leonardo - CIÊNCIAS</option>
										<option value="Thiago - BIOLOGIA">Thiago - BIOLOGIA</option>
										<option value="Parada - BIOLOGIA">Parada - BIOLOGIA</option>
										<option value="Luan - GEOGRAFIA">Luan - GEOGRAFIA</option>
										<option value="Rafael - GEOGRAFIA">Rafael - GEOGRAFIA</option>
										<option value="Stella - HISTORIA">Stella - HISTÓRIA</option>
										<option value="Veronica - HISTORIA">Verônica - HISTÓRIA</option>
										<option value="Manuela - GRAMATICA">Manuela - GRAMÁTICA</option>
										<option value="Danilo - GRAMATICA">Danilo - GRAMÁTICA</option>
										<option value="Marcelo - LITERATURA">Marcelo - LITERATURA</option>
										<option value="Lara - LITERATURA">Lara - LITERATURA</option>
										<option value="Victor - SOCIOLOGIA">Victor - SOCIOLOGIA</option>
										<option value="Julia - SOCIOLOGIA">Julia - SOCIOLOGIA</option>
										<option value="Elias - QUIMICA">Elias - QUIMICA</option>
										<option value="Julia - QUIMICA">Julia - QUÍMICA</option>
										<option value="Bruno - MATEMATICA">Bruno - MATEMATICA</option>
										<option value="Adler - MATEMATICA">Adler - MATEMATICA</option>
										<option value="Ricardo - MATEMATICA">Ricardo - MATEMATICA</option>
										<option value="Gabriel - FÍSICA">Gabriel - FÍSICA</option>
										<option value="Francisco - FISICA">Francisco - FÍSICA</option>
										<option value="Talita - ESPANHOL">Talita - ESPANHOL</option>
										<option value="Luciana - ESPANHOL">Luciana - ESPANHOL</option>
										<option value="Alessandra - INGLES">Alessandra - INGLÊS</option>
										<option value="Euzebio - INGLES">Euzébio - INGLÊS</option>
										<option value="Graziela - REDACAO">Graziela - REDAÇÃO</option>
										<option value="Ana - REDACAO">Ana - REDAÇÃO</option>
									</select>
			</td>
			<td><select name="a1s2"required="required" >
										<option value=""></option>
										<option value="CIRCULO">CIRCULO</option>
										<option value="Leonardo - CIENCIAS">Leonardo - CIÊNCIAS</option>
										<option value="Thiago - BIOLOGIA">Thiago - BIOLOGIA</option>
										<option value="Parada - BIOLOGIA">Parada - BIOLOGIA</option>
										<option value="Luan - GEOGRAFIA">Luan - GEOGRAFIA</option>
										<option value="Rafael - GEOGRAFIA">Rafael - GEOGRAFIA</option>
										<option value="Stella - HISTORIA">Stella - HISTÓRIA</option>
										<option value="Veronica - HISTORIA">Verônica - HISTÓRIA</option>
										<option value="Manuela - GRAMATICA">Manuela - GRAMÁTICA</option>
										<option value="Danilo - GRAMATICA">Danilo - GRAMÁTICA</option>
										<option value="Marcelo - LITERATURA">Marcelo - LITERATURA</option>
										<option value="Lara - LITERATURA">Lara - LITERATURA</option>
										<option value="Victor - SOCIOLOGIA">Victor - SOCIOLOGIA</option>
										<option value="Julia - SOCIOLOGIA">Julia - SOCIOLOGIA</option>
										<option value="Elias - QUIMICA">Elias - QUIMICA</option>
										<option value="Julia - QUIMICA">Julia - QUÍMICA</option>
										<option value="Bruno - MATEMATICA">Bruno - MATEMATICA</option>
										<option value="Adler - MATEMATICA">Adler - MATEMATICA</option>
										<option value="Ricardo - MATEMATICA">Ricardo - MATEMATICA</option>
										<option value="Gabriel - FÍSICA">Gabriel - FÍSICA</option>
										<option value="Francisco - FISICA">Francisco - FÍSICA</option>
										<option value="Talita - ESPANHOL">Talita - ESPANHOL</option>
										<option value="Luciana - ESPANHOL">Luciana - ESPANHOL</option>
										<option value="Alessandra - INGLES">Alessandra - INGLÊS</option>
										<option value="Euzebio - INGLES">Euzébio - INGLÊS</option>
										<option value="Graziela - REDACAO">Graziela - REDAÇÃO</option>
										<option value="Ana - REDACAO">Ana - REDAÇÃO</option>
									</select>
			</td>
			<td><select name="a1s3"required="required" >
										<option value=""></option>
										<option value="CIRCULO">CIRCULO</option>
										<option value="Leonardo - CIENCIAS">Leonardo - CIÊNCIAS</option>
										<option value="Thiago - BIOLOGIA">Thiago - BIOLOGIA</option>
										<option value="Parada - BIOLOGIA">Parada - BIOLOGIA</option>
										<option value="Luan - GEOGRAFIA">Luan - GEOGRAFIA</option>
										<option value="Rafael - GEOGRAFIA">Rafael - GEOGRAFIA</option>
										<option value="Stella - HISTORIA">Stella - HISTÓRIA</option>
										<option value="Veronica - HISTORIA">Verônica - HISTÓRIA</option>
										<option value="Manuela - GRAMATICA">Manuela - GRAMÁTICA</option>
										<option value="Danilo - GRAMATICA">Danilo - GRAMÁTICA</option>
										<option value="Marcelo - LITERATURA">Marcelo - LITERATURA</option>
										<option value="Lara - LITERATURA">Lara - LITERATURA</option>
										<option value="Victor - SOCIOLOGIA">Victor - SOCIOLOGIA</option>
										<option value="Julia - SOCIOLOGIA">Julia - SOCIOLOGIA</option>
										<option value="Elias - QUIMICA">Elias - QUIMICA</option>
										<option value="Julia - QUIMICA">Julia - QUÍMICA</option>
										<option value="Bruno - MATEMATICA">Bruno - MATEMATICA</option>
										<option value="Adler - MATEMATICA">Adler - MATEMATICA</option>
										<option value="Ricardo - MATEMATICA">Ricardo - MATEMATICA</option>
										<option value="Gabriel - FÍSICA">Gabriel - FÍSICA</option>
										<option value="Francisco - FISICA">Francisco - FÍSICA</option>
										<option value="Talita - ESPANHOL">Talita - ESPANHOL</option>
										<option value="Luciana - ESPANHOL">Luciana - ESPANHOL</option>
										<option value="Alessandra - INGLES">Alessandra - INGLÊS</option>
										<option value="Euzebio - INGLES">Euzébio - INGLÊS</option>
										<option value="Graziela - REDACAO">Graziela - REDAÇÃO</option>
										<option value="Ana - REDACAO">Ana - REDAÇÃO</option>
									</select>
			</td>
			<td><select name="a1s4"required="required" >
										<option value=""></option>
										<option value="CIRCULO">CIRCULO</option>
										<option value="Leonardo - CIENCIAS">Leonardo - CIÊNCIAS</option>
										<option value="Thiago - BIOLOGIA">Thiago - BIOLOGIA</option>
										<option value="Parada - BIOLOGIA">Parada - BIOLOGIA</option>
										<option value="Luan - GEOGRAFIA">Luan - GEOGRAFIA</option>
										<option value="Rafael - GEOGRAFIA">Rafael - GEOGRAFIA</option>
										<option value="Stella - HISTORIA">Stella - HISTÓRIA</option>
										<option value="Veronica - HISTORIA">Verônica - HISTÓRIA</option>
										<option value="Manuela - GRAMATICA">Manuela - GRAMÁTICA</option>
										<option value="Danilo - GRAMATICA">Danilo - GRAMÁTICA</option>
										<option value="Marcelo - LITERATURA">Marcelo - LITERATURA</option>
										<option value="Lara - LITERATURA">Lara - LITERATURA</option>
										<option value="Victor - SOCIOLOGIA">Victor - SOCIOLOGIA</option>
										<option value="Julia - SOCIOLOGIA">Julia - SOCIOLOGIA</option>
										<option value="Elias - QUIMICA">Elias - QUIMICA</option>
										<option value="Julia - QUIMICA">Julia - QUÍMICA</option>
										<option value="Bruno - MATEMATICA">Bruno - MATEMATICA</option>
										<option value="Adler - MATEMATICA">Adler - MATEMATICA</option>
										<option value="Ricardo - MATEMATICA">Ricardo - MATEMATICA</option>
										<option value="Gabriel - FÍSICA">Gabriel - FÍSICA</option>
										<option value="Francisco - FISICA">Francisco - FÍSICA</option>
										<option value="Talita - ESPANHOL">Talita - ESPANHOL</option>
										<option value="Luciana - ESPANHOL">Luciana - ESPANHOL</option>
										<option value="Alessandra - INGLES">Alessandra - INGLÊS</option>
										<option value="Euzebio - INGLES">Euzébio - INGLÊS</option>
										<option value="Graziela - REDACAO">Graziela - REDAÇÃO</option>
										<option value="Ana - REDACAO">Ana - REDAÇÃO</option>
									</select>
			</td>
		</tr>
		<tr>
			<td align="center">9h - 10h</td>
				<td><select name="a2s1"required="required" >
										<option value=""></option>
										<option value="CIRCULO">CIRCULO</option>
										<option value="Leonardo - CIENCIAS">Leonardo - CIÊNCIAS</option>
										<option value="Thiago - BIOLOGIA">Thiago - BIOLOGIA</option>
										<option value="Parada - BIOLOGIA">Parada - BIOLOGIA</option>
										<option value="Luan - GEOGRAFIA">Luan - GEOGRAFIA</option>
										<option value="Rafael - GEOGRAFIA">Rafael - GEOGRAFIA</option>
										<option value="Stella - HISTORIA">Stella - HISTÓRIA</option>
										<option value="Veronica - HISTORIA">Verônica - HISTÓRIA</option>
										<option value="Manuela - GRAMATICA">Manuela - GRAMÁTICA</option>
										<option value="Danilo - GRAMATICA">Danilo - GRAMÁTICA</option>
										<option value="Marcelo - LITERATURA">Marcelo - LITERATURA</option>
										<option value="Lara - LITERATURA">Lara - LITERATURA</option>
										<option value="Victor - SOCIOLOGIA">Victor - SOCIOLOGIA</option>
										<option value="Julia - SOCIOLOGIA">Julia - SOCIOLOGIA</option>
										<option value="Elias - QUIMICA">Elias - QUIMICA</option>
										<option value="Julia - QUIMICA">Julia - QUÍMICA</option>
										<option value="Bruno - MATEMATICA">Bruno - MATEMATICA</option>
										<option value="Adler - MATEMATICA">Adler - MATEMATICA</option>
										<option value="Ricardo - MATEMATICA">Ricardo - MATEMATICA</option>
										<option value="Gabriel - FÍSICA">Gabriel - FÍSICA</option>
										<option value="Francisco - FISICA">Francisco - FÍSICA</option>
										<option value="Talita - ESPANHOL">Talita - ESPANHOL</option>
										<option value="Luciana - ESPANHOL">Luciana - ESPANHOL</option>
										<option value="Alessandra - INGLES">Alessandra - INGLÊS</option>
										<option value="Euzebio - INGLES">Euzébio - INGLÊS</option>
										<option value="Graziela - REDACAO">Graziela - REDAÇÃO</option>
										<option value="Ana - REDACAO">Ana - REDAÇÃO</option>
									</select>
			</td>
			<td><select name="a2s2"required="required" >
										<option value=""></option>
										<option value="CIRCULO">CIRCULO</option>
										<option value="Leonardo - CIENCIAS">Leonardo - CIÊNCIAS</option>
										<option value="Thiago - BIOLOGIA">Thiago - BIOLOGIA</option>
										<option value="Parada - BIOLOGIA">Parada - BIOLOGIA</option>
										<option value="Luan - GEOGRAFIA">Luan - GEOGRAFIA</option>
										<option value="Rafael - GEOGRAFIA">Rafael - GEOGRAFIA</option>
										<option value="Stella - HISTORIA">Stella - HISTÓRIA</option>
										<option value="Veronica - HISTORIA">Verônica - HISTÓRIA</option>
										<option value="Manuela - GRAMATICA">Manuela - GRAMÁTICA</option>
										<option value="Danilo - GRAMATICA">Danilo - GRAMÁTICA</option>
										<option value="Marcelo - LITERATURA">Marcelo - LITERATURA</option>
										<option value="Lara - LITERATURA">Lara - LITERATURA</option>
										<option value="Victor - SOCIOLOGIA">Victor - SOCIOLOGIA</option>
										<option value="Julia - SOCIOLOGIA">Julia - SOCIOLOGIA</option>
										<option value="Elias - QUIMICA">Elias - QUIMICA</option>
										<option value="Julia - QUIMICA">Julia - QUÍMICA</option>
										<option value="Bruno - MATEMATICA">Bruno - MATEMATICA</option>
										<option value="Adler - MATEMATICA">Adler - MATEMATICA</option>
										<option value="Ricardo - MATEMATICA">Ricardo - MATEMATICA</option>
										<option value="Gabriel - FÍSICA">Gabriel - FÍSICA</option>
										<option value="Francisco - FISICA">Francisco - FÍSICA</option>
										<option value="Talita - ESPANHOL">Talita - ESPANHOL</option>
										<option value="Luciana - ESPANHOL">Luciana - ESPANHOL</option>
										<option value="Alessandra - INGLES">Alessandra - INGLÊS</option>
										<option value="Euzebio - INGLES">Euzébio - INGLÊS</option>
										<option value="Graziela - REDACAO">Graziela - REDAÇÃO</option>
										<option value="Ana - REDACAO">Ana - REDAÇÃO</option>
									</select>
			</td>
			<td><select name="a2s3"required="required" >
										<option value=""></option>
										<option value="CIRCULO">CIRCULO</option>
										<option value="Leonardo - CIENCIAS">Leonardo - CIÊNCIAS</option>
										<option value="Thiago - BIOLOGIA">Thiago - BIOLOGIA</option>
										<option value="Parada - BIOLOGIA">Parada - BIOLOGIA</option>
										<option value="Luan - GEOGRAFIA">Luan - GEOGRAFIA</option>
										<option value="Rafael - GEOGRAFIA">Rafael - GEOGRAFIA</option>
										<option value="Stella - HISTORIA">Stella - HISTÓRIA</option>
										<option value="Veronica - HISTORIA">Verônica - HISTÓRIA</option>
										<option value="Manuela - GRAMATICA">Manuela - GRAMÁTICA</option>
										<option value="Danilo - GRAMATICA">Danilo - GRAMÁTICA</option>
										<option value="Marcelo - LITERATURA">Marcelo - LITERATURA</option>
										<option value="Lara - LITERATURA">Lara - LITERATURA</option>
										<option value="Victor - SOCIOLOGIA">Victor - SOCIOLOGIA</option>
										<option value="Julia - SOCIOLOGIA">Julia - SOCIOLOGIA</option>
										<option value="Elias - QUIMICA">Elias - QUIMICA</option>
										<option value="Julia - QUIMICA">Julia - QUÍMICA</option>
										<option value="Bruno - MATEMATICA">Bruno - MATEMATICA</option>
										<option value="Adler - MATEMATICA">Adler - MATEMATICA</option>
										<option value="Ricardo - MATEMATICA">Ricardo - MATEMATICA</option>
										<option value="Gabriel - FÍSICA">Gabriel - FÍSICA</option>
										<option value="Francisco - FISICA">Francisco - FÍSICA</option>
										<option value="Talita - ESPANHOL">Talita - ESPANHOL</option>
										<option value="Luciana - ESPANHOL">Luciana - ESPANHOL</option>
										<option value="Alessandra - INGLES">Alessandra - INGLÊS</option>
										<option value="Euzebio - INGLES">Euzébio - INGLÊS</option>
										<option value="Graziela - REDACAO">Graziela - REDAÇÃO</option>
										<option value="Ana - REDACAO">Ana - REDAÇÃO</option>
									</select>
			</td>
			<td><select name="a2s4"required="required" >
										<option value=""></option>
										<option value="CIRCULO">CIRCULO</option>
										<option value="Leonardo - CIENCIAS">Leonardo - CIÊNCIAS</option>
										<option value="Thiago - BIOLOGIA">Thiago - BIOLOGIA</option>
										<option value="Parada - BIOLOGIA">Parada - BIOLOGIA</option>
										<option value="Luan - GEOGRAFIA">Luan - GEOGRAFIA</option>
										<option value="Rafael - GEOGRAFIA">Rafael - GEOGRAFIA</option>
										<option value="Stella - HISTORIA">Stella - HISTÓRIA</option>
										<option value="Veronica - HISTORIA">Verônica - HISTÓRIA</option>
										<option value="Manuela - GRAMATICA">Manuela - GRAMÁTICA</option>
										<option value="Danilo - GRAMATICA">Danilo - GRAMÁTICA</option>
										<option value="Marcelo - LITERATURA">Marcelo - LITERATURA</option>
										<option value="Lara - LITERATURA">Lara - LITERATURA</option>
										<option value="Victor - SOCIOLOGIA">Victor - SOCIOLOGIA</option>
										<option value="Julia - SOCIOLOGIA">Julia - SOCIOLOGIA</option>
										<option value="Elias - QUIMICA">Elias - QUIMICA</option>
										<option value="Julia - QUIMICA">Julia - QUÍMICA</option>
										<option value="Bruno - MATEMATICA">Bruno - MATEMATICA</option>
										<option value="Adler - MATEMATICA">Adler - MATEMATICA</option>
										<option value="Ricardo - MATEMATICA">Ricardo - MATEMATICA</option>
										<option value="Gabriel - FÍSICA">Gabriel - FÍSICA</option>
										<option value="Francisco - FISICA">Francisco - FÍSICA</option>
										<option value="Talita - ESPANHOL">Talita - ESPANHOL</option>
										<option value="Luciana - ESPANHOL">Luciana - ESPANHOL</option>
										<option value="Alessandra - INGLES">Alessandra - INGLÊS</option>
										<option value="Euzebio - INGLES">Euzébio - INGLÊS</option>
										<option value="Graziela - REDACAO">Graziela - REDAÇÃO</option>
										<option value="Ana - REDACAO">Ana - REDAÇÃO</option>
									</select>
			</td>
		</tr>
		<tr>
			<td align="center">10h - 10h15</td>
			<td colspan="3" align="center"><font color="red"><b>I-N-T-E-R-V-A-L-O</td>
		</tr>
		<tr>
			<td align="center">10h15 - 11h15</td>
				<td><select name="a3s1"required="required" >
										<option value=""></option>
										<option value="CIRCULO">CIRCULO</option>
										<option value="Leonardo - CIENCIAS">Leonardo - CIÊNCIAS</option>
										<option value="Thiago - BIOLOGIA">Thiago - BIOLOGIA</option>
										<option value="Parada - BIOLOGIA">Parada - BIOLOGIA</option>
										<option value="Luan - GEOGRAFIA">Luan - GEOGRAFIA</option>
										<option value="Rafael - GEOGRAFIA">Rafael - GEOGRAFIA</option>
										<option value="Stella - HISTORIA">Stella - HISTÓRIA</option>
										<option value="Veronica - HISTORIA">Verônica - HISTÓRIA</option>
										<option value="Manuela - GRAMATICA">Manuela - GRAMÁTICA</option>
										<option value="Danilo - GRAMATICA">Danilo - GRAMÁTICA</option>
										<option value="Marcelo - LITERATURA">Marcelo - LITERATURA</option>
										<option value="Lara - LITERATURA">Lara - LITERATURA</option>
										<option value="Victor - SOCIOLOGIA">Victor - SOCIOLOGIA</option>
										<option value="Julia - SOCIOLOGIA">Julia - SOCIOLOGIA</option>
										<option value="Elias - QUIMICA">Elias - QUIMICA</option>
										<option value="Julia - QUIMICA">Julia - QUÍMICA</option>
										<option value="Bruno - MATEMATICA">Bruno - MATEMATICA</option>
										<option value="Adler - MATEMATICA">Adler - MATEMATICA</option>
										<option value="Ricardo - MATEMATICA">Ricardo - MATEMATICA</option>
										<option value="Gabriel - FÍSICA">Gabriel - FÍSICA</option>
										<option value="Francisco - FISICA">Francisco - FÍSICA</option>
										<option value="Talita - ESPANHOL">Talita - ESPANHOL</option>
										<option value="Luciana - ESPANHOL">Luciana - ESPANHOL</option>
										<option value="Alessandra - INGLES">Alessandra - INGLÊS</option>
										<option value="Euzebio - INGLES">Euzébio - INGLÊS</option>
										<option value="Graziela - REDACAO">Graziela - REDAÇÃO</option>
										<option value="Ana - REDACAO">Ana - REDAÇÃO</option>
									</select>
			</td>
			<td><select name="a3s2"required="required" >
										<option value=""></option>
										<option value="CIRCULO">CIRCULO</option>
										<option value="Leonardo - CIENCIAS">Leonardo - CIÊNCIAS</option>
										<option value="Thiago - BIOLOGIA">Thiago - BIOLOGIA</option>
										<option value="Parada - BIOLOGIA">Parada - BIOLOGIA</option>
										<option value="Luan - GEOGRAFIA">Luan - GEOGRAFIA</option>
										<option value="Rafael - GEOGRAFIA">Rafael - GEOGRAFIA</option>
										<option value="Stella - HISTORIA">Stella - HISTÓRIA</option>
										<option value="Veronica - HISTORIA">Verônica - HISTÓRIA</option>
										<option value="Manuela - GRAMATICA">Manuela - GRAMÁTICA</option>
										<option value="Danilo - GRAMATICA">Danilo - GRAMÁTICA</option>
										<option value="Marcelo - LITERATURA">Marcelo - LITERATURA</option>
										<option value="Lara - LITERATURA">Lara - LITERATURA</option>
										<option value="Victor - SOCIOLOGIA">Victor - SOCIOLOGIA</option>
										<option value="Julia - SOCIOLOGIA">Julia - SOCIOLOGIA</option>
										<option value="Elias - QUIMICA">Elias - QUIMICA</option>
										<option value="Julia - QUIMICA">Julia - QUÍMICA</option>
										<option value="Bruno - MATEMATICA">Bruno - MATEMATICA</option>
										<option value="Adler - MATEMATICA">Adler - MATEMATICA</option>
										<option value="Ricardo - MATEMATICA">Ricardo - MATEMATICA</option>
										<option value="Gabriel - FÍSICA">Gabriel - FÍSICA</option>
										<option value="Francisco - FISICA">Francisco - FÍSICA</option>
										<option value="Talita - ESPANHOL">Talita - ESPANHOL</option>
										<option value="Luciana - ESPANHOL">Luciana - ESPANHOL</option>
										<option value="Alessandra - INGLES">Alessandra - INGLÊS</option>
										<option value="Euzebio - INGLES">Euzébio - INGLÊS</option>
										<option value="Graziela - REDACAO">Graziela - REDAÇÃO</option>
										<option value="Ana - REDACAO">Ana - REDAÇÃO</option>
									</select>
			</td>
			<td><select name="a3s3"required="required" >
										<option value=""></option>
										<option value="CIRCULO">CIRCULO</option>
										<option value="Leonardo - CIENCIAS">Leonardo - CIÊNCIAS</option>
										<option value="Thiago - BIOLOGIA">Thiago - BIOLOGIA</option>
										<option value="Parada - BIOLOGIA">Parada - BIOLOGIA</option>
										<option value="Luan - GEOGRAFIA">Luan - GEOGRAFIA</option>
										<option value="Rafael - GEOGRAFIA">Rafael - GEOGRAFIA</option>
										<option value="Stella - HISTORIA">Stella - HISTÓRIA</option>
										<option value="Veronica - HISTORIA">Verônica - HISTÓRIA</option>
										<option value="Manuela - GRAMATICA">Manuela - GRAMÁTICA</option>
										<option value="Danilo - GRAMATICA">Danilo - GRAMÁTICA</option>
										<option value="Marcelo - LITERATURA">Marcelo - LITERATURA</option>
										<option value="Lara - LITERATURA">Lara - LITERATURA</option>
										<option value="Victor - SOCIOLOGIA">Victor - SOCIOLOGIA</option>
										<option value="Julia - SOCIOLOGIA">Julia - SOCIOLOGIA</option>
										<option value="Elias - QUIMICA">Elias - QUIMICA</option>
										<option value="Julia - QUIMICA">Julia - QUÍMICA</option>
										<option value="Bruno - MATEMATICA">Bruno - MATEMATICA</option>
										<option value="Adler - MATEMATICA">Adler - MATEMATICA</option>
										<option value="Ricardo - MATEMATICA">Ricardo - MATEMATICA</option>
										<option value="Gabriel - FÍSICA">Gabriel - FÍSICA</option>
										<option value="Francisco - FISICA">Francisco - FÍSICA</option>
										<option value="Talita - ESPANHOL">Talita - ESPANHOL</option>
										<option value="Luciana - ESPANHOL">Luciana - ESPANHOL</option>
										<option value="Alessandra - INGLES">Alessandra - INGLÊS</option>
										<option value="Euzebio - INGLES">Euzébio - INGLÊS</option>
										<option value="Graziela - REDACAO">Graziela - REDAÇÃO</option>
										<option value="Ana - REDACAO">Ana - REDAÇÃO</option>
									</select>
			</td>
			<td><select name="a3s4"required="required" >
										<option value=""></option>
										<option value="CIRCULO">CIRCULO</option>
										<option value="Leonardo - CIENCIAS">Leonardo - CIÊNCIAS</option>
										<option value="Thiago - BIOLOGIA">Thiago - BIOLOGIA</option>
										<option value="Parada - BIOLOGIA">Parada - BIOLOGIA</option>
										<option value="Luan - GEOGRAFIA">Luan - GEOGRAFIA</option>
										<option value="Rafael - GEOGRAFIA">Rafael - GEOGRAFIA</option>
										<option value="Stella - HISTORIA">Stella - HISTÓRIA</option>
										<option value="Veronica - HISTORIA">Verônica - HISTÓRIA</option>
										<option value="Manuela - GRAMATICA">Manuela - GRAMÁTICA</option>
										<option value="Danilo - GRAMATICA">Danilo - GRAMÁTICA</option>
										<option value="Marcelo - LITERATURA">Marcelo - LITERATURA</option>
										<option value="Lara - LITERATURA">Lara - LITERATURA</option>
										<option value="Victor - SOCIOLOGIA">Victor - SOCIOLOGIA</option>
										<option value="Julia - SOCIOLOGIA">Julia - SOCIOLOGIA</option>
										<option value="Elias - QUIMICA">Elias - QUIMICA</option>
										<option value="Julia - QUIMICA">Julia - QUÍMICA</option>
										<option value="Bruno - MATEMATICA">Bruno - MATEMATICA</option>
										<option value="Adler - MATEMATICA">Adler - MATEMATICA</option>
										<option value="Ricardo - MATEMATICA">Ricardo - MATEMATICA</option>
										<option value="Gabriel - FÍSICA">Gabriel - FÍSICA</option>
										<option value="Francisco - FISICA">Francisco - FÍSICA</option>
										<option value="Talita - ESPANHOL">Talita - ESPANHOL</option>
										<option value="Luciana - ESPANHOL">Luciana - ESPANHOL</option>
										<option value="Alessandra - INGLES">Alessandra - INGLÊS</option>
										<option value="Euzebio - INGLES">Euzébio - INGLÊS</option>
										<option value="Graziela - REDACAO">Graziela - REDAÇÃO</option>
										<option value="Ana - REDACAO">Ana - REDAÇÃO</option>
									</select>
			</td>
		</tr>
		<tr>
			<td align="center">11h15 - 12h15</td>	
				<td><select name="a4s1"required="required" >
										<option value=""></option>
										<option value="CIRCULO">CIRCULO</option>
										<option value="Leonardo - CIENCIAS">Leonardo - CIÊNCIAS</option>
										<option value="Thiago - BIOLOGIA">Thiago - BIOLOGIA</option>
										<option value="Parada - BIOLOGIA">Parada - BIOLOGIA</option>
										<option value="Luan - GEOGRAFIA">Luan - GEOGRAFIA</option>
										<option value="Rafael - GEOGRAFIA">Rafael - GEOGRAFIA</option>
										<option value="Stella - HISTORIA">Stella - HISTÓRIA</option>
										<option value="Veronica - HISTORIA">Verônica - HISTÓRIA</option>
										<option value="Manuela - GRAMATICA">Manuela - GRAMÁTICA</option>
										<option value="Danilo - GRAMATICA">Danilo - GRAMÁTICA</option>
										<option value="Marcelo - LITERATURA">Marcelo - LITERATURA</option>
										<option value="Lara - LITERATURA">Lara - LITERATURA</option>
										<option value="Victor - SOCIOLOGIA">Victor - SOCIOLOGIA</option>
										<option value="Julia - SOCIOLOGIA">Julia - SOCIOLOGIA</option>
										<option value="Elias - QUIMICA">Elias - QUIMICA</option>
										<option value="Julia - QUIMICA">Julia - QUÍMICA</option>
										<option value="Bruno - MATEMATICA">Bruno - MATEMATICA</option>
										<option value="Adler - MATEMATICA">Adler - MATEMATICA</option>
										<option value="Ricardo - MATEMATICA">Ricardo - MATEMATICA</option>
										<option value="Gabriel - FÍSICA">Gabriel - FÍSICA</option>
										<option value="Francisco - FISICA">Francisco - FÍSICA</option>
										<option value="Talita - ESPANHOL">Talita - ESPANHOL</option>
										<option value="Luciana - ESPANHOL">Luciana - ESPANHOL</option>
										<option value="Alessandra - INGLES">Alessandra - INGLÊS</option>
										<option value="Euzebio - INGLES">Euzébio - INGLÊS</option>
										<option value="Graziela - REDACAO">Graziela - REDAÇÃO</option>
										<option value="Ana - REDACAO">Ana - REDAÇÃO</option>
									</select>
			</td>
			<td><select name="a4s2"required="required" >
										<option value=""></option>
										<option value="CIRCULO">CIRCULO</option>
										<option value="Leonardo - CIENCIAS">Leonardo - CIÊNCIAS</option>
										<option value="Thiago - BIOLOGIA">Thiago - BIOLOGIA</option>
										<option value="Parada - BIOLOGIA">Parada - BIOLOGIA</option>
										<option value="Luan - GEOGRAFIA">Luan - GEOGRAFIA</option>
										<option value="Rafael - GEOGRAFIA">Rafael - GEOGRAFIA</option>
										<option value="Stella - HISTORIA">Stella - HISTÓRIA</option>
										<option value="Veronica - HISTORIA">Verônica - HISTÓRIA</option>
										<option value="Manuela - GRAMATICA">Manuela - GRAMÁTICA</option>
										<option value="Danilo - GRAMATICA">Danilo - GRAMÁTICA</option>
										<option value="Marcelo - LITERATURA">Marcelo - LITERATURA</option>
										<option value="Lara - LITERATURA">Lara - LITERATURA</option>
										<option value="Victor - SOCIOLOGIA">Victor - SOCIOLOGIA</option>
										<option value="Julia - SOCIOLOGIA">Julia - SOCIOLOGIA</option>
										<option value="Elias - QUIMICA">Elias - QUIMICA</option>
										<option value="Julia - QUIMICA">Julia - QUÍMICA</option>
										<option value="Bruno - MATEMATICA">Bruno - MATEMATICA</option>
										<option value="Adler - MATEMATICA">Adler - MATEMATICA</option>
										<option value="Ricardo - MATEMATICA">Ricardo - MATEMATICA</option>
										<option value="Gabriel - FÍSICA">Gabriel - FÍSICA</option>
										<option value="Francisco - FISICA">Francisco - FÍSICA</option>
										<option value="Talita - ESPANHOL">Talita - ESPANHOL</option>
										<option value="Luciana - ESPANHOL">Luciana - ESPANHOL</option>
										<option value="Alessandra - INGLES">Alessandra - INGLÊS</option>
										<option value="Euzebio - INGLES">Euzébio - INGLÊS</option>
										<option value="Graziela - REDACAO">Graziela - REDAÇÃO</option>
										<option value="Ana - REDACAO">Ana - REDAÇÃO</option>
									</select>
			</td>
			<td><select name="a4s3"required="required" >
										<option value=""></option>
										<option value="CIRCULO">CIRCULO</option>
										<option value="Leonardo - CIENCIAS">Leonardo - CIÊNCIAS</option>
										<option value="Thiago - BIOLOGIA">Thiago - BIOLOGIA</option>
										<option value="Parada - BIOLOGIA">Parada - BIOLOGIA</option>
										<option value="Luan - GEOGRAFIA">Luan - GEOGRAFIA</option>
										<option value="Rafael - GEOGRAFIA">Rafael - GEOGRAFIA</option>
										<option value="Stella - HISTORIA">Stella - HISTÓRIA</option>
										<option value="Veronica - HISTORIA">Verônica - HISTÓRIA</option>
										<option value="Manuela - GRAMATICA">Manuela - GRAMÁTICA</option>
										<option value="Danilo - GRAMATICA">Danilo - GRAMÁTICA</option>
										<option value="Marcelo - LITERATURA">Marcelo - LITERATURA</option>
										<option value="Lara - LITERATURA">Lara - LITERATURA</option>
										<option value="Victor - SOCIOLOGIA">Victor - SOCIOLOGIA</option>
										<option value="Julia - SOCIOLOGIA">Julia - SOCIOLOGIA</option>
										<option value="Elias - QUIMICA">Elias - QUIMICA</option>
										<option value="Julia - QUIMICA">Julia - QUÍMICA</option>
										<option value="Bruno - MATEMATICA">Bruno - MATEMATICA</option>
										<option value="Adler - MATEMATICA">Adler - MATEMATICA</option>
										<option value="Ricardo - MATEMATICA">Ricardo - MATEMATICA</option>
										<option value="Gabriel - FÍSICA">Gabriel - FÍSICA</option>
										<option value="Francisco - FISICA">Francisco - FÍSICA</option>
										<option value="Talita - ESPANHOL">Talita - ESPANHOL</option>
										<option value="Luciana - ESPANHOL">Luciana - ESPANHOL</option>
										<option value="Alessandra - INGLES">Alessandra - INGLÊS</option>
										<option value="Euzebio - INGLES">Euzébio - INGLÊS</option>
										<option value="Graziela - REDACAO">Graziela - REDAÇÃO</option>
										<option value="Ana - REDACAO">Ana - REDAÇÃO</option>
									</select>
			</td>
			<td><select name="a4s4"required="required" >
										<option value=""></option>
										<option value="CIRCULO">CIRCULO</option>
										<option value="Leonardo - CIENCIAS">Leonardo - CIÊNCIAS</option>
										<option value="Thiago - BIOLOGIA">Thiago - BIOLOGIA</option>
										<option value="Parada - BIOLOGIA">Parada - BIOLOGIA</option>
										<option value="Luan - GEOGRAFIA">Luan - GEOGRAFIA</option>
										<option value="Rafael - GEOGRAFIA">Rafael - GEOGRAFIA</option>
										<option value="Stella - HISTORIA">Stella - HISTÓRIA</option>
										<option value="Veronica - HISTORIA">Verônica - HISTÓRIA</option>
										<option value="Manuela - GRAMATICA">Manuela - GRAMÁTICA</option>
										<option value="Danilo - GRAMATICA">Danilo - GRAMÁTICA</option>
										<option value="Marcelo - LITERATURA">Marcelo - LITERATURA</option>
										<option value="Lara - LITERATURA">Lara - LITERATURA</option>
										<option value="Victor - SOCIOLOGIA">Victor - SOCIOLOGIA</option>
										<option value="Julia - SOCIOLOGIA">Julia - SOCIOLOGIA</option>
										<option value="Elias - QUIMICA">Elias - QUIMICA</option>
										<option value="Julia - QUIMICA">Julia - QUÍMICA</option>
										<option value="Bruno - MATEMATICA">Bruno - MATEMATICA</option>
										<option value="Adler - MATEMATICA">Adler - MATEMATICA</option>
										<option value="Ricardo - MATEMATICA">Ricardo - MATEMATICA</option>
										<option value="Gabriel - FÍSICA">Gabriel - FÍSICA</option>
										<option value="Francisco - FISICA">Francisco - FÍSICA</option>
										<option value="Talita - ESPANHOL">Talita - ESPANHOL</option>
										<option value="Luciana - ESPANHOL">Luciana - ESPANHOL</option>
										<option value="Alessandra - INGLES">Alessandra - INGLÊS</option>
										<option value="Euzebio - INGLES">Euzébio - INGLÊS</option>
										<option value="Graziela - REDACAO">Graziela - REDAÇÃO</option>
										<option value="Ana - REDACAO">Ana - REDAÇÃO</option>
									</select>
			</td>
		</tr>
		<tr>
			<td align="center">12h15 - 13h45</td>
			<td colspan="4" align="center"><font color="green"><b>ALMOÇO Coletivo / Oficina: <input type="text" name="oficina"  size="50" required="required"></td>
		</tr>
		<tr>
			<td align="center">13h45 - 14h45</td>
				<td><select name="a5s1"required="required" >
										<option value=""></option>
										<option value="CIRCULO">CIRCULO</option>
										<option value="Leonardo - CIENCIAS">Leonardo - CIÊNCIAS</option>
										<option value="Thiago - BIOLOGIA">Thiago - BIOLOGIA</option>
										<option value="Parada - BIOLOGIA">Parada - BIOLOGIA</option>
										<option value="Luan - GEOGRAFIA">Luan - GEOGRAFIA</option>
										<option value="Rafael - GEOGRAFIA">Rafael - GEOGRAFIA</option>
										<option value="Stella - HISTORIA">Stella - HISTÓRIA</option>
										<option value="Veronica - HISTORIA">Verônica - HISTÓRIA</option>
										<option value="Manuela - GRAMATICA">Manuela - GRAMÁTICA</option>
										<option value="Danilo - GRAMATICA">Danilo - GRAMÁTICA</option>
										<option value="Marcelo - LITERATURA">Marcelo - LITERATURA</option>
										<option value="Lara - LITERATURA">Lara - LITERATURA</option>
										<option value="Victor - SOCIOLOGIA">Victor - SOCIOLOGIA</option>
										<option value="Julia - SOCIOLOGIA">Julia - SOCIOLOGIA</option>
										<option value="Elias - QUIMICA">Elias - QUIMICA</option>
										<option value="Julia - QUIMICA">Julia - QUÍMICA</option>
										<option value="Bruno - MATEMATICA">Bruno - MATEMATICA</option>
										<option value="Adler - MATEMATICA">Adler - MATEMATICA</option>
										<option value="Ricardo - MATEMATICA">Ricardo - MATEMATICA</option>
										<option value="Gabriel - FÍSICA">Gabriel - FÍSICA</option>
										<option value="Francisco - FISICA">Francisco - FÍSICA</option>
										<option value="Talita - ESPANHOL">Talita - ESPANHOL</option>
										<option value="Luciana - ESPANHOL">Luciana - ESPANHOL</option>
										<option value="Alessandra - INGLES">Alessandra - INGLÊS</option>
										<option value="Euzebio - INGLES">Euzébio - INGLÊS</option>
										<option value="Graziela - REDACAO">Graziela - REDAÇÃO</option>
										<option value="Ana - REDACAO">Ana - REDAÇÃO</option>
									</select>
			</td>
			<td><select name="a5s2"required="required" >
										<option value=""></option>
										<option value="CIRCULO">CIRCULO</option>
										<option value="Leonardo - CIENCIAS">Leonardo - CIÊNCIAS</option>
										<option value="Thiago - BIOLOGIA">Thiago - BIOLOGIA</option>
										<option value="Parada - BIOLOGIA">Parada - BIOLOGIA</option>
										<option value="Luan - GEOGRAFIA">Luan - GEOGRAFIA</option>
										<option value="Rafael - GEOGRAFIA">Rafael - GEOGRAFIA</option>
										<option value="Stella - HISTORIA">Stella - HISTÓRIA</option>
										<option value="Veronica - HISTORIA">Verônica - HISTÓRIA</option>
										<option value="Manuela - GRAMATICA">Manuela - GRAMÁTICA</option>
										<option value="Danilo - GRAMATICA">Danilo - GRAMÁTICA</option>
										<option value="Marcelo - LITERATURA">Marcelo - LITERATURA</option>
										<option value="Lara - LITERATURA">Lara - LITERATURA</option>
										<option value="Victor - SOCIOLOGIA">Victor - SOCIOLOGIA</option>
										<option value="Julia - SOCIOLOGIA">Julia - SOCIOLOGIA</option>
										<option value="Elias - QUIMICA">Elias - QUIMICA</option>
										<option value="Julia - QUIMICA">Julia - QUÍMICA</option>
										<option value="Bruno - MATEMATICA">Bruno - MATEMATICA</option>
										<option value="Adler - MATEMATICA">Adler - MATEMATICA</option>
										<option value="Ricardo - MATEMATICA">Ricardo - MATEMATICA</option>
										<option value="Gabriel - FÍSICA">Gabriel - FÍSICA</option>
										<option value="Francisco - FISICA">Francisco - FÍSICA</option>
										<option value="Talita - ESPANHOL">Talita - ESPANHOL</option>
										<option value="Luciana - ESPANHOL">Luciana - ESPANHOL</option>
										<option value="Alessandra - INGLES">Alessandra - INGLÊS</option>
										<option value="Euzebio - INGLES">Euzébio - INGLÊS</option>
										<option value="Graziela - REDACAO">Graziela - REDAÇÃO</option>
										<option value="Ana - REDACAO">Ana - REDAÇÃO</option>
									</select>
			</td>
			<td><select name="a5s3"required="required" >
										<option value=""></option>
										<option value="CIRCULO">CIRCULO</option>
										<option value="Leonardo - CIENCIAS">Leonardo - CIÊNCIAS</option>
										<option value="Thiago - BIOLOGIA">Thiago - BIOLOGIA</option>
										<option value="Parada - BIOLOGIA">Parada - BIOLOGIA</option>
										<option value="Luan - GEOGRAFIA">Luan - GEOGRAFIA</option>
										<option value="Rafael - GEOGRAFIA">Rafael - GEOGRAFIA</option>
										<option value="Stella - HISTORIA">Stella - HISTÓRIA</option>
										<option value="Veronica - HISTORIA">Verônica - HISTÓRIA</option>
										<option value="Manuela - GRAMATICA">Manuela - GRAMÁTICA</option>
										<option value="Danilo - GRAMATICA">Danilo - GRAMÁTICA</option>
										<option value="Marcelo - LITERATURA">Marcelo - LITERATURA</option>
										<option value="Lara - LITERATURA">Lara - LITERATURA</option>
										<option value="Victor - SOCIOLOGIA">Victor - SOCIOLOGIA</option>
										<option value="Julia - SOCIOLOGIA">Julia - SOCIOLOGIA</option>
										<option value="Elias - QUIMICA">Elias - QUIMICA</option>
										<option value="Julia - QUIMICA">Julia - QUÍMICA</option>
										<option value="Bruno - MATEMATICA">Bruno - MATEMATICA</option>
										<option value="Adler - MATEMATICA">Adler - MATEMATICA</option>
										<option value="Ricardo - MATEMATICA">Ricardo - MATEMATICA</option>
										<option value="Gabriel - FÍSICA">Gabriel - FÍSICA</option>
										<option value="Francisco - FISICA">Francisco - FÍSICA</option>
										<option value="Talita - ESPANHOL">Talita - ESPANHOL</option>
										<option value="Luciana - ESPANHOL">Luciana - ESPANHOL</option>
										<option value="Alessandra - INGLES">Alessandra - INGLÊS</option>
										<option value="Euzebio - INGLES">Euzébio - INGLÊS</option>
										<option value="Graziela - REDACAO">Graziela - REDAÇÃO</option>
										<option value="Ana - REDACAO">Ana - REDAÇÃO</option>
									</select>
			</td>
			<td><select name="a5s4"required="required" >
										<option value=""></option>
										<option value="CIRCULO">CIRCULO</option>
										<option value="Leonardo - CIENCIAS">Leonardo - CIÊNCIAS</option>
										<option value="Thiago - BIOLOGIA">Thiago - BIOLOGIA</option>
										<option value="Parada - BIOLOGIA">Parada - BIOLOGIA</option>
										<option value="Luan - GEOGRAFIA">Luan - GEOGRAFIA</option>
										<option value="Rafael - GEOGRAFIA">Rafael - GEOGRAFIA</option>
										<option value="Stella - HISTORIA">Stella - HISTÓRIA</option>
										<option value="Veronica - HISTORIA">Verônica - HISTÓRIA</option>
										<option value="Manuela - GRAMATICA">Manuela - GRAMÁTICA</option>
										<option value="Danilo - GRAMATICA">Danilo - GRAMÁTICA</option>
										<option value="Marcelo - LITERATURA">Marcelo - LITERATURA</option>
										<option value="Lara - LITERATURA">Lara - LITERATURA</option>
										<option value="Victor - SOCIOLOGIA">Victor - SOCIOLOGIA</option>
										<option value="Julia - SOCIOLOGIA">Julia - SOCIOLOGIA</option>
										<option value="Elias - QUIMICA">Elias - QUIMICA</option>
										<option value="Julia - QUIMICA">Julia - QUÍMICA</option>
										<option value="Bruno - MATEMATICA">Bruno - MATEMATICA</option>
										<option value="Adler - MATEMATICA">Adler - MATEMATICA</option>
										<option value="Ricardo - MATEMATICA">Ricardo - MATEMATICA</option>
										<option value="Gabriel - FÍSICA">Gabriel - FÍSICA</option>
										<option value="Francisco - FISICA">Francisco - FÍSICA</option>
										<option value="Talita - ESPANHOL">Talita - ESPANHOL</option>
										<option value="Luciana - ESPANHOL">Luciana - ESPANHOL</option>
										<option value="Alessandra - INGLES">Alessandra - INGLÊS</option>
										<option value="Euzebio - INGLES">Euzébio - INGLÊS</option>
										<option value="Graziela - REDACAO">Graziela - REDAÇÃO</option>
										<option value="Ana - REDACAO">Ana - REDAÇÃO</option>
									</select>
			</td>
		</tr>
		<tr>
			<td align="center">14h45 - 15h45</td>
				<td><select name="a6s1"required="required" >
										<option value=""></option>
										<option value="CIRCULO">CIRCULO</option>
										<option value="Leonardo - CIENCIAS">Leonardo - CIÊNCIAS</option>
										<option value="Thiago - BIOLOGIA">Thiago - BIOLOGIA</option>
										<option value="Parada - BIOLOGIA">Parada - BIOLOGIA</option>
										<option value="Luan - GEOGRAFIA">Luan - GEOGRAFIA</option>
										<option value="Rafael - GEOGRAFIA">Rafael - GEOGRAFIA</option>
										<option value="Stella - HISTORIA">Stella - HISTÓRIA</option>
										<option value="Veronica - HISTORIA">Verônica - HISTÓRIA</option>
										<option value="Manuela - GRAMATICA">Manuela - GRAMÁTICA</option>
										<option value="Danilo - GRAMATICA">Danilo - GRAMÁTICA</option>
										<option value="Marcelo - LITERATURA">Marcelo - LITERATURA</option>
										<option value="Lara - LITERATURA">Lara - LITERATURA</option>
										<option value="Victor - SOCIOLOGIA">Victor - SOCIOLOGIA</option>
										<option value="Julia - SOCIOLOGIA">Julia - SOCIOLOGIA</option>
										<option value="Elias - QUIMICA">Elias - QUIMICA</option>
										<option value="Julia - QUIMICA">Julia - QUÍMICA</option>
										<option value="Bruno - MATEMATICA">Bruno - MATEMATICA</option>
										<option value="Adler - MATEMATICA">Adler - MATEMATICA</option>
										<option value="Ricardo - MATEMATICA">Ricardo - MATEMATICA</option>
										<option value="Gabriel - FÍSICA">Gabriel - FÍSICA</option>
										<option value="Francisco - FISICA">Francisco - FÍSICA</option>
										<option value="Talita - ESPANHOL">Talita - ESPANHOL</option>
										<option value="Luciana - ESPANHOL">Luciana - ESPANHOL</option>
										<option value="Alessandra - INGLES">Alessandra - INGLÊS</option>
										<option value="Euzebio - INGLES">Euzébio - INGLÊS</option>
										<option value="Graziela - REDACAO">Graziela - REDAÇÃO</option>
										<option value="Ana - REDACAO">Ana - REDAÇÃO</option>
									</select>
			</td>
			<td><select name="a6s2"required="required" >
										<option value=""></option>
										<option value="CIRCULO">CIRCULO</option>
										<option value="Leonardo - CIENCIAS">Leonardo - CIÊNCIAS</option>
										<option value="Thiago - BIOLOGIA">Thiago - BIOLOGIA</option>
										<option value="Parada - BIOLOGIA">Parada - BIOLOGIA</option>
										<option value="Luan - GEOGRAFIA">Luan - GEOGRAFIA</option>
										<option value="Rafael - GEOGRAFIA">Rafael - GEOGRAFIA</option>
										<option value="Stella - HISTORIA">Stella - HISTÓRIA</option>
										<option value="Veronica - HISTORIA">Verônica - HISTÓRIA</option>
										<option value="Manuela - GRAMATICA">Manuela - GRAMÁTICA</option>
										<option value="Danilo - GRAMATICA">Danilo - GRAMÁTICA</option>
										<option value="Marcelo - LITERATURA">Marcelo - LITERATURA</option>
										<option value="Lara - LITERATURA">Lara - LITERATURA</option>
										<option value="Victor - SOCIOLOGIA">Victor - SOCIOLOGIA</option>
										<option value="Julia - SOCIOLOGIA">Julia - SOCIOLOGIA</option>
										<option value="Elias - QUIMICA">Elias - QUIMICA</option>
										<option value="Julia - QUIMICA">Julia - QUÍMICA</option>
										<option value="Bruno - MATEMATICA">Bruno - MATEMATICA</option>
										<option value="Adler - MATEMATICA">Adler - MATEMATICA</option>
										<option value="Ricardo - MATEMATICA">Ricardo - MATEMATICA</option>
										<option value="Gabriel - FÍSICA">Gabriel - FÍSICA</option>
										<option value="Francisco - FISICA">Francisco - FÍSICA</option>
										<option value="Talita - ESPANHOL">Talita - ESPANHOL</option>
										<option value="Luciana - ESPANHOL">Luciana - ESPANHOL</option>
										<option value="Alessandra - INGLES">Alessandra - INGLÊS</option>
										<option value="Euzebio - INGLES">Euzébio - INGLÊS</option>
										<option value="Graziela - REDACAO">Graziela - REDAÇÃO</option>
										<option value="Ana - REDACAO">Ana - REDAÇÃO</option>
									</select>
			</td>
			<td><select name="a6s3"required="required" >
										<option value=""></option>
										<option value="CIRCULO">CIRCULO</option>
										<option value="Leonardo - CIENCIAS">Leonardo - CIÊNCIAS</option>
										<option value="Thiago - BIOLOGIA">Thiago - BIOLOGIA</option>
										<option value="Parada - BIOLOGIA">Parada - BIOLOGIA</option>
										<option value="Luan - GEOGRAFIA">Luan - GEOGRAFIA</option>
										<option value="Rafael - GEOGRAFIA">Rafael - GEOGRAFIA</option>
										<option value="Stella - HISTORIA">Stella - HISTÓRIA</option>
										<option value="Veronica - HISTORIA">Verônica - HISTÓRIA</option>
										<option value="Manuela - GRAMATICA">Manuela - GRAMÁTICA</option>
										<option value="Danilo - GRAMATICA">Danilo - GRAMÁTICA</option>
										<option value="Marcelo - LITERATURA">Marcelo - LITERATURA</option>
										<option value="Lara - LITERATURA">Lara - LITERATURA</option>
										<option value="Victor - SOCIOLOGIA">Victor - SOCIOLOGIA</option>
										<option value="Julia - SOCIOLOGIA">Julia - SOCIOLOGIA</option>
										<option value="Elias - QUIMICA">Elias - QUIMICA</option>
										<option value="Julia - QUIMICA">Julia - QUÍMICA</option>
										<option value="Bruno - MATEMATICA">Bruno - MATEMATICA</option>
										<option value="Adler - MATEMATICA">Adler - MATEMATICA</option>
										<option value="Ricardo - MATEMATICA">Ricardo - MATEMATICA</option>
										<option value="Gabriel - FÍSICA">Gabriel - FÍSICA</option>
										<option value="Francisco - FISICA">Francisco - FÍSICA</option>
										<option value="Talita - ESPANHOL">Talita - ESPANHOL</option>
										<option value="Luciana - ESPANHOL">Luciana - ESPANHOL</option>
										<option value="Alessandra - INGLES">Alessandra - INGLÊS</option>
										<option value="Euzebio - INGLES">Euzébio - INGLÊS</option>
										<option value="Graziela - REDACAO">Graziela - REDAÇÃO</option>
										<option value="Ana - REDACAO">Ana - REDAÇÃO</option>
									</select>
			</td>
			<td><select name="a6s4"required="required" >
										<option value=""></option>
										<option value="CIRCULO">CIRCULO</option>
										<option value="Leonardo - CIENCIAS">Leonardo - CIÊNCIAS</option>
										<option value="Thiago - BIOLOGIA">Thiago - BIOLOGIA</option>
										<option value="Parada - BIOLOGIA">Parada - BIOLOGIA</option>
										<option value="Luan - GEOGRAFIA">Luan - GEOGRAFIA</option>
										<option value="Rafael - GEOGRAFIA">Rafael - GEOGRAFIA</option>
										<option value="Stella - HISTORIA">Stella - HISTÓRIA</option>
										<option value="Veronica - HISTORIA">Verônica - HISTÓRIA</option>
										<option value="Manuela - GRAMATICA">Manuela - GRAMÁTICA</option>
										<option value="Danilo - GRAMATICA">Danilo - GRAMÁTICA</option>
										<option value="Marcelo - LITERATURA">Marcelo - LITERATURA</option>
										<option value="Lara - LITERATURA">Lara - LITERATURA</option>
										<option value="Victor - SOCIOLOGIA">Victor - SOCIOLOGIA</option>
										<option value="Julia - SOCIOLOGIA">Julia - SOCIOLOGIA</option>
										<option value="Elias - QUIMICA">Elias - QUIMICA</option>
										<option value="Julia - QUIMICA">Julia - QUÍMICA</option>
										<option value="Bruno - MATEMATICA">Bruno - MATEMATICA</option>
										<option value="Adler - MATEMATICA">Adler - MATEMATICA</option>
										<option value="Ricardo - MATEMATICA">Ricardo - MATEMATICA</option>
										<option value="Gabriel - FÍSICA">Gabriel - FÍSICA</option>
										<option value="Francisco - FISICA">Francisco - FÍSICA</option>
										<option value="Talita - ESPANHOL">Talita - ESPANHOL</option>
										<option value="Luciana - ESPANHOL">Luciana - ESPANHOL</option>
										<option value="Alessandra - INGLES">Alessandra - INGLÊS</option>
										<option value="Euzebio - INGLES">Euzébio - INGLÊS</option>
										<option value="Graziela - REDACAO">Graziela - REDAÇÃO</option>
										<option value="Ana - REDACAO">Ana - REDAÇÃO</option>
									</select>
			</td>
		</tr>
		<tr>
			<td align="center">15h45 - 16h</td>
			<td colspan="3" align="center"><font color="red"><b>I-N-T-E-R-V-A-L-O</td>		
		</tr>
		<tr>
			<td align="center">16h - 17h</td>
				<td><select name="a7s1"required="required" >
										<option value=""></option>
										<option value="CIRCULO">CIRCULO</option>
										<option value="Leonardo - CIENCIAS">Leonardo - CIÊNCIAS</option>
										<option value="Thiago - BIOLOGIA">Thiago - BIOLOGIA</option>
										<option value="Parada - BIOLOGIA">Parada - BIOLOGIA</option>
										<option value="Luan - GEOGRAFIA">Luan - GEOGRAFIA</option>
										<option value="Rafael - GEOGRAFIA">Rafael - GEOGRAFIA</option>
										<option value="Stella - HISTORIA">Stella - HISTÓRIA</option>
										<option value="Veronica - HISTORIA">Verônica - HISTÓRIA</option>
										<option value="Manuela - GRAMATICA">Manuela - GRAMÁTICA</option>
										<option value="Danilo - GRAMATICA">Danilo - GRAMÁTICA</option>
										<option value="Marcelo - LITERATURA">Marcelo - LITERATURA</option>
										<option value="Lara - LITERATURA">Lara - LITERATURA</option>
										<option value="Victor - SOCIOLOGIA">Victor - SOCIOLOGIA</option>
										<option value="Julia - SOCIOLOGIA">Julia - SOCIOLOGIA</option>
										<option value="Elias - QUIMICA">Elias - QUIMICA</option>
										<option value="Julia - QUIMICA">Julia - QUÍMICA</option>
										<option value="Bruno - MATEMATICA">Bruno - MATEMATICA</option>
										<option value="Adler - MATEMATICA">Adler - MATEMATICA</option>
										<option value="Ricardo - MATEMATICA">Ricardo - MATEMATICA</option>
										<option value="Gabriel - FÍSICA">Gabriel - FÍSICA</option>
										<option value="Francisco - FISICA">Francisco - FÍSICA</option>
										<option value="Talita - ESPANHOL">Talita - ESPANHOL</option>
										<option value="Luciana - ESPANHOL">Luciana - ESPANHOL</option>
										<option value="Alessandra - INGLES">Alessandra - INGLÊS</option>
										<option value="Euzebio - INGLES">Euzébio - INGLÊS</option>
										<option value="Graziela - REDACAO">Graziela - REDAÇÃO</option>
										<option value="Ana - REDACAO">Ana - REDAÇÃO</option>
									</select>
			</td>
			<td><select name="a7s2"required="required" >
										<option value=""></option>
										<option value="CIRCULO">CIRCULO</option>
										<option value="Leonardo - CIENCIAS">Leonardo - CIÊNCIAS</option>
										<option value="Thiago - BIOLOGIA">Thiago - BIOLOGIA</option>
										<option value="Parada - BIOLOGIA">Parada - BIOLOGIA</option>
										<option value="Luan - GEOGRAFIA">Luan - GEOGRAFIA</option>
										<option value="Rafael - GEOGRAFIA">Rafael - GEOGRAFIA</option>
										<option value="Stella - HISTORIA">Stella - HISTÓRIA</option>
										<option value="Veronica - HISTORIA">Verônica - HISTÓRIA</option>
										<option value="Manuela - GRAMATICA">Manuela - GRAMÁTICA</option>
										<option value="Danilo - GRAMATICA">Danilo - GRAMÁTICA</option>
										<option value="Marcelo - LITERATURA">Marcelo - LITERATURA</option>
										<option value="Lara - LITERATURA">Lara - LITERATURA</option>
										<option value="Victor - SOCIOLOGIA">Victor - SOCIOLOGIA</option>
										<option value="Julia - SOCIOLOGIA">Julia - SOCIOLOGIA</option>
										<option value="Elias - QUIMICA">Elias - QUIMICA</option>
										<option value="Julia - QUIMICA">Julia - QUÍMICA</option>
										<option value="Bruno - MATEMATICA">Bruno - MATEMATICA</option>
										<option value="Adler - MATEMATICA">Adler - MATEMATICA</option>
										<option value="Ricardo - MATEMATICA">Ricardo - MATEMATICA</option>
										<option value="Gabriel - FÍSICA">Gabriel - FÍSICA</option>
										<option value="Francisco - FISICA">Francisco - FÍSICA</option>
										<option value="Talita - ESPANHOL">Talita - ESPANHOL</option>
										<option value="Luciana - ESPANHOL">Luciana - ESPANHOL</option>
										<option value="Alessandra - INGLES">Alessandra - INGLÊS</option>
										<option value="Euzebio - INGLES">Euzébio - INGLÊS</option>
										<option value="Graziela - REDACAO">Graziela - REDAÇÃO</option>
										<option value="Ana - REDACAO">Ana - REDAÇÃO</option>
									</select>
			</td>
			<td><select name="a7s3"required="required" >
										<option value=""></option>
										<option value="CIRCULO">CIRCULO</option>
										<option value="Leonardo - CIENCIAS">Leonardo - CIÊNCIAS</option>
										<option value="Thiago - BIOLOGIA">Thiago - BIOLOGIA</option>
										<option value="Parada - BIOLOGIA">Parada - BIOLOGIA</option>
										<option value="Luan - GEOGRAFIA">Luan - GEOGRAFIA</option>
										<option value="Rafael - GEOGRAFIA">Rafael - GEOGRAFIA</option>
										<option value="Stella - HISTORIA">Stella - HISTÓRIA</option>
										<option value="Veronica - HISTORIA">Verônica - HISTÓRIA</option>
										<option value="Manuela - GRAMATICA">Manuela - GRAMÁTICA</option>
										<option value="Danilo - GRAMATICA">Danilo - GRAMÁTICA</option>
										<option value="Marcelo - LITERATURA">Marcelo - LITERATURA</option>
										<option value="Lara - LITERATURA">Lara - LITERATURA</option>
										<option value="Victor - SOCIOLOGIA">Victor - SOCIOLOGIA</option>
										<option value="Julia - SOCIOLOGIA">Julia - SOCIOLOGIA</option>
										<option value="Elias - QUIMICA">Elias - QUIMICA</option>
										<option value="Julia - QUIMICA">Julia - QUÍMICA</option>
										<option value="Bruno - MATEMATICA">Bruno - MATEMATICA</option>
										<option value="Adler - MATEMATICA">Adler - MATEMATICA</option>
										<option value="Ricardo - MATEMATICA">Ricardo - MATEMATICA</option>
										<option value="Gabriel - FÍSICA">Gabriel - FÍSICA</option>
										<option value="Francisco - FISICA">Francisco - FÍSICA</option>
										<option value="Talita - ESPANHOL">Talita - ESPANHOL</option>
										<option value="Luciana - ESPANHOL">Luciana - ESPANHOL</option>
										<option value="Alessandra - INGLES">Alessandra - INGLÊS</option>
										<option value="Euzebio - INGLES">Euzébio - INGLÊS</option>
										<option value="Graziela - REDACAO">Graziela - REDAÇÃO</option>
										<option value="Ana - REDACAO">Ana - REDAÇÃO</option>
									</select>
			</td>
			<td><select name="a7s4"required="required" >
										<option value=""></option>
										<option value="CIRCULO">CIRCULO</option>
										<option value="Leonardo - CIENCIAS">Leonardo - CIÊNCIAS</option>
										<option value="Thiago - BIOLOGIA">Thiago - BIOLOGIA</option>
										<option value="Parada - BIOLOGIA">Parada - BIOLOGIA</option>
										<option value="Luan - GEOGRAFIA">Luan - GEOGRAFIA</option>
										<option value="Rafael - GEOGRAFIA">Rafael - GEOGRAFIA</option>
										<option value="Stella - HISTORIA">Stella - HISTÓRIA</option>
										<option value="Veronica - HISTORIA">Verônica - HISTÓRIA</option>
										<option value="Manuela - GRAMATICA">Manuela - GRAMÁTICA</option>
										<option value="Danilo - GRAMATICA">Danilo - GRAMÁTICA</option>
										<option value="Marcelo - LITERATURA">Marcelo - LITERATURA</option>
										<option value="Lara - LITERATURA">Lara - LITERATURA</option>
										<option value="Victor - SOCIOLOGIA">Victor - SOCIOLOGIA</option>
										<option value="Julia - SOCIOLOGIA">Julia - SOCIOLOGIA</option>
										<option value="Elias - QUIMICA">Elias - QUIMICA</option>
										<option value="Julia - QUIMICA">Julia - QUÍMICA</option>
										<option value="Bruno - MATEMATICA">Bruno - MATEMATICA</option>
										<option value="Adler - MATEMATICA">Adler - MATEMATICA</option>
										<option value="Ricardo - MATEMATICA">Ricardo - MATEMATICA</option>
										<option value="Gabriel - FÍSICA">Gabriel - FÍSICA</option>
										<option value="Francisco - FISICA">Francisco - FÍSICA</option>
										<option value="Talita - ESPANHOL">Talita - ESPANHOL</option>
										<option value="Luciana - ESPANHOL">Luciana - ESPANHOL</option>
										<option value="Alessandra - INGLES">Alessandra - INGLÊS</option>
										<option value="Euzebio - INGLES">Euzébio - INGLÊS</option>
										<option value="Graziela - REDACAO">Graziela - REDAÇÃO</option>
										<option value="Ana - REDACAO">Ana - REDAÇÃO</option>
									</select>
			</td>
		</tr>
		<tr>
			<td align="center">17h - 18h</td>
				<td><select name="a8s1"required="required" >
										<option value=""></option>
										<option value="CIRCULO">CIRCULO</option>
										<option value="Leonardo - CIENCIAS">Leonardo - CIÊNCIAS</option>
										<option value="Thiago - BIOLOGIA">Thiago - BIOLOGIA</option>
										<option value="Parada - BIOLOGIA">Parada - BIOLOGIA</option>
										<option value="Luan - GEOGRAFIA">Luan - GEOGRAFIA</option>
										<option value="Rafael - GEOGRAFIA">Rafael - GEOGRAFIA</option>
										<option value="Stella - HISTORIA">Stella - HISTÓRIA</option>
										<option value="Veronica - HISTORIA">Verônica - HISTÓRIA</option>
										<option value="Manuela - GRAMATICA">Manuela - GRAMÁTICA</option>
										<option value="Danilo - GRAMATICA">Danilo - GRAMÁTICA</option>
										<option value="Marcelo - LITERATURA">Marcelo - LITERATURA</option>
										<option value="Lara - LITERATURA">Lara - LITERATURA</option>
										<option value="Victor - SOCIOLOGIA">Victor - SOCIOLOGIA</option>
										<option value="Julia - SOCIOLOGIA">Julia - SOCIOLOGIA</option>
										<option value="Elias - QUIMICA">Elias - QUIMICA</option>
										<option value="Julia - QUIMICA">Julia - QUÍMICA</option>
										<option value="Bruno - MATEMATICA">Bruno - MATEMATICA</option>
										<option value="Adler - MATEMATICA">Adler - MATEMATICA</option>
										<option value="Ricardo - MATEMATICA">Ricardo - MATEMATICA</option>
										<option value="Gabriel - FÍSICA">Gabriel - FÍSICA</option>
										<option value="Francisco - FISICA">Francisco - FÍSICA</option>
										<option value="Talita - ESPANHOL">Talita - ESPANHOL</option>
										<option value="Luciana - ESPANHOL">Luciana - ESPANHOL</option>
										<option value="Alessandra - INGLES">Alessandra - INGLÊS</option>
										<option value="Euzebio - INGLES">Euzébio - INGLÊS</option>
										<option value="Graziela - REDACAO">Graziela - REDAÇÃO</option>
										<option value="Ana - REDACAO">Ana - REDAÇÃO</option>
									</select>
			</td>
			<td><select name="a8s2"required="required" >
										<option value=""></option>
										<option value="CIRCULO">CIRCULO</option>
										<option value="Leonardo - CIENCIAS">Leonardo - CIÊNCIAS</option>
										<option value="Thiago - BIOLOGIA">Thiago - BIOLOGIA</option>
										<option value="Parada - BIOLOGIA">Parada - BIOLOGIA</option>
										<option value="Luan - GEOGRAFIA">Luan - GEOGRAFIA</option>
										<option value="Rafael - GEOGRAFIA">Rafael - GEOGRAFIA</option>
										<option value="Stella - HISTORIA">Stella - HISTÓRIA</option>
										<option value="Veronica - HISTORIA">Verônica - HISTÓRIA</option>
										<option value="Manuela - GRAMATICA">Manuela - GRAMÁTICA</option>
										<option value="Danilo - GRAMATICA">Danilo - GRAMÁTICA</option>
										<option value="Marcelo - LITERATURA">Marcelo - LITERATURA</option>
										<option value="Lara - LITERATURA">Lara - LITERATURA</option>
										<option value="Victor - SOCIOLOGIA">Victor - SOCIOLOGIA</option>
										<option value="Julia - SOCIOLOGIA">Julia - SOCIOLOGIA</option>
										<option value="Elias - QUIMICA">Elias - QUIMICA</option>
										<option value="Julia - QUIMICA">Julia - QUÍMICA</option>
										<option value="Bruno - MATEMATICA">Bruno - MATEMATICA</option>
										<option value="Adler - MATEMATICA">Adler - MATEMATICA</option>
										<option value="Ricardo - MATEMATICA">Ricardo - MATEMATICA</option>
										<option value="Gabriel - FÍSICA">Gabriel - FÍSICA</option>
										<option value="Francisco - FISICA">Francisco - FÍSICA</option>
										<option value="Talita - ESPANHOL">Talita - ESPANHOL</option>
										<option value="Luciana - ESPANHOL">Luciana - ESPANHOL</option>
										<option value="Alessandra - INGLES">Alessandra - INGLÊS</option>
										<option value="Euzebio - INGLES">Euzébio - INGLÊS</option>
										<option value="Graziela - REDACAO">Graziela - REDAÇÃO</option>
										<option value="Ana - REDACAO">Ana - REDAÇÃO</option>
									</select>
			</td>
			<td><select name="a8s3"required="required" >
										<option value=""></option>
										<option value="CIRCULO">CIRCULO</option>
										<option value="Leonardo - CIENCIAS">Leonardo - CIÊNCIAS</option>
										<option value="Thiago - BIOLOGIA">Thiago - BIOLOGIA</option>
										<option value="Parada - BIOLOGIA">Parada - BIOLOGIA</option>
										<option value="Luan - GEOGRAFIA">Luan - GEOGRAFIA</option>
										<option value="Rafael - GEOGRAFIA">Rafael - GEOGRAFIA</option>
										<option value="Stella - HISTORIA">Stella - HISTÓRIA</option>
										<option value="Veronica - HISTORIA">Verônica - HISTÓRIA</option>
										<option value="Manuela - GRAMATICA">Manuela - GRAMÁTICA</option>
										<option value="Danilo - GRAMATICA">Danilo - GRAMÁTICA</option>
										<option value="Marcelo - LITERATURA">Marcelo - LITERATURA</option>
										<option value="Lara - LITERATURA">Lara - LITERATURA</option>
										<option value="Victor - SOCIOLOGIA">Victor - SOCIOLOGIA</option>
										<option value="Julia - SOCIOLOGIA">Julia - SOCIOLOGIA</option>
										<option value="Elias - QUIMICA">Elias - QUIMICA</option>
										<option value="Julia - QUIMICA">Julia - QUÍMICA</option>
										<option value="Bruno - MATEMATICA">Bruno - MATEMATICA</option>
										<option value="Adler - MATEMATICA">Adler - MATEMATICA</option>
										<option value="Ricardo - MATEMATICA">Ricardo - MATEMATICA</option>
										<option value="Gabriel - FÍSICA">Gabriel - FÍSICA</option>
										<option value="Francisco - FISICA">Francisco - FÍSICA</option>
										<option value="Talita - ESPANHOL">Talita - ESPANHOL</option>
										<option value="Luciana - ESPANHOL">Luciana - ESPANHOL</option>
										<option value="Alessandra - INGLES">Alessandra - INGLÊS</option>
										<option value="Euzebio - INGLES">Euzébio - INGLÊS</option>
										<option value="Graziela - REDACAO">Graziela - REDAÇÃO</option>
										<option value="Ana - REDACAO">Ana - REDAÇÃO</option>
									</select>
			</td>
			<td><select name="a8s4"required="required" >
										<option value=""></option>
										<option value="CIRCULO">CIRCULO</option>
										<option value="Leonardo - CIENCIAS">Leonardo - CIÊNCIAS</option>
										<option value="Thiago - BIOLOGIA">Thiago - BIOLOGIA</option>
										<option value="Parada - BIOLOGIA">Parada - BIOLOGIA</option>
										<option value="Luan - GEOGRAFIA">Luan - GEOGRAFIA</option>
										<option value="Rafael - GEOGRAFIA">Rafael - GEOGRAFIA</option>
										<option value="Stella - HISTORIA">Stella - HISTÓRIA</option>
										<option value="Veronica - HISTORIA">Verônica - HISTÓRIA</option>
										<option value="Manuela - GRAMATICA">Manuela - GRAMÁTICA</option>
										<option value="Danilo - GRAMATICA">Danilo - GRAMÁTICA</option>
										<option value="Marcelo - LITERATURA">Marcelo - LITERATURA</option>
										<option value="Lara - LITERATURA">Lara - LITERATURA</option>
										<option value="Victor - SOCIOLOGIA">Victor - SOCIOLOGIA</option>
										<option value="Julia - SOCIOLOGIA">Julia - SOCIOLOGIA</option>
										<option value="Elias - QUIMICA">Elias - QUIMICA</option>
										<option value="Julia - QUIMICA">Julia - QUÍMICA</option>
										<option value="Bruno - MATEMATICA">Bruno - MATEMATICA</option>
										<option value="Adler - MATEMATICA">Adler - MATEMATICA</option>
										<option value="Ricardo - MATEMATICA">Ricardo - MATEMATICA</option>
										<option value="Gabriel - FÍSICA">Gabriel - FÍSICA</option>
										<option value="Francisco - FISICA">Francisco - FÍSICA</option>
										<option value="Talita - ESPANHOL">Talita - ESPANHOL</option>
										<option value="Luciana - ESPANHOL">Luciana - ESPANHOL</option>
										<option value="Alessandra - INGLES">Alessandra - INGLÊS</option>
										<option value="Euzebio - INGLES">Euzébio - INGLÊS</option>
										<option value="Graziela - REDACAO">Graziela - REDAÇÃO</option>
										<option value="Ana - REDACAO">Ana - REDAÇÃO</option>
									</select>
			</td>
		</tr>
		<tr>
		</tr><td colspan="5">_________________________________________________________________________________________________
		<tr>
			<td colspan="4" align="right">
				<input type="reset" value="Restaurar" style="width:80;height:40">
				<input type="submit" value="Adicionar Grade" style="width:150;height:40">
				
			</td>
		</tr>
		</form>
		</table>
		
	<div id="aulas">
		<font size="5" color="red"><b><u>HISTÓRICO DE AULAS<p>
<?php
include("conexao.php");
$sql="select*from grade order by cod desc";
$execbanco=mysql_query($sql,$conexao);
if(mysql_num_rows($execbanco)==0){
	echo"<script>
		alert('Grade de Horário não encontrada !');
		</script>";
}

else{
		$cor1="blue";
		$cor2="orange";
		$cor=$cor1;
	
	while(	$dados=mysql_fetch_array($execbanco)){
	if($cor==$cor1){$cor=$cor2;}
	else{$cor=$cor1;}
	?>
	<p>
	<table bordercolor="<?php echo $cor;?>">
		
		<tr>
			<td align="center"><b> Data:</b> <?php echo $dados['data'];?></td><td></td>
			<td colspan="2"> <b>Local:</b><?php echo $dados['local'];?></td>
			<td>
				<form method="post" action="del_grade.php">
					<input type="hidden" name="codigo" value="<?php echo $dados['cod']?>">
					<input type="submit" value="APAGAR GRADE">
				</form>
			</td>
		</tr>
		<tr>
			<td colspan="6"><b>Monitoria:</b><?php echo $dados['monitoria'];?></td> 
		</tr>
		<tr>	
			<td align="center"><b>----- Horário -----</td>
			<td align="center"><b>------ Sala A + B ------</td>
			<td align="center"><b>------ Sala C + D ------</td>
			<td align="center"><b>--------- Sala E ---------</td>
			<td align="center"><b>--------- Sala F ---------</td>
		</tr>
		<tr bgcolor='00aacc'>
			<td align="center">8h - 9h</td>
			<td align="center"><?php echo $dados['a1s1'];?></td>
			<td align="center"><?php echo $dados['a1s2'];?></td>
			<td align="center"><?php echo $dados['a1s3'];?></td>
			<td align="center"><?php echo $dados['a1s4'];?></td>
		</tr>
		<tr bgcolor="silver">
			<td align="center">9h - 10h</td>
			<td align="center"><?php echo $dados['a2s1'];?></td>
			<td align="center"><?php echo $dados['a2s2'];?></td>
			<td align="center"><?php echo $dados['a2s3'];?></td>
			<td align="center"><?php echo $dados['a2s4'];?></td>
		</tr>
		<tr bgcolor='yellow'>
			<td align="center">10h - 10h15</td>
			<td colspan="4" align="center">I-N-T-E-R-V-A-L-O</td>
		</tr>
		<tr bgcolor='00aacc'>
			<td align="center">10h15 - 11h15</td>
			<td align="center"><?php echo $dados['a3s1'];?></td>
			<td align="center"><?php echo $dados['a3s2'];?></td>
			<td align="center"><?php echo $dados['a3s3'];?></td>
			<td align="center"><?php echo $dados['a3s4'];?></td>
		</tr>
		<tr bgcolor="silver">
			<td align="center">11h15 - 12h15</td>	
			<td align="center"><?php echo $dados['a4s1'];?></td>
			<td align="center"><?php echo $dados['a4s2'];?></td>
			<td align="center"><?php echo $dados['a4s3'];?></td>
			<td align="center"><?php echo $dados['a4s4'];?></td>
		</tr>
		<tr bgcolor='pink'>
			<td align="center">12h15 - 13h45</td>
			<td colspan="4" align="center">ALMOÇO Coletivo / Oficina: <?php echo $dados['oficina'];?></td>
		</tr>
		<tr bgcolor='00aacc'>
			<td align="center">13h45 - 14h45</td>
			<td align="center"><?php echo $dados['a5s1'];?></td>
			<td align="center"><?php echo $dados['a5s2'];?></td>
			<td align="center"><?php echo $dados['a5s3'];?></td>
			<td align="center"><?php echo $dados['a5s4'];?></td>
		</tr>
		<tr bgcolor="silver">
			<td align="center">14h45 - 15h45</td>
			<td align="center"><?php echo $dados['a6s1'];?></td>
			<td align="center"><?php echo $dados['a6s2'];?></td>
			<td align="center"><?php echo $dados['a6s3'];?></td>
			<td align="center"><?php echo $dados['a6s4'];?></td>
		</tr>
		<tr bgcolor='yellow'>
			<td align="center">15h45 - 16h</td>
			<td colspan="4" align="center">I-N-T-E-R-V-A-L-O</td>		
		</tr>
		<tr bgcolor='00aacc'>
			<td align="center">16h - 17h</td>
			<td align="center"><?php echo $dados['a7s1'];?></td>
			<td align="center"><?php echo $dados['a7s2'];?></td>
			<td align="center"><?php echo $dados['a7s3'];?></td>
			<td align="center"><?php echo $dados['a7s4'];?></td>
		</tr>
		<tr bgcolor="silver">
			<td align="center">17h - 18h</td>
			<td align="center"><?php echo $dados['a8s1'];?></td>
			<td align="center"><?php echo $dados['a8s2'];?></td>
			<td align="center"><?php echo $dados['a8s3'];?></td>
			<td align="center"><?php echo $dados['a8s4'];?></td>
		</tr>
		
		
		</table>


		
<?php }}?>			
	</div>	
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			