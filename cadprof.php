<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/ > <!-- comando para corrigir caracteres  -->

</head>
</html>



<?php
if ((($_FILES["foto"]["type"] == "image/gif")
|| ($_FILES["foto"]["type"] == "image/jpeg")
|| ($_FILES["foto"]["type"] == "image/pjpeg"))
&& ($_FILES["foto"]["size"] < 1000000))
  {

	
    
    $nome=$_POST['nome'];
	$data=$_POST['data'];
	$endereco=$_POST['endereco'];
	$bairro=$_POST['bairro'];
	$telefone1=$_POST['telefone1'];
	$telefone2=$_POST['telefone2'];
	$celular=$_POST['celular'];
	$email=$_POST['email'];
	$faculdade=$_POST['faculdade'];
	$curso=$_POST['curso'];
	$disciplina=$_POST['disciplina'];
	$memorando=$_POST['memorando'];
	$foto=$_FILES["foto"]["name"];
	$login=$_POST['login'];
	$senha=$_POST['senha'];
	include("conexao.php");
	$sql="select*from professores where login='$login'";
	$execbanco=mysql_query($sql,$conexao);
	
	
		if(($login=="")or($senha=="")){
		echo"<script>
			alert('Login ou senha inválidos !');
			history.go(-1);
			</script>";
	}
	elseif  (($login=="00-000-000")or($login=="11-111-111")or($login=="22-222-222")or($login=="33-333-333")or($login=="44-444-444")or($login=="55-555-555")
	or($login=="55-555-555")or($login=="66-666-666")or($login=="77-777-777")or($login=="88-888-888")or($login=="99-999-999")){
		?><script>
			alert('LOGIN INVÁLIDO, \n Por favor insira seu RG sem o dígito !')
			history.go(-1)
			</script><?php
	}
	
	
	
	elseif((mysql_num_rows($execbanco)>=1)){
		echo"<script>
			alert('Desculpe, este LOGIN ja esta cadastrado !');
			history.go(-1);
			</script>";
	}
		
	else{
		move_uploaded_file($_FILES["foto"]["tmp_name"],"fotos_prof/p.$login.$foto");
		$sql="insert into professores (nome,data,telefone1,telefone2,celular,endereco,bairro,email,faculdade,curso,disciplina,memorando,foto,login,senha) 
					values ('$nome','$data','$telefone1','$telefone2','$celular','$endereco','$bairro','$email','$faculdade','$curso','$disciplina','$memorando','p.$login.$foto','$login','$senha')";
		$execbanco=mysql_query($sql,$conexao);
		echo"<script>
			alert('Professor Cadastrado com sucesso !');
			alert('Seja Bem Vindo a Central do Aluno !');
			window.location = 'index.php';
			</script>";
			
	}
 
	  

	  
}
    
  
elseif ($_FILES["foto"]["type"] == ""){

	
    $nome=$_POST['nome'];
	$data=$_POST['data'];
	$endereco=$_POST['endereco'];
	$bairro=$_POST['bairro'];
	$telefone1=$_POST['telefone1'];
	$telefone2=$_POST['telefone2'];
	$celular=$_POST['celular'];
	$email=$_POST['email'];
	$faculdade=$_POST['faculdade'];
	$curso=$_POST['curso'];
	$disciplina=$_POST['disciplina'];
	$memorando=$_POST['memorando'];
	$foto="professor.jpg";
	$login=$_POST['login'];
	$senha=$_POST['senha'];
	include("conexao.php");
	$sql="select*from professores where login='$login'";
	$execbanco=mysql_query($sql,$conexao);
	
	
	
	
	if(($login=="")or($senha=="")){
		echo"<script>
			alert('Login ou senha inválidos !');
			history.go(-1);
			</script>";
	}
	elseif  (($login=="00-000-000")or($login=="11-111-111")or($login=="22-222-222")or($login=="33-333-333")or($login=="44-444-444")or($login=="55-555-555")
	or($login=="55-555-555")or($login=="66-666-666")or($login=="77-777-777")or($login=="88-888-888")or($login=="99-999-999")){
		?><script>
			alert('LOGIN INVÁLIDO, \nPor favor insira seu RG sem o dígito !')
			history.go(-1)
			</script><?php
	}
	
	
	
	elseif((mysql_num_rows($execbanco)>=1)){
		echo"<script>
			alert('Desculpe, este LOGIN ja esta cadastrado !');
			history.go(-1);
			</script>";
	}
		
	else{
		
		$sql="insert into professores (nome,data,telefone1,telefone2,celular,endereco,bairro,email,faculdade,curso,disciplina,memorando,foto,login,senha) 
					values ('$nome','$data','$telefone1','$telefone2','$celular','$endereco','$bairro','$email','$faculdade','$curso','$disciplina','$memorando','p.$foto','$login','$senha')";
		$execbanco=mysql_query($sql,$conexao);
		?><script>
			alert('          Professor Cadastrado com sucesso! \nPara adicionar uma foto, contate a coordenação ou \no administrador do sistema atravez do email abaixo\n                drenamgb@hotmail.com!')
			alert('Seja Bem Vindo a Central do Aluno !')
			window.location = "index.php"
			</script><?php
			
	}
 }
 else {
  echo"<script>
		alert('Foto em formato inválido ou superior a 1 mega !');
		history.go(-1);
		</script>";
  
	}

?> 




