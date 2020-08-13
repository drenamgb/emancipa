<html>
<head>
<title>Central do Aluno	</title>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/ >
<script type="text/javascript" src="js/javascript.js" /></script>
 
</head>

<style>

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
	a:visited {
		color: blue;
	}
	.tablep{
		position:relative;
		top: -570px;
		left: 300px;
	}
	.tablel{
		position:relative;
		top: -600px;
		left: 300px;
	}
	#calendario{
		position:relative;
		top:-600px;
		left: 300px;
	}	
	#carteira{
		position:relative;
		left: 300px;
		top:-600px;
	
	}
	#eventos{
		position:relative;
		top:-600px;
		left: 300px;
		
	}	
	#contato{
		position:relative;
		top:-600px;
		left: 300px;
		
	}
	#lista{
		position:relative;
		top:-600px;
		left: 300px;
		
	}
	#notas{
		position:relative;
		left: 300px;
		top:-580px;
	
	}	
	#grafico{
		position:relative;
		left: 280px;
		top:-500px;
	
	}
	#grade{
		position:relative;
		top:-600px;
		left: 250px;
		
	}
	#container {
		max-height: 300px; 
		min-width: 400px; 
		max-width: 1000px;
		
	}

		
			#sse3{
				background-color: #000;
				height: 600px;
				width:230px;
				
				clear:both;
				text-align:center;/*For IE5 or IE No DOCTYPE*/
				border-radius: 4px;
				-moz-border-radius: 4px;
				-webkit-border-radius: 4px;
			}
	
			#sses3
			{
				margin: 0 auto;/*If you don't want the menu center aligned, remove this line and above text-align:center*/
				border-left:solid 1px red;
				
			}
					
			#sses3 ul
			{
				font: normal 13px Arial;
				list-style-type: none;
				float:left;
				
				padding:0;margin:0;
				
			}
					
			#sses3 li
			{
                            /*cor de fundo da tabela*/
				background: #000000;  
				line-height: 50px;
				position: relative;
				overflow: hidden;/*used to hide slip*/
				z-index: 0;
				float:left;
				
				list-style-type: none;
				padding:0;margin:0;background-image:none;
				border-right:solid 1px black;
			}
					
			#sses3 li.current, #sses3 .slip
			{
/*                            <!-- cor de fundo do movimento-->*/
				background-color: #555;  
				
			}
					
			#sses3 li a
			{
				text-align: center;
				text-decoration: none;
				width:160px;
				
				padding: 0 30px;/*30px is used to adjust the distance between each menu item. Now the distance is 30+30=60px.*/
				/*width: 100px;*/ /*If you prefer a fixed width, uncomment this line and comment out above line*/
				color: white;
				display: block;
				z-index: 2;
				white-space:nowrap;
			}
					
			#sses3 li.current a
			{
				color: white;
				
			}
					
			#sses3 .slip
			{
				position: absolute;
				top: 0;
				z-index: -1;
				
			}
		
</style>
<body >
	
<body >
<body background="home.jpg"  style="background-repeat: no-repeat"> 


