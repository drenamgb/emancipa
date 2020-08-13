<html>
<head>
<title>Editar NOTAS - Área Restrita	</title>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/ >
<script type="text/javascript" src="js/javascript.js" /></script>
 
</head>
<style>
	a:visited {
		color: blue;
	}
	#info{
		position:relative;
		left: 300px;
		top:30px;
	
	}	
</style>
<a href="professores.php"><font size="5" color="green"><b>Central do Aluno</a></font><p>			
<a href="area_restrita.php"><font size="5">Voltar</a><p></font>

<?php
include("conexao.php");
$codigo=$_POST['codigo'];
$sql="select*from alunos where codigo='$codigo'";
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
<h2 align="center"><?php echo $dados['nome'];?></h2>
	
<table align="center">
	<form method="post" action="atualiza_notas.php">
		<tr>
			<td> Codigo: </td>
			<td><input size="2" type="text" value="<?php echo $dados['codigo'];?>" disabled /></td>
		</tr>
		<tr>
			<td> Nome: </td>
			<td><input type="text" size="30"  value="<?php echo $dados['nome'];?>"disabled  /></td>
		</tr>
		<tr>
			<td><font color="blue">Simulado 1: </td>
			<td><input type="text" name="media1" onkeyup="maskIt(this,event,'##')"  size="1" maxlength=2 value="<?php echo $dados['media1'];?>"/> Pontos</td>
		</tr>
		<tr>
			<td><font color="blue">Redação 1: </td>
			<td><input type="text" name="red1" onkeyup="maskIt(this,event,'###')"  size="1" maxlength=3 value="<?php echo $dados['red1'];?>"/><b> %</td>
		</tr>
		<tr>
			<td><font color="red">Simulado 2: </td>
			<td><input type="text" name="media2" onkeyup="maskIt(this,event,'##')"  size="1" maxlength=2 value="<?php echo $dados['media2'];?>"/> Pontos</td>
		</tr>
		<tr>
			<td><font color="red">Redação 2: </td>
			<td><input type="text" name="red2" onkeyup="maskIt(this,event,'###')"  size="1" maxlength=3 value="<?php echo $dados['red2'];?>"/><b> %</td>
		</tr>
		<tr>
			<td><font color="green">Simulado 3: </td>
			<td><input type="text" name="media3" onkeyup="maskIt(this,event,'##')"  size="1" maxlength=2 value="<?php echo $dados['media3'];?>"/> Pontos</td>
		</tr>
		<tr>
			<td><font color="green">Redação 3: </td>
			<td><input type="text" name="red3" onkeyup="maskIt(this,event,'###')"   size="1" maxlength=3 value="<?php echo $dados['red3'];?>"/><b>%</td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<input type="hidden" name="codigo" value="<?php echo $dados['codigo'];?>"/>
				<input type="submit" value="Atualizar" onClick="alert('ATENÇÃO! As NOTAS desse Aluno(a) serão Atualizadas!')"/>
				<input type="reset" value="Restaurar"/><p>
			</td>
				
		</tr>
	</form>
</table>
<div id="info">
				<b>Obs:</b> A Nota da REDAÇÃO é dada em porcentagem, então 1 = 10% e 15 = 15%<p>
				<b>Obs2:</b> Nota Mínima da REDAÇÃO é 10%
</div><?php
}
?>