<html>
<!-- Essa pagina faz a busca de alunos dentro da pagina  professores-->
<head>
<title>Busca Avançada de Alunos</title>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/ >
<script type="text/javascript" src="js/javascript.js" /></script>
 
</head>
<body>
<body background="consulta.jpg" style="background-repeat: no-repeat">
</body>
<style type="text/css">
					.c1{
						border:solid 1px black;
						background:#cccccc;
						text-align:center;
						font-weight:bold;
						
					}
					
					.c2{
						color:#cccccc;
						position:relative;
						left:0px;
					}
					#logo{
						color:#cccccc;
						position:relative;
						top:-10;
						left:300px;
						
					}
					.busca{
						position:relative;
						top:-140px;
						left:250px;
					}
					
					
					.volta{
						position:relative;
						top:0px;
						left:0px;
						}
					.c3{
						border:solid 1px black;
					}
					.tablel{
					position:relative;
					top: -70px;
					left: 250px;
					}
					.lista{
					position:relative;
					top: -120px;
					left: 50px;
					}
					.tablea2{
						position:relative;
						top: -160px;
						left: 850px;
					}
					
				</style>
	<?php /* esse bloco de código em php verifica se existe a sessão, pois o usuário pode simplesmente não
// fazer o login e digitar na barra de endereço do seu navegador o caminho para a página principal do site (sistema),
// burlando assim a obrigação de fazer um login, com isso se ele não estiver feito o login não será criado a session, 
então ao verificar que a session não existe a página redireciona o mesmo para a index.php.*/

 session_start(); if((!isset ($_SESSION['slogin']) == true) and (!isset ($_SESSION['ssenha']) == true))
 { 
 unset($_SESSION['slogin']); 
 unset($_SESSION['ssenha']); 
 header('location:login.php'); 
 }
 $logado = $_SESSION['slogin'];
 $senha=$_SESSION['ssenha'];

include("conexao.php");
$sql="select*from professores where login='$logado'";
$execbanco=mysql_query($sql,$conexao);
$campo=mysql_fetch_array($execbanco);
?>
<br>
<div id="logo">
<table border="0" class="c2" >
	<tr>		
		<td align="center"><b><u> Seja Bem Professor </td>
		<td colspan="2" align="center"><?php echo date("l").", ".date("d")." de ".date("F")." de ".date("Y");?>
		<td><b><u>   Hora</u>: </b><?php echo date("H")." horas e " . date("i")." minutos" ;?>
			
	</tr>
	<tr><td colspan="4"><hr size=3 color="black">
	</tr>
	<tr>
		<td rowspan="3" align="center" valign="top"><?php echo"<img src='fotos_prof/".$campo['foto']."'height='90' border='2' width='95'/>"?>
		<td><b><font color="yellow">NOME:</font></b> <?php echo $campo['nome'];?> 
		<td><b><font color="yellow">DISCIPLINA:</font> </b><?php echo $campo['disciplina'];?>
		<td align="right"><b><font color="yellow">LOGIN:</font></b> <?php echo $campo['login'];?>
	</tr>
	<tr>
		<td>---------------------------------------------
		<td>-------------------------------------
		<td>------------------------------------
	</tr>
	<tr>
		<td><b><font color="yellow">FACULDADE:</font> </b> <?php echo $campo['faculdade'];?>
		<td><b><font color="yellow">CURSO:</font> </b><?php echo $campo['curso'];?>
		<td align="right"><input type="submit" value="Logout" onclick="logout();">
	</tr>
</table>
</div>
<br>


<br>
				
				<form action="professores.php" class="volta">
				<input type="submit" Value="Voltar" style="width:140;height:50"/>
				</form>
				<form method="post" action="busca_alu_prof1.php" class="tablel"><h3>
					Área: <select name="area" >
							<option value=""></option>						
							<option value="BIOLOGICAS">BIOLOGICAS</option>
							<option value="EXATAS">EXATAS</option>
							<option value="HUMANAS">HUMANAS</option>
						</select>
					Sala: <select name="sala">
						<option value=""></option>						
						<option value="A">A</option>
						<option value="B">B</option>
						<option value="C">C</option>
						<option value="D">D</option>
						<option value="E">E</option>
						<option value="F">F</option>
				</select>
				
				</h3>
					<input type="submit" value="Buscar" style="width:70;height:30"/>
					
				</form>
				
					<form method="post" action="busca_alu_prof2.php" class="tablea2"><h3>
										Escola Pública: <select name="escola"  tabindex="14" >
																<option value=""></option>
																<option value="SIM">SIM</option>
																<option value="NÃO">NÃO</option>
														</select>
											Semestre: <select name="semestre"  tabindex="14" >
														<option value=""></option>
														<option value="1">1º Semestre</option>
														<option value="2">2º Semestre</option>
													</select>
					</h3>
					<input type="submit" value="Buscar" style="width:70;height:30"/>
					
					</form>
					
		<?php	
				include("conexao.php");
				if (isset($_POST['area']) && isset($_POST['sala'])){ 
					$area=$_POST['area'];
					$sala=$_POST['sala'];
				if (($area != "") || ($sala != "")){
				$sql="select*from alunos where area like'%$area%' and sala like'%$sala%'" ; 
				$execbanco=mysql_query($sql,$conexao);
						if(mysql_num_rows($execbanco)==0){
							echo"<p class='busca'><font color='red' size='4px'>
							Nenhum registro foi encontrado";
						}
						else{
						$numprod=mysql_num_rows($execbanco);
						if($numprod <= 1){
							echo"<p class='busca'><font color='red'size='4px'>
							Foi encontrado $numprod aluno
							</p>";
						}
						else{
							echo"<p class='busca'><font color='red' size='4px'>
							Foram encontrados $numprod alunos
							</p>";
						}
							echo "<table  class='lista' border='0'>";
							echo"<tr> 
								<td class='c1' align='center'>Foto</td>
								<td class='c1' align='center'>___Nome____</td>
								<td class='c1' align='center'>___Telefone_1_</td>
								<td class='c1' align='center'>___Celular___</td>
								<td class='c1' align='center'>________E-mail________</td>
								<td class='c1' align='center'>__Turma__</td>
								<td class='c1' align='center'>__Ano__</td>
								<td class='c1' align='center'>__Semestre__</td>
								<td class='c1' align='center'>_Sala_</td>
								<td class='c1' align='center'>_Escola Pública_</td>
								<td class='c1' align='center'>_____Área_____</td>
								
								
							</tr>";
							$cor1="silver";
							$cor2="gray";
							$cor=$cor1;
							while($dados=mysql_fetch_array($execbanco)){
								echo"<tr bgcolor='$cor'>
										
										<td width='10' align='center'>
										<img src='fotos_alu/".$dados['foto']."'height='60'/></td>
										<td align='center'>".$dados['nome']."</td>
										<td align='center'>".$dados['telefone1']."</td>
										<td align='center'>".$dados['celular']."</td>
										<td align='center'>".$dados['email']."</td>
										<td align='center'>".$dados['turma']."</td>
										<td align='center'>".$dados['ano']."</td>
										<td align='center'>".$dados['semestre']."</td>
										<td align='center'>".$dados['sala']."</td>
										<td align='center'>".$dados['escola']."</td>
										<td align='center'>".$dados['area']."</td>
										
										
									</tr>";
							if($cor==$cor1){$cor=$cor2;}
							else{$cor=$cor1;}
							}
						echo "</table>";
						}		}
						else{
							echo "<p class='busca'><font color='red' size='4px'>
							Informe a Área ou Sala do Aluno";
		}} // codigo de busca de professores*/
	?>