<?php /* esse bloco de código em php verifica se existe a sessão, pois o usuário pode simplesmente não
// fazer o login e digitar na barra de endereço do seu navegador o caminho para a página principal do site (sistema),
// burlando assim a obrigação de fazer um login, com isso se ele não estiver feito o login não será criado a session, 
então ao verificar que a session não existe a página redireciona o mesmo para a index.php.*/

 session_start(); if((!isset ($_SESSION['slogin']) == true) and (!isset ($_SESSION['ssenha']) == true))
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
$sql="select*from alunos where login='$logado'";
$execbanco=mysql_query($sql,$conexao);
$campo=mysql_fetch_array($execbanco);
?>
<br><div id="logo">
<table border="0" class="c2" >
	<tr>		
		
		<td align="center"><b><u> Seja Bem Aluno </td>
		<td colspan="3" align="center"><?php echo date("l").", ".date("d")." de ".date("F")." de ".date("Y");?>
		<td colspan="2"><b><u>   Hora</u>: </b><?php echo date("H")." horas e " . date("i")." minutos" ;?>
			
	</tr>
	<tr><td colspan="7"><hr size=3 color="black">
	</tr>
	<tr>
		<td rowspan="3" align="center" valign="top"><?php echo"<img src='fotos_alu/".$campo['foto']."'height='90' border='2' width='95'/>"?>
		<td><b><font color="yellow">NOME: </font> <?php echo $campo['nome'];?> </b>
		
		<td><font color="yellow"><b><font color="yellow">SALA:</font> </b></font> <?php echo $campo['sala'];?>
		<td><b><font color="yellow">TURMA:</font> </b><?php echo $campo['turma'];?>
		
		<td><b><font color="yellow">LOGIN:</font></b> <?php echo $campo['login'];?>
		
	</tr>
	<tr>
		<td>------------------------------------------------------
		<td>-------------------------------
		<td>--------------------------------
		<td>--------------------
	</tr>
	<tr>
	<td><b><font color="yellow">CURSO:</font> </b><?php echo $campo['curso'];?>
		<td><b><font color="yellow">AREA:</font> </b> <?php echo $campo['area'];?>
		<td><b><font color="yellow">SEMESTRE:</font> </b> <?php echo $campo['semestre'];?>
		<td><b><font color="yellow">ANO:</font> </b> <?php echo $campo['ano'];?>
		
		<td align="right"><input type="submit" value="Logout"  onclick="logout();">
	</tr>
	
</table>
<br>
</div>
<div id="sse3">
  <div id="sses3">
    <ul>
      
	  <li><h2><a href="alunos.php?teste=dados_pessoais">Dados Pessoais</a></h2></li>
      <li><h2><a href="alunos.php?teste=lista_prof">Professores</a><h2>	</li>
      <li><h2><a href="alunos.php?teste=cronograma">Vestibulares</a></h2> </li>
      <li><h2><a href="alunos.php?teste=grade">Grade de Horário</a></h2> </li>
	  <li><h2><a href="alunos.php?teste=material">Material de Estudo</a></h2> </li><p>
	  <li> <h2><a href="alunos.php?teste=desempenho">Desempenho</a></h2></li>
	   <li><h2><a href="alunos.php?teste=carteira">Carteirinha</a><h2></li><p>
	    <li><h2><a href="alunos.php?teste=eventos">Eventos</a></h2> </li><p>
		 <li><h2><a href="alunos.php?teste=contato">Contato</a></h2> </li><p>
   </ul>
  </div>
</div>


<br>

<?php


