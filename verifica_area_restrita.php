<html>
<head>
	<title> Verififica Área Restrita </title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/ > <!-- comando para corrigir caracteres  -->
	<script type="text/javascript"  src="js/javascript.js" /> </script>
</head>


<script>
				var senha;
				senha = prompt("Senha de acesso");
				if (senha == "bola"){
				window.location = "area_restrita.php";}
				else{
				alert("Senha inválida");
				window.location = "professores.php";}
				
</script>

	