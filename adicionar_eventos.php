<html>
<head>
	<title> Adicionar EVENTOS - Área Restrita </title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/ > <!-- comando para corrigir caracteres  -->
	<script type="text/javascript" src="js/javascript.js" /></script>

</head>
</html>
<style>
	a:link {
		color: red;
	}
	.c1{
		border:solid 1px black;
		background:#cccccc;
		text-align:center;
		font-weight:bold;
		}
	#eventos{
		position:relative;
		top: 20px;
		left: 50px;
		}
			

</style>
<?php 
	
				
?>

<a href="professores.php"><font color="green" size="5"><b>Central do Aluno</a><p><p>
<a href="area_restrita.php"><font color="blue" size="5"><b>Voltar<br></a>
<?php session_start(); if((!isset ($_SESSION['slogin']) == true) and (!isset ($_SESSION['ssenha']) == true))
 { 
 unset($_SESSION['slogin']); 
 unset($_SESSION['ssenha']); 
 unset($_SESSION['scodigo']);
 header('location:login.php'); 
 }
 $logado = $_SESSION['slogin'];
 $senha=$_SESSION['ssenha'];
 $codigo=$_SESSION['scodigo'];
include("conexao.php");
$sql="select*from professores where login='$logado'";
$execbanco=mysql_query($sql,$conexao);
$campo=mysql_fetch_array($execbanco);
?>

	<div id="eventos">
			<font color="red" size="4"><b>ADICIONAR NOVO EVENTO
			<table bordercolor="green">
			<form action="cad_eventos.php" method="post">
			<tr>
				<td><b>Título do Evento:</td>
				<td><input type="text" name="evento"required="required" size="50"></td>
				<td colspan="9" rowspan="3"><b>Descrição / Detalhes sobre o Evento:<br>
				<textarea  name="descricao" rows=5 cols=40  tabindex="13" maxlength="200"/></textarea>
			</tr>
			</tr>
			
			<tr>
				<td><b> Organizador/Responsável:</td>
				<td><input type="text" name="organizador"  size="30"required="required"><b><font size="5"> / </font></b>
				<?php echo $campo['nome']?>
			</tr>
			<tr>
				<td><b>Local de realização:</td>
				<td><input type="text" name="local" size="30" required="required">
				<b>Hora:<input type="text" name="hora" size="5" maxlength="5" required="required" onkeyup="maskIt(this,event,'##:##')"></b>00h:00m
			</tr>
			<tr>
				<td><b>Data do evento:</td>
				<td><input type="text" name="data" required="required" size="10" value="DD/MM/AAAA" maxlength="10" onkeyup="maskIt(this,event,'##/##/####')">
				<b>HOJE: </b> <?php echo date("d")."/".date("m")."/".date("Y")?> 
				<b>Hora: </b> <?php echo date("H")."h : ".date("i")."s"?>	
				<td><b>Disponivel <font color="red"><b>APENAS</b></font> para:</td>
				<td><select name="disponivel" required="required" >
						<option value=""></option>
						<option value="1">PROFESSORES</option>
						<option value="2">ALUNOS</option>
						<option value="3">TODOS</option>
					</select>
			</tr>
			
			<tr>
				<td colspan="2" align="right">
				<input type="reset" value="Limpar">
				<input type="submit" value="Adicionar"></td>
			</tr>
			</form>
			</table>
			<p><p>
				<?php	
				include("conexao.php");
				$sql="select*from eventos  order by cod desc";
				$execbanco=mysql_query($sql,$conexao);
						if(mysql_num_rows($execbanco)==0){
							echo"Nenhum material foi lançado";
						}
						else{
							echo "<table  border='0'>";
							echo"<tr>
									<td class='c1' align='center'>Apagar</td>
									<td class='c1' align='center'>_DISPONIVEL_</td>
									<td class='c1' align='center'>______EVENTO______</td>
									<td class='c1' align='center'>______ORGANIZADOR______</td>
									<td class='c1' align='center'>___DATA___</td>
									<td class='c1' align='center'>_________LOCAL_________</td>
									<td class='c1' align='center'>_HORA_</td>
									<td class='c1' align='center'>___DESCRIÇÃO___</td>
									<td colspan='3'class='c1' align='center'>RESPONSAVEL / DATA e HORA de REGISTRO_</td>
									
								</tr>";
							$cor1="silver";
							$cor2="gray";
							$cor=$cor1;
							while($dados=mysql_fetch_array($execbanco)){
								echo"<tr bgcolor='$cor'>
										<form method='post' action='deleta_eventos.php'>
										<td class='c1'>
											<input type='hidden' name='codigo' value='".$dados['cod']."'/>
											<input type='submit' value='X'  style='width:40;height:20;color:red'/>
										</td>
									</form>
										<td align='center'>".$dados['disponivel']."</td>
										<td align='center'>".$dados['evento']."</td>
										<td align='center'>".$dados['organizador']."</td>
										<td align='center'>".$dados['data']."</td>
										<td align='center'>".$dados['local']."</td>
										<td align='center'>".$dados['hora']."</td>
										<td align='center'>".$dados['descricao']."</td>		
										<td align='center'>".$dados['responsavel']."</td>	
										<td align='center'>".$dados['data2']."</td>
										<td align='center'>".$dados['hora2']."</td>											
									</tr>";
							if($cor==$cor1){$cor=$cor2;}
							else{$cor=$cor1;}
							}
						echo "</table>";
						}	?>
			</div>