if (isset($_REQUEST['teste'])){  //isset verifica se a variavel existe
$x=$_REQUEST['teste'];  //REQUEST tem q ser maiusculo, resgata a variavel q esta na barra de endereço

switch ($x){
	case "dados_pessoais":

include("conexao.php");
$sql="select*from alunos where login='$logado'";
$execbanco=mysql_query($sql,$conexao);
$campo=mysql_fetch_array($execbanco);
?>
				<table class="tablep" border="0" class="tablel" >
					<form method="post" name="formulario" action="atualiza_alu.php" enctype="multipart/form-date" onsubmit="return validacao();">
						<tr>
							<td colspan="4"><h2><u>Informação Pessoal</h2></td>
							<td colspan="3"><h2><u>Informação Acadêmica</h2></td>
							<td colspan="3"><h2><u>Informação de Acesso</h2></td>		
						</tr>
						<tr>
							<td><b> Nome: </td>
							<td><input type="text" name="nome" required="required"  value='<?php echo $campo['nome']; ?>' maxlength="25" size="30"/></td>
							<td></td><td class="c2">..............</td>
							<td><b>Unidade: </b></td><td>
								<select name="unidade" required="required" >
									<option value="<?php echo $campo['unidade'];?>"><?php echo $campo['unidade'];?>	</option>
								</select>
							<td class="c2">..............</td>
							<td><b>Login: </td>
							<td><input type="text" name="login" disabled value='<?php echo $campo['login']; ?>'    size="10" /></td>
						</tr>
						<tr>
							<td><b> Endereço: </td>
							<td><input type="text" name="endereco" value='<?php echo $campo['endereco']; ?>' size="30" maxlength="40" /></td>
							<td></td><td></td>
							<td><b>Turma: </td>
							<td> <input type="text" name="turma"  disabled size="10" value='<?php echo $campo['turma']; ?>'  /></td>
							<td></td>
							<td><b>Senha: </td>
							<td><input type="password" name="senha" required="required"  value='<?php echo $campo['senha']; ?>' size="12"  maxlength="10"/></td>
							</tr>
						<tr>
							<td><b> Bairro: </td>
							<td><input type="text" name="bairro" required="required"  value='<?php echo $campo['bairro']; ?>'  size="30" maxlength="30"/></td>
							<td></td><td></td>
							<td><b>Ano: </td>
							<td><input type="text" name="ano" disabled size="5" value='<?php echo $campo['ano']; ?>'  /></td>
						</tr>
						<tr>
							<td><b>Cidade: </td>
							<td><input type="text" name="cidade"  required="required" value='<?php echo $campo['cidade']; ?>' size="20" maxlength="25" />
							<td></td><td></td>
							<td><b>Semestre: </td>
							<td><input type="text" name="semestre" disabled value='<?php echo $campo['semestre']; ?>'  size="10" /></td>
						</tr>
						<tr>
							<td><b>Complemento: </td>
							<td><input type="text" name="complemento" required="required"  size="15" value='<?php echo $campo['complemento']; ?>' maxlength="15" />
							 </td>
							<td></td><td></td>
							
							<td><b>Sala: </td>
							<td><input type="text" name="sala" disabled size="1" value='<?php echo $campo['sala']; ?>'   /></td>
						</tr>
						<tr>
							<td><b>Telefone 1: </td>
							<td colspan="2"><input type="text" name="telefone1" required="required"  onkeyup="maskIt(this,event,'(##)####-####')" value='<?php echo $campo['telefone1']; ?>' size="13"  maxlength=13 />
							<td></td>
							<td><b>Curso: </td>
							<td><input type="text" name="curso" size="25" value='<?php echo $campo['curso']; ?>' maxlength="30"/></td>
						</tr>
						<tr>
							<td><b>Telefone 2: </td>
							<td colspan="2"><input type="text" name="telefone2" onkeyup="maskIt(this,event,'(##)####-####')" value='<?php echo $campo['telefone2']; ?>'  size="13" maxlength=13/>
							<font size="3px">Opcional	
							<td></td>
							<td><b>Area: </td>
							<td><select name="area"required="required" >
									<option value="<?php echo $campo['area'];?>"><?php echo $campo['area'];?>	</option>
									<option value="BIOLOGICAS">BIOLOGICAS</option>
									<option value="EXATAS">EXATAS</option>
									<option value="HUMANAS">HUMANAS</option>
								</select>
						</tr>
						<tr>
							<td><b>Celular: </td>
							<td colspan="2"><input type="text" name="celular"  required="required" onkeyup="maskIt(this,event,'(##)####-####')" size="15"  value='<?php echo $campo['celular']; ?>' size="13" maxlength=13 />
							<font size="3px">Sem o nº 9 
							<td></td><td><b>Escola Pública: </td>
							<td><input type="text" name="escola" value='<?php echo $campo['escola']; ?>' size="5"  disabled /></td>
						
							</tr>
						<tr>
							<td><b>E-mail: </td>
							<td><input type="text" name="email" required="required"   size="30"  value='<?php echo $campo['email']; ?>' maxlength="40" /></td>
							<td><td>
							
							</td>
						
						</tr>
						<tr>
							<td><b>Data de Nascimento: </td>
							<td><input type="text" name="data" required="required" size="8" onkeyup="maskIt(this,event,'##-##-####.jpg')" maxlength=10 value='<?php echo $campo['data']; ?>' /></td>
						</tr>
									
							<td colspan="10" align="right">
								<hr></hr>
								<input type="hidden" name="codigo" value="<?php echo $campo['codigo'];?>" />
								<input type="submit" value="Atualizar" onClick="alert('ATENÇÃO! Seus Dados serão Atualizados!')"/>
								<input type="reset" value="Desfazer"/>
							</td>
						</tr>
					</form>
				</table>
<?php break;
		
	
	case "lista_prof": 
						
					 ?> 
					<form method="post" action="busca_prof_alu.php" class="tablel">
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
		<?php	
				include("conexao.php");
				$sql="select*from professores";
				$execbanco=mysql_query($sql,$conexao);
						if(mysql_num_rows($execbanco)==0){
							echo"Nenhum registro foi encontrado";
						}
						else{
							echo "<table  class='tablel' border='0'>";
							echo"<tr>
								<td class='c1' align='center'>__Foto__</td>
								<td class='c1' align='center'>_______Nome_______</td>
								<td class='c1' align='center'>___Disciplina___</td>
								<td class='c1' align='center'>___Faculdade___</td>
								<td class='c1' align='center'>______Curso______</td>
								<td class='c1' align='center'>____Telefone_1__</td>
								<td class='c1' align='center'>____Celular____</td>
								<td class='c1' align='center'>________E-mail________</td>
								
							</tr>";
							$cor1="silver";
							$cor2="gray";
							$cor=$cor1;
							while($dados=mysql_fetch_array($execbanco)){
								echo"<tr bgcolor='$cor'>
										<td width='10' align='center'>
										<img src='fotos_prof/".$dados['foto']."'height='60'/></td>
										<td align='center'>".$dados['nome']."</td>
										<td align='center'>".$dados['disciplina']."</td>
										<td align='center'>".$dados['faculdade']."</td>
										<td align='center'>".$dados['curso']."</td>
										<td align='center'>".$dados['telefone1']."</td>
										<td align='center'>".$dados['celular']."</td>
										<td align='center'>".$dados['email']."</td>
										
										
									</tr>";
							if($cor==$cor1){$cor=$cor2;}
							else{$cor=$cor1;}
							}
						echo "</table>";
						}		
	?><?php
						// chave do switch case e do isset
						
	 break;
	 case "grade":?>
	  
				 <div id="grade">
		<font size="5" color="red"><b><u>HISTÓRICO DE AULAS<p>
<?php
include("conexao.php");
$sql="select*from grade order by cod desc";
$execbanco=mysql_query($sql,$conexao);
if(mysql_num_rows($execbanco)==0){
	echo"<script>
		alert('Grade de Horário não encontrada !');
		history.go(-1);
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
			<td colspan="3"> <b>Local:</b><?php echo $dados['local'];?></td>
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
	 
	 
	 
	 
	 <?php
	 break;
	 case "cronograma":?>
					
					<div id="calendario">
						<table	border="0">
							<tr>
								<td><font size="5"><b>DATAS</b>________<b>VESTIBULARES</b>________________________________________
								<td><font size="5"><b>CALENDÁRIO</b>
								
							<tr>
							<tr>
								<td><br>	01/08	Inscrições ITA (Instituto Técnico de Aeronáutica)								
<br>	11/08   Fim das inscrições para o pedido de isenção de taxa do vestibular de verão 2015 - Fuvest/USP								
<br>	11/08	Início das inscrições (pela Internet) para o vestibular de verão 2015 - Unicamp(Universidade Estadual de Campinas)								
<br>	22/08	Início das inscrições (pela Internet) para o vestibular de verão 2015 -Fuvest/USP (USP/Santa Casa)								
<br>	29/08	Fim das inscrições (pela Internet) para o vestibular de vagas remanescentes 2015 - Unicamp (Remanescentes)								
<br>	08/09	Fim das inscrições (pela Internet) para o vestibular de verão 2015 - Fuvest/USP(USP/Santa Casa)								
<br>	11/09	Fim das inscrições (pela Internet) para o vestibular de verão 2015 - Unicamp(Universidade Estadual de Campinas)								
<br>	15/09	Início das inscrições (pela Internet) para o vestibular de verão 2015 - Unesp(Universidade Estadual Paulista)								
<br>	22/09	Início das inscrições (pela Internet) para o vestibular de verão 2015 - Unifesp(Universidade Federal de São Paulo)								
<br>	10/10	Fim das inscrições (pela Internet) para o vestibular de verão 2015 - Unesp(Universidade Estadual Paulista)								
<br>	24/10	Fim das inscrições (pela Internet) para o vestibular de verão 2015 - Unifesp(Universidade Federal de São Paulo)								
<br>	27/10	Início das inscrições (pela Internet) para o vestibular de verão 2015 - Famerp(Faculdade de Medicina de São José do Rio Preto)								
<br>	08/11	Prova da 1ª fase do Enem 2014.								
<br>	09/11	Prova da 1ª fase do Enem 2014.								
<br>	14/11	Fim das inscrições (pela Internet) para o vestibular de verão 2015 - Famerp(Faculdade de Medicina de São José do Rio Preto)								
<br>	16/11	Prova da 1ª fase do vestibular de verão 2015 - Unesp (Universidade Estadual Paulista)								
<br>	23/11	Prova da 1ª fase do vestibular de verão 2015 - Unicamp (Universidade Estadual de Campinas)								
<br>	30/11	Prova da 1ª fase do vestibular de verão 2015 - Fuvest/USP (USP/Santa Casa)								
<br>	11/12	Prova da 1ª fase do vestibular de verão 2015 - Unifesp (Universidade Federal de São Paulo)								
<br>	12/12	Fim das provas da 1ª fase do vestibular de verão 2015 - Unifesp (Universidade Federal de São Paulo)								
<br>	14/12	Prova da 2ª fase do vestibular de verão 2015 - Unesp (Universidade Estadual Paulista)								
<br>	15/12	Prova da 2ª fase do vestibular de verão 2015 - Unesp (Universidade Estadual Paulista)								
<br>	18/12	Prova da 1ª fase do vestibular de verão 2015 - Famerp (Faculdade de Medicina de São José do Rio Preto)								
<br>	19/12	Fim das provas da 1ª fase do vestibular de verão 2015 - Famerp (Faculdade de Medicina de São José do Rio Preto)								
<br>	04/01	Prova da 2ª fase do vestibular de verão 2015 - Fuvest/USP (USP/Santa Casa)								
<br>	05/01	Prova da 2ª fase do vestibular de verão 2015 - Fuvest/USP (USP/Santa Casa)								
<br>	06/01	Prova da 2ª fase do vestibular de verão 2015 - Fuvest/USP (USP/Santa Casa)								
<br>	11/01	Prova da 2ª fase do vestibular de verão 2015 - Unicamp (Universidade Estadual de Campinas)								
<br>	12/01	Prova da 2ª fase do vestibular de verão 2015 - Unicamp (Universidade Estadual de Campinas)								
<br>	13/01	Prova da 2ª fase do vestibular de verão 2015 - Unicamp (Universidade Estadual de Campinas)								
								<td><script type="text/javascript">
									writeCalendar()
									</script>
						</table>
					</div>
	<?php
	break;
	case "material":?>
	<div id="lista">
	
	<h3><font color="red" size="4">MATERIAL DE ESTUDO</font> para os alunos</h3>
	Para fazer <b>DOWNLOAD</b> do material clique ao lado do material desejado.
	<p>
	
	<form method="post" action="busca_material_alu.php" >
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
	<?php
				include("conexao.php");
				$sql="select*from listas order by cod desc , disciplina   ";
				$execbanco=mysql_query($sql,$conexao);
						if(mysql_num_rows($execbanco)==0){
							echo"Nenhum material foi lançado";
						}
						else{
							echo "<table  border='0'>";
							echo"<tr>
								<td class='c1' align='center'><b> DOWNLOAD </td>
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
						}	?>	
					</div>
	
	<?php
	break;
	case "desempenho":
	
	include("conexao.php");
	$sql="select*from notas where codigo='1'";
	$execbanco=mysql_query($sql,$conexao);
	$campo=mysql_fetch_array($execbanco);
?>
	
	
			<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<style type="text/css">

		</style>
		<div id="notas">
	<table bordercolor="black">
	<tr>
		<td align="center">
			<table border="1">
			<tr>
				<td colspan="4"><font size="5" color="red"><b> Média Geral </font> (Florestan)
			<tr>
				<td rowspan="2"><b>DISCIPLNAS
				<td colspan="3" align="center"><b>Porcentagem
			<tr><td align="center">S1<td align="center">S2<td align="center">S3
			
			<tr>
				<td>Portugues:<br>
					História:<br>
					Geografia:<br>
					Biologia:<br>
					Matematica:<br>
					Física:<br>
					Química:<br>
					Sociologia:<br>
					Filosofia:<br>
					Inglês:<br>
					Espanhol:<br>
					Redação:
				
				<td align="center">
					<?php echo $campo['portugues1'];?><br>
					<?php echo $campo['historia1'];?><br>
					<?php echo $campo['geografia1'];?><br>
					<?php echo $campo['biologia1'];?><br>
					<?php echo $campo['matematica1'];?><br>
					<?php echo $campo['fisica1'];?><br>
					<?php echo $campo['quimica1'];?><br>
					<?php echo $campo['sociologia1'];?><br>
					<?php echo $campo['filosofia1'];?><br>
					<?php echo $campo['ingles1'];?><br>
					<?php echo $campo['espanhol1'];?><br>
					<?php echo $campo['redacao1'];?> % 
					<td align="center">
					<?php echo $campo['portugues2'];?><br>
					<?php echo $campo['historia2'];?><br>
					<?php echo $campo['geografia2'];?><br>
					<?php echo $campo['biologia2'];?><br>
					<?php echo $campo['matematica2'];?><br>
					<?php echo $campo['fisica2'];?><br>
					<?php echo $campo['quimica2'];?><br>
					<?php echo $campo['sociologia2'];?><br>
					<?php echo $campo['filosofia2'];?><br>
					<?php echo $campo['ingles2'];?><br>
					<?php echo $campo['espanhol2'];?><br>
					<?php echo $campo['redacao2'];?> % 
					<td align="center">
					<?php echo $campo['portugues3'];?><br>
					<?php echo $campo['historia3'];?><br>
					<?php echo $campo['geografia3'];?><br>
					<?php echo $campo['biologia3'];?><br>
					<?php echo $campo['matematica3'];?><br>
					<?php echo $campo['fisica3'];?><br>
					<?php echo $campo['quimica3'];?><br>
					<?php echo $campo['sociologia3'];?><br>
					<?php echo $campo['filosofia3'];?><br>
					<?php echo $campo['ingles3'];?><br>
					<?php echo $campo['espanhol3'];?><br>
					<?php echo $campo['redacao3'];?> % 
				
			
				
	</table>
		
	<td valign="top">
			
				<table border="1">
				<tr>
					<td colspan="5" align="center"><font size="5" color="blue" ><b>Média Individual</font><b>
				<tr>
				<?php
					include("conexao.php");
					$sql="select*from alunos where login='$logado'";
					$execbanco=mysql_query($sql,$conexao);
					$campo=mysql_fetch_array($execbanco);?>
					<td rowspan="2" colspan="2"><b><?php echo $campo['nome'];?>
					<td colspan="3" align="center"><b>PONTOS
				<tr>
					<td align="center">S1<td align="center">S2<td align="center">S3
				<tr><td align="center">MÉDIA Aritmética
						<td  align="center">Nota da Sala:<br>
						<b>Sua NOTA:<br>			
						<b>Sua REDAÇÃO:
				<?php
					include("conexao.php");
					$sql="select*from notas where codigo='1'";
					$execbanco=mysql_query($sql,$conexao);
					$campo=mysql_fetch_array($execbanco);?>
			<td align="center">
				<?php echo $campo['mediasala1'];?><br>
				<?php 
					include("conexao.php");
					$sql="select*from alunos where login='$logado'";
					$execbanco=mysql_query($sql,$conexao);
					$campo=mysql_fetch_array($execbanco);?>	
				<?php echo $campo['media1'];?><br>
				<?php echo $campo['red1'];?>% 
				<?php 
					include("conexao.php");
					$sql="select*from notas where codigo='1'";
					$execbanco=mysql_query($sql,$conexao);
					$campo=mysql_fetch_array($execbanco);?>
			<td align="center">
				<?php echo $campo['mediasala2'];?><br>
				<?php
					include("conexao.php");
					$sql="select*from alunos where login='$logado'";
					$execbanco=mysql_query($sql,$conexao);
					$campo=mysql_fetch_array($execbanco);?>
				<?php echo $campo['media2'];?><br>
				<?php echo $campo['red2'];?> %
				
				<?php
					include("conexao.php");
					$sql="select*from notas where codigo='1'";
					$execbanco=mysql_query($sql,$conexao);
					$campo=mysql_fetch_array($execbanco);?>
			<td align="center">
				<?php echo $campo['mediasala3'];?><br>
				<?php 
					include("conexao.php");
					$sql="select*from alunos where login='$logado'";
					$execbanco=mysql_query($sql,$conexao);
					$campo=mysql_fetch_array($execbanco);?>
				<?php echo $campo['media3'];?><br>
				<?php echo $campo['red3'];?> %
				<tr><td colspan="5">S1=Simulado 1, S2 = Simulado 2, S3 = Simulado 3
		</table>
	</table>
		
		</div>
		<div id="grafico">
		
		<script type="text/javascript">
		
$(function () {<?php 
					include("conexao.php");
					$sql="select*from notas where codigo='1'";
					$execbanco=mysql_query($sql,$conexao);
					$campo=mysql_fetch_array($execbanco);?>
    $('#container').highcharts({

        chart: {
            type: 'column',
            options3d: {
                enabled: true,
                alpha: 10,
                beta: 20,
                viewDistance: 35,
                depth: 40
            },
            marginTop: 50,
            marginRight: 40
        },

        title: {
            text: 'Gráfico de Desempenho do CURSINHO'
        },

        xAxis: {
            categories: ['Portugues', 'Historia', 'Geografia', 'Biologia', 'Matematica','Física','Química','Sociologia','Filosofia','Ingês','Espanhol','Redação']
        },

        yAxis: {
            allowDecimals: false,
            min: 0,
            title: {
                text: 'Simulado'
            }
        },

        tooltip: {
            headerFormat: '<b>{point.key}</b><br>',
            pointFormat: '<span style="color:{series.color}">\u25CF</span> {series.name}: {point.y} / {point.stackTotal}'
        },

        plotOptions: {
            column: {
                stacking: 'normal',
                depth: 40
            }
        },

       	series: [{
            name: 'Simulado 1',
            data: [<?php echo $campo['portugues1'];?>,<?php echo $campo['historia1'];?>,<?php echo $campo['geografia1'];?>,<?php echo $campo['biologia1'];?>,<?php echo $campo['matematica1'];?>,<?php echo $campo['fisica1'];?>,<?php echo $campo['quimica1'];?>,<?php echo $campo['sociologia1'];?>,<?php echo $campo['filosofia1'];?>,<?php echo $campo['ingles1'];?>,<?php echo $campo['espanhol1'];?>],
            stack: 's1'
        }, {
            name: 'Simulado 2',
            data: [<?php echo $campo['portugues2'];?>,<?php echo $campo['historia2'];?>,<?php echo $campo['geografia2'];?>,<?php echo $campo['biologia2'];?>,<?php echo $campo['matematica2'];?>,<?php echo $campo['fisica2'];?>,<?php echo $campo['quimica2'];?>,<?php echo $campo['sociologia2'];?>,<?php echo $campo['filosofia2'];?>,<?php echo $campo['ingles2'];?>,<?php echo $campo['espanhol2'];?>],

            stack: 's2'
        }, {
            name: 'Simulado 3',
            data: [<?php echo $campo['portugues3'];?>,<?php echo $campo['historia3'];?>,<?php echo $campo['geografia3'];?>,<?php echo $campo['biologia3'];?>,<?php echo $campo['matematica3'];?>,<?php echo $campo['fisica3'];?>,<?php echo $campo['quimica3'];?>,<?php echo $campo['sociologia3'];?>,<?php echo $campo['filosofia3'];?>,<?php echo $campo['ingles3'];?>,<?php echo $campo['espanhol3'];?>],

            stack: 's3'
        } ]
    });
});
    
  
		</script>
	</head>
	<body>

<script src="js/highcharts.js"></script>
<script src="js/highcharts-3d.js"></script>
<script src="js/modules/exporting.js"></script>

<div id="container" style="height: 400px"></div>
<div id="container2" style="height: 400px"></div>
</div>


	
	
	
	<?php
	break;
	case "carteira":?>
	
			<div id="carteira">
				                 <h2><font color="red">ATENÇÃO </h2></font><p><b>
				 Esta carteirinha deve ser assinada por um coordenador do FLORESTAN FERNANDES, para ter sua válidade.<p>
				 Lembrando que cursinho não é considerado uma instiuição de ensino. Portanto, a tentativa de MEIA ENTRADA em lugares como<br>
				 (CINEMA, TEATRO, SHOWS) não é obrigatoriedade do estabelecimento em aceitar este documento. Mas muitos o reconhecem por consideração.
				<p>
					
				<table	background="carteira.jpg" style="background-repeat: no-repeat" border="0">
				<td>
				<br><br><br><br><br><br><br><br><br><br><br>
				<td>------<a href="carteira.php"><button style="width:140;height:40"><font color="red"><b>Gerar Carteirinha</button></a></font>------		
				
				
				<tr>
					<td>___________________________________________________________________________________________
				<tr>
				</table>
			
			
			</div>
			
			
	
	<?php
	break;
	case "eventos":?>
	
	<div id="eventos">
	<h2><font color="red">EVENTOS</font> que a <font color="green">REDE EMANCIPA</font> oferece aos alunos para contribuir com o aprendizado</h2><p><p>		
	<?php	
	
				include("conexao.php");
				$sql="select*from eventos  where disponivel = 'ALUNOS' or disponivel='TODOS' order by cod desc";
				$execbanco=mysql_query($sql,$conexao);
						if(mysql_num_rows($execbanco)==0){
							echo"Nenhum evento foi agendado";
						}
						else{
							echo "<table  border='0'>";
							echo"<tr>
								<td class='c1' align='center'>______EVENTO______</td>
								<td class='c1' align='center'>_________LOCAL_________</td>
								<td class='c1' align='center'>__DATA__</td>
								<td class='c1' align='center'>_HORA_</td>
								<td class='c1' align='center'>______ORGANIZADOR______</td>
								<td class='c1' align='center'>____DESCRIÇÃO DO EVENTO___________________________</td>
								</tr>";
							$cor1="silver";
							$cor2="gray";
							$cor=$cor1;
							while($dados=mysql_fetch_array($execbanco)){
								echo"<tr bgcolor='$cor'>
									<td align='center'>".$dados['evento']."</td>
										<td align='center'>".$dados['local']."</td>
										<td align='center'>".$dados['data']."</td>
										<td align='center'>".$dados['hora']."</td>
										<td align='center'>".$dados['organizador']."</td>
										<td align='center'>".$dados['descricao']."</td>											
									</tr>";
							if($cor==$cor1){$cor=$cor2;}
							else{$cor=$cor1;}
							}
						echo "</table>";
						}	?>	
					</div>
	<?php
	break;
	case "contato":?>
		<div id="contato">
			<h2><font color="red">Dúvidas<br></h2></font><h3>
			Falar com cursinho, entre em contato pelo e-mail:  <u> <font color="blue"> cpflorestanfernandes@gmail.com <p></u></font>
			Grupo no Facebook: <font color="red">  CURSINHO FF 2014</font></u><p>
			Problemas com o sistema CENTRAL DO ALUNO entre em contato pelo e-mail: <u><font color="blue">drenamgb@hotmail.com</h3>
		</div>
	
	<?php
	}}
	
?>
