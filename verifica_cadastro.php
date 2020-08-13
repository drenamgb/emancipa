<html>
<head>
	<title> Login </title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/ > <!-- comando para corrigir caracteres  -->
	<script type="text/javascript"  src="js/javascript.js" /> </script>
</head>


<script>
				var senha;
				senha = prompt("Senha de cadastro de professor");
				if (senha == "amarelo"){
				alert("Seja Bem vindo Professor");
				window.location = "cadastro_professor.php";}
				else{
				alert("Senha inválida");
				window.location = "cadastro.php";}
				
</script>

	