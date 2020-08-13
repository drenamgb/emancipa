<html>
<head>
<title>Remover MATERIAL - Área Restrita</title>
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
a:visited {
		color: green;
	}
	#material{
		position:relative;
		left: 100px;
		top: 50px;
	
	}	
	</style>
	
<a href="professores.php"><font size="5" color="green"><b>Central do Aluno</a></font><p>			
<a href="area_restrita.php"><font size="5" color="blue">Voltar</a><p></font>	
<div id="material">
<font size="5"> <b>Lista de <font color="red">MATERIAL de ESTUDO</font> lançada pelos professores<p></font></b>
<form method="post" action="remover_material.php" >
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
					<form method="post" action="remover_material.php" >
					</font><input type="hidden" name="disciplina" >
					<input type="submit" value="Listar todas as disciplinas" />				
				</form>
<?php
				include("conexao.php");
				
				$sql="select*from listas ";
				$execbanco=mysql_query($sql,$conexao);
				if (isset($_POST['disciplina'])) {
					$disciplina=$_POST['disciplina'];
					$sql="select*from listas where disciplina like'%$disciplina%' order by cod desc" ;  /*apenas uma frase,*/ 
					$execbanco=mysql_query($sql,$conexao);
						if(mysql_num_rows($execbanco)==0){
							echo"Nenhum material foi lançado de $disciplina";
						}
						else{
								$numprod=mysql_num_rows($execbanco);
								if($numprod <= 1){
									echo"<p><font color='red'size='4px'>
									Foi encontrado $numprod material de $disciplina
									</p>";
								}
								else{
									echo"<p><font color='red' size='4px'>
									Foram encontrados $numprod materiais $disciplina
									</p>";
								}
						
							echo "<table  border='0'>";
							echo"<tr>
								<td class='c1' align='center'><b> DOWNLOAD </td>
								<td class='c1' align='center'>_DISCIPLINA_</td>
								<td class='c1' align='center'>_________PROFESSOR_________</td>
								<td class='c1' align='center' colspan='2'>____Data e Hora do Lançamento____</td>
								<td class='c1' align='center'>________________LISTA________________</td>
								<td class='c1' align='center'>___LINK-WEB___</td>
								<td class='c1' align='center'><b> Apagar </td>
								
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
										<form method='post' action='deleta_material.php'>
										<td class='c1' width='10'>
											<input type='hidden' name='codigo' value='".$dados['cod']."'/>
											<input type='submit' value='X'  style='width:35;height:25;color:red'/>
										</td>
									</form>
									</tr>";
							if($cor==$cor1){$cor=$cor2;}
							else{$cor=$cor1;}
							}
						echo "</table>";
						}}
						else{
							echo "<p class='busca'><font color='red' size='4px'>
							Informe a disciplina";
		}	?>	
</div>