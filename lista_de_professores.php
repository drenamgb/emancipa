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
</style>
<p align="center">
	<a href="center">
	<a href="cadastro_professor.php">Adicionar Novo</a></p>
<?php
include("conexao.php");
$sql="select*from professores";
$execbanco=mysql_query($sql,$conexao);
if(mysql_num_rows($execbanco)==0){
	echo"Nenhum registro foi encontrado";
}
else{
	echo "<table align='center' width='100%'>";
	echo"<tr>
		<td class='c1'>Codigo</td>
		<td class='c1'>Nome</td>
		<td class='c1'>E-mail</td>
		<td class='c1'>Login</td>
		<td class='c1'>Foto</td>
		<td class='c1'>Editar</td>
		<td class='c1'>Excluir</td>
		
	</tr>";
	$cor1="silver";
	$cor2="gray";
	$cor=$cor1;
	while($dados=mysql_fetch_array($execbanco)){
		echo"<tr bgcolor='$cor'>
				<td class='c2'>".$dados['codigo']."</td>
				<td class='c2'>".$dados['nome']."</td>
				<td class='c2'>".$dados['email']."</td>
				<td class='c2'>".$dados['login']."</td>
				<td class='c2' width='10' align='center'>
				<img src='fotos/".$dados['foto']."'height='40'/></td>
				<form method='post' action='editarprof.php'>
					<td class='c2' width='10'>
						<input type='hidden' name='codigo' value='".$dados['codigo']."'/>
						<input type='submit' value='Editar'/>
					</td>
				</form>
				<form method='post' action='deletaprof.php'>
					<td class='c2' width='10'>
					<input type='hidden' name='codigo' value='".$dados['codigo']."'/>
					<input type='submit' value='Excluir'/>
					</td>
				</form>
			</tr>";
	if($cor==$cor1){$cor=$cor2;}
	else{$cor=$cor1;}
	}
echo "</table>";
}		
?>