<html>
<!-- Essa pagina faz a busca de alunos dentro da pagina  professores-->
<head>
<title>Lista de Alunos</title>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/ >
<script type="text/javascript" src="js/javascript.js" /></script>
 
</head>
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
					#centro{
					position:relative;
					top:0px;
					left:140px;
					}
					#titulo{
					position:relative;
					top:-20px;
					left:130px;
					}
					.volta{
						position:relative;
						top:100px;
						left:0px;
						}
</style>
<body>
<body background="consulta2.jpg" style="background-repeat: no-repeat">
</body>
<?php
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
<table border="0" class="c2">
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
			<form action="professores.php" class="volta">
				<input type="submit" Value="Voltar" style="width:120;height:50"/>
			</form>
<div id="titulo">
		<form method="post" action="busca_alu_prof.php" >
			<font size="3"><b>Aluno:</b></font> <input type="text" name="aluno" size="25" required="required" maxlength="25"/>
				<input type="submit" value="Buscar" />
				<input type="reset" value="Limpar" />
		</form>
		<form action="busca_alu_prof1.php" >
			<input type="submit" Value="BUSCA AVANÇADA" style="width:160;height:30"/>
		</form>

</div>
<div id="centro">
                      
<?php
			include("conexao.php");
			// Verifica se a variável tá declarada, senão deixa na primeira página como padrão
			if(isset($_REQUEST["p"])) {
			$p=$_REQUEST["p"];
			}
			else {
			$p = 1;
			}
			// Defina aqui a quantidade máxima de registros por página.
			$qnt = 12;
			// O sistema calcula o início da seleção calculando: 
			// (página atual * quantidade por página) - quantidade por página
			$inicio = ($p*$qnt) - $qnt;
			// Seleciona no banco de dados com o LIMIT indicado pelos números acima
			$sql_select = "SELECT * FROM alunos LIMIT $inicio, $qnt";
			// Executa o Query
			$sql_query = mysql_query($sql_select);
			
			// Exibe o nome que está no BD e pula uma linha
			echo "<table  border='0'>";
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
						while($array = mysql_fetch_array($sql_query)) {	
						echo"<tr bgcolor='$cor'>
										
										<td width='10' align='center'>
										<img src='fotos_alu/".$array['foto']."'height='60'/></td>
										<td align='center'>".$array['nome']."</td>
										<td align='center'>".$array['telefone1']."</td>
										<td align='center'>".$array['celular']."</td>
										<td align='center'>".$array['email']."</td>
										<td align='center'>".$array['turma']."</td>
										<td align='center'>".$array['ano']."</td>
										<td align='center'>".$array['semestre']."</td>
										<td align='center'>".$array['sala']."</td>
										<td align='center'>".$array['escola']."</td>
										<td align='center'>".$array['area']."</td>
								</tr>";
							if($cor==$cor1){$cor=$cor2;}
						else{$cor=$cor1;}
							
						} 
					echo "</table>";?>
				
			
			
			<?php
			// Depois que selecionou todos os nome, pula uma linha para exibir os links(próxima, última...)
			echo "<br />";

			// Faz uma nova seleção no banco de dados, desta vez sem LIMIT, 
			// para pegarmos o número total de registros
			$sql_select_all = "SELECT * FROM alunos";
			// Executa o query da seleção acimas
			$sql_query_all = mysql_query($sql_select_all);
			// Gera uma variável com o número total de registros no banco de dados
			$total_registros = mysql_num_rows($sql_query_all);
			// Gera outra variável, desta vez com o número de páginas que será precisa. 
			// O comando ceil() arredonda 'para cima' o valor
			$pags = ceil($total_registros/$qnt);
			// Número máximos de botões de paginação
			$max_links = 6;
			?>
			<div align="center">
			<?php
			// Exibe o primeiro link 'primeira página', que não entra na contagem acima(3)
			echo "<a href='lista_alunos.php?p=1' target='_self'>primeira pagina</a> ";
			// Cria um for() para exibir os 3 links antes da página atual
			for($i = $p-$max_links; $i <= $p-1; $i++) {
			// Se o número da página for menor ou igual a zero, não faz nada
			// (afinal, não existe página 0, -1, -2..)
			if($i <=0) {
			//faz nada
			// Se estiver tudo OK, cria o link para outra página
			} else {
			echo "<a href='lista_alunos.php?p=".$i."' target='_self'>".$i."</a> ";
			}
			}
			// Exibe a página atual, sem link, apenas o número
			echo $p." ";
			// Cria outro for(), desta vez para exibir 3 links após a página atual
			for($i = $p+1; $i <= $p+$max_links; $i++) {
			// Verifica se a página atual é maior do que a última página. Se for, não faz nada.
			if($i > $pags)
			{
			//faz nada
			}
			// Se tiver tudo Ok gera os links.
			else
			{
			echo "<a href='lista_alunos.php?p=".$i."' target='_self'>".$i."</a> ";
			}
			}
			// Exibe o link "última página"
			echo "<a href='lista_alunos.php?p=".$pags."' target='_self'>ultima pagina</a> ";
			?>
			</div>
	</div>
