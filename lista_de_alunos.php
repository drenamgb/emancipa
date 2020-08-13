<html>
<head>
<title>NOTAS - Área restrita	</title>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/ >
<script type="text/javascript" src="js/javascript.js" /></script>
 
</head>
<style type="text/css">
	.c1{
		border:solid 1px black;
		background:#99ccff;
		text-align:center;
		font-weight:bold;
	}
	.c2{
		border:solid 1px black;
	}
	a:visited {
		color: blue;
	}
</style>
<a href="professores.php"><font size="5" color="green"><b>Central do Aluno</a>	<p>			
<a href="area_restrita.php"><font size="5">Voltar</a><p>

<?php
include("conexao.php");
$sql="select*from alunos";
$execbanco=mysql_query($sql,$conexao);
if(mysql_num_rows($execbanco)==0){
	echo"Nenhum registro foi encontrado";
}
else{
	echo "<table align='center' width='60%'>";
	
	echo"<tr>
		<td class='c1'><b>Codigo</td>
		<td class='c1'><b>Nome</td>
		<td class='c1'><b>Nota S1</td>
		<td class='c1'><b>Redação 1</td>
		<td class='c1'><b>Nota S2</td>
		<td class='c1'><b>Redação 2</td>
		<td class='c1'><b>Nota S3</td>
		<td class='c1'><b>Redação 3</td>
		<td class='c1'>Editar</td>
		
		
	</tr>";
	$cor1="silver";
	$cor2="gray";
	$cor=$cor1;
	while($dados=mysql_fetch_array($execbanco)){
		echo"<tr bgcolor='$cor'>
				<td class='c2'>".$dados['codigo']."</td>
				<td class='c2'>".$dados['nome']."</td>
				<td class='c2'>".$dados['media1']."</td>
				<td class='c2'>".$dados['red1']."%</td>
				<td class='c2'>".$dados['media2']."</td>
				<td class='c2'>".$dados['red2']."%</td>
				<td class='c2'>".$dados['media3']."</td>
				<td class='c2'>".$dados['red3']."%</td>
				<form method='post' action='editar_simulado.php'>
					<td class='c2'>
						<input type='hidden' name='codigo' value='".$dados['codigo']."'/>
						<input type='submit' value='Editar'/>
					</td>
				</form>
			</tr>";
	if($cor==$cor1){$cor=$cor2;}
	else{$cor=$cor1;}
	}
echo "</table>";
}		
?>