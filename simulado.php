<html>
<head>
<title>Editar NOTAS - Área restrita	</title>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/ >
<script type="text/javascript" src="js/javascript.js" /></script>
 
</head>
<style>
	a:visited {
		color: blue;
	}
	#voltar{
		position:relative;
		left: 200px;
		top:-80px;
	
	}	
</style>
<a href="professores.php"><font size="5" color="green"><b>Central do Aluno</a>	<p>			
<a href="area_restrita.php"><font size="5">Voltar</a><p>

<?php
include("conexao.php");
$sql="select*from notas where codigo='1'";
$execbanco=mysql_query($sql,$conexao);
if(mysql_num_rows($execbanco)==0){
	echo"<script>
		alert('codigo não encontrado !');
		history.go(-1);
	</script>";
}
else{
	$dados=mysql_fetch_array($execbanco);
?>
	
<table align="center" bordercolor="black">
	<form method="post" action="atualiza_notas_geral.php">
		<tr>
			<td><b> DISCIPLINA
			<td><b>Simulado 1
			<td><b>Simulado 2
			<td><b>Simulado 3	
		</tr>
		<tr>
			<td><font color="blue">Matematica: </td>
			<td><input type="text" name="matematica1"required="required" size="1" value="<?php echo $dados['matematica1'];?>">		</td>
			<td><select name="matematica2"required="required" >
										<option value="<?php echo $dados['matematica2'];?>"><?php echo $dados['matematica2'];?>	</option>
										<option value="0">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>
									</select>
			</td>
			<td><select name="matematica3"required="required" >
										<option value="<?php echo $dados['matematica3'];?>"><?php echo $dados['matematica3'];?>	</option>
										<option value="0">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>
									</select>
			</td>								
		</tr>
		<tr>
				<td><font color="blue">Física: </td>
				<td><input type="text" name="fisica1"required="required" size="1"  value="<?php echo $dados['fisica1'];?>">	</td>	
			<td><select name="fisica2"required="required" >
										<option value="<?php echo $dados['fisica2'];?>"><?php echo $dados['fisica2'];?>	</option>
															<option value="0">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>
									</select>
			</td>	
			<td><select name="fisica3"required="required" >
										<option value="<?php echo $dados['fisica3'];?>"><?php echo $dados['fisica3'];?>	</option>
															<option value="0">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>
									</select>
			</td>	
		</tr>
		<tr>
			<td><font color="blue">Química: </td>
			<td><input type="text" name="quimica1"required="required" size="1" value="<?php echo $dados['quimica1'];?>">	</td>	
			<td><select name="quimica2"required="required" >
										<option value="<?php echo $dados['quimica2'];?>"><?php echo $dados['quimica2'];?>	</option>
										<option value="0">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>
									</select>
			</td>
			<td><select name="quimica3"required="required" >
										<option value="<?php echo $dados['quimica3'];?>"><?php echo $dados['quimica3'];?>	</option>
										<option value="0">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>
									</select>
			</td>
		</tr>
		<tr>
			<td><font color="red">Português: </td>
				<td><input type="text" name="portugues1"required="required" size="1" value="<?php echo $dados['portugues1'];?>"></td>
			<td><select name="portugues2"required="required" >
										<option value="<?php echo $dados['portugues2'];?>"><?php echo $dados['portugues2'];?>	</option>
										<option value="0">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>
									</select>
			</td>
			<td><select name="portugues3"required="required" >
										<option value="<?php echo $dados['portugues3'];?>"><?php echo $dados['portugues3'];?>	</option>
										<option value="0">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>
									</select>
			</td>
		</tr>
		<tr>
			<td><font color="red">História: </td>
			<td><input type="text" name="historia1"required="required"  size="1" value="<?php echo $dados['historia1'];?>">	</td>
			<td><select name="historia2"required="required" >
										<option value="<?php echo $dados['historia2'];?>"><?php echo $dados['historia2'];?>	</option>
										<option value="0">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>
									</select>
			</td>
									</select></td>
			<td><select name="historia3"required="required" >
										<option value="<?php echo $dados['historia3'];?>"><?php echo $dados['historia3'];?>	</option>
										<option value="0">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>
									</select>
			</td>
		</tr>
		<tr>
			<td><font color="red">Geografia: </td>
			<td><input type="text" name="geografia1"required="required" size="1" value="<?php echo $dados['geografia1'];?>">
			</td>
			<td><select name="geografia2"required="required" >
										<option value="<?php echo $dados['geografia2'];?>"><?php echo $dados['geografia2'];?>	</option>
										<option value="0">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>
									</select>
			</td>
			<td><select name="geografia3"required="required" >
										<option value="<?php echo $dados['geografia3'];?>"><?php echo $dados['geografia3'];?>	</option>
										<option value="0">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>
									</select>
			</td>
			</tr>
			<tr>
			<td><font color="green">Biologia: </td>
			<td><input type="text" name="biologia1"required="required" size="1" value="<?php echo $dados['biologia1'];?>">
			</td>
			<td><select name="biologia2"required="required" >
										<option value="<?php echo $dados['biologia2'];?>"><?php echo $dados['biologia2'];?>	</option>
										<option value="0">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>
									</select>
			</td>
			<td><select name="biologia3"required="required" >
										<option value="<?php echo $dados['biologia3'];?>"><?php echo $dados['biologia3'];?>	</option>
										<option value="0">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>
									</select>
			</td>
		</tr>
		<tr>
			<td><font color="green">Sociologia: </td>
			<td><input type="text" name="sociologia1"required="required" size="1" value="<?php echo $dados['sociologia1'];?>">	</td>
			<td><select name="sociologia2"required="required" >
										<option value="<?php echo $dados['sociologia2'];?>"><?php echo $dados['sociologia2'];?>	</option>
										<option value="0">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>
									</select>
			</td>
			<td><select name="sociologia3"required="required" >
										<option value="<?php echo $dados['sociologia3'];?>"><?php echo $dados['sociologia3'];?>	</option>
										<option value="0">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>
									</select>
			</td>
		</tr>
		<tr>
			<td><font color="green">Filosofia: </td>
			<td><input type="text" name="filosofia1"required="required" size="1" value="<?php echo $dados['filosofia1'];?>">	</td>
			<td><select name="filosofia2"required="required" >
										<option value="<?php echo $dados['filosofia2'];?>"><?php echo $dados['filosofia2'];?>	</option>
										<option value="0">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>
									</select>
			</td>
			<td><select name="filosofia3"required="required" >
										<option value="<?php echo $dados['filosofia3'];?>"><?php echo $dados['filosofia3'];?>	</option>
										<option value="0">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>
									</select>
			</td>
		</tr>
		<tr>
			<td><font color="black">Inglês: </td>
			<td><input type="text" name="ingles1"required="required" size="1" value="<?php echo $dados['ingles1'];?>"></td>
			<td><select name="ingles2"required="required" >
										<option value="<?php echo $dados['ingles2'];?>"><?php echo $dados['ingles2'];?>	</option>
										<option value="0">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>
									</select>
			</td>
			<td><select name="ingles3"required="required" >
										<option value="<?php echo $dados['ingles3'];?>"><?php echo $dados['ingles3'];?>	</option>
										<option value="0">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>
									</select>
			</td>
			</tr>
			<tr>
			<td><font color="black">Espanhol: </td>
			<td><input type="text" name="espanhol1"required="required" size="1" value="<?php echo $dados['espanhol1'];?>">	</td>
			<td><select name="espanhol2"required="required" >
										<option value="<?php echo $dados['espanhol2'];?>"><?php echo $dados['espanhol2'];?>	</option>
										<option value="0">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>
									</select>
			</td>
			<td><select name="espanhol3"required="required" >
										<option value="<?php echo $dados['espanhol3'];?>"><?php echo $dados['espanhol3'];?>	</option>
										<option value="0">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>
									</select>
			</td>
		</tr>
		<tr>
			<td><font color="black">Redação: </td>
			<td><input type="text" name="redacao1" onkeyup="maskIt(this,event,'###')"  required="required" size="1" maxlength=3 value="<?php echo $dados['redacao1'];?>"/><b>%</td>
			<td><input type="text" name="redacao2" onkeyup="maskIt(this,event,'###')"  required="required" size="1" maxlength=3 value="<?php echo $dados['redacao2'];?>"/><b>%</td>
			<td><input type="text" name="redacao3" onkeyup="maskIt(this,event,'###')"  required="required" size="1" maxlength=3 value="<?php echo $dados['redacao3'];?>"/><b>%</td>
		
		</tr>
		<tr>
			<td><font color="purple"><b>Nota Geral: </td>
			<td><input type="text" name="mediasala1" onkeyup="maskIt(this,event,'##')"  required="required" size="1" maxlength=2 value="<?php echo $dados['mediasala1'];?>"/>Pontos</td>
			<td><input type="text" name="mediasala2" onkeyup="maskIt(this,event,'##')"  required="required" size="1" maxlength=2 value="<?php echo $dados['mediasala2'];?>"/>Pontos</td>
			<td><input type="text" name="mediasala3" onkeyup="maskIt(this,event,'##')"  required="required" size="1" maxlength=2 value="<?php echo $dados['mediasala3'];?>"/>Pontos</td>
		</tr>
		<tr>
			<td colspan="4" align="center">
				<input type="hidden" name="codigo" value="1"/>
				<input type="submit" value="Atualizar" onClick="alert('ATENÇÃO! As NOTAS serão Atualizadas!')"/>
				<input type="reset" value="Restaurar"/><p>
			</td>
				
		</tr>
		<tr>
			<td colspan="4"><b>Obs:</b> A Nota da REDAÇÃO é dada em porcentagem, então 1 = 10%  e 15 = 15%<p>
								<b>Obs2:</b> Nota Mínima da REDAÇÃO é 10%
		</tr>
	</form>
</table>





<?php
}
?>