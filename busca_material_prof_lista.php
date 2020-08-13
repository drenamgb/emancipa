<html>
<!-- Essa pagina faz a busca de professores dentro da pagina  alunos-->
<head>
<title>Busca de Material	</title>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/ >
<script type="text/javascript" src="js/javascript.js" /></script>
 
</head>
<body>
<body background="home.jpg">
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
						
					}
					#logo{
						color:#cccccc;
						position:relative;
						top:-10;
						left:300px;
						
					}
					.busca{
						position:relative;
						top:-70px;
						left:270px;
					}
					
					.busc{
						position:relative;
						top:-80px;
						left:350px;
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
						top: -50px;
						left: 300px;
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
<br><div id="logo">
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
<br>
</div>
<br>


<br>
				<form action="professores.php" class="volta">
				<input type="submit" Value="Voltar" style="width:120;height:50"/>
				</form>

				<form method="post" action="busca_material_prof_lista.php" class="busca" >
					<font size="4"><b>Lista ou Link:</font><input type="text" name="lista"  required="required">
					<input type="submit" value="FILTRAR" />				
				</form>
				<form method="post" action="busca_material_prof.php" >
						<font size="4"><b>Disciplina:</font></b><select name="disciplina" required="required" >
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
											</select><input type="submit" value="Buscar" />				
						
					</form>
	<p>
				<form method="post" action="busca_material_prof_lista.php" >
					</font><input type="hidden" name="lista" >
					<input type="submit" value="Listar todas as listas" />				
				</form>
				
				
				
				<p>
				
				
		
<?php
				include("conexao.php");
					$sql="select*from listas";
					$disciplina=$campo['disciplina'];
					$execbanco=mysql_query($sql,$conexao);
					if (isset($_POST['lista'])) {
					$lista=$_POST['lista'];
					$sql="select*from listas where lista like'%$lista%' or  link like '%$lista%' order by cod desc" ;  /*apenas uma frase, 
					'order by' ordena do menor para o maior
					 'order by desc' é o contrario 
					 where delimita a quais campos o interessa*/
					$execbanco=mysql_query($sql,$conexao); //mysql_query e uma função q executa  uma variavel em uma base de dados

					if(mysql_num_rows($execbanco)==0){  //verifica se a alguma linha de regitrso na base de dados
						echo"<p><font color='red'size='4px'>
								Nenhum material com o nome de $lista
							</p>";//Para funcionar a classe tem que por a letra P no começo da tag dentro do echo
						}
					else{
						$numprod=mysql_num_rows($execbanco);
						if($numprod <= 1){
							echo"<p><font color='red'size='4px'>
							Foi encontrado $numprod $lista
							</p>";
						}
						else{
							echo"<p><font color='red' size='4px'>
							Foram encontrados $numprod $lista
							</p>";
						}
						echo "<table  border='0'>";
							echo"<tr>
								<td class='c1' align='center'><b> DOWNLOAD </td>
								<td class='c1' align='center'><b> Apagar </td>
								<td class='c1' align='center'>_DISCIPLINA_</td>
								<td class='c1' align='center'>_________PROFESSOR_________</td>
								<td class='c1' align='center' colspan='2'>_Data e Hora do Lançamento_</td>
								<td class='c1' align='center'>___________LISTA___________</td>
								<td class='c1' align='center'>___LINK-WEB___</td>
								
								
							</tr>";
							$cor1="silver";
							$cor2="gray";
							$cor=$cor1;
							while($dados=mysql_fetch_array($execbanco)){
								echo"<tr bgcolor='$cor'>
										<td class='c1' align='center'><b><a href='lista/".$dados['lista']."' target='_blank'>link</a> </td>
									<form method='post' action='deleta_material_professores2.php'>
										<td class='c1' width='10'>
											<input type='hidden' name='codigo' value='".$dados['cod']."'/>
											<input type='submit' value='X'  style='width:35;height:25;color:red'/></td>
									</form>
										<td align='center'>".$dados['disciplina']."</td>
										<td align='center'>".$dados['professor']."</td>
										<td align='center'>".$dados['data']."</td>
										<td align='center'>".$dados['hora']."</td>										
										<td align='center'>".$dados['lista']."</td>
										<td align='center'>".$dados['link']."</td>
										
									</tr>";
							if($cor==$cor1){$cor=$cor2;}
							else{$cor=$cor1;}
							}
						echo "</table>";
						}
						}
						else{
							echo "<p><font color='red' size='4px'>
							Informe o nome do material";
		} // codigo de busca de professores
	?>
	
				