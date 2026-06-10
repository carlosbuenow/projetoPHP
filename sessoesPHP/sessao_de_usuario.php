<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pagina WEB - Sessão de usuário</title>
</head>
<body>
	<?php 
		session_start();

		$_SESSION['nome'] = "administrador";

		//session_unset();

		session_destroy();
	 ?>
	 <h1>Sessão de usuário</h1>
	 <label>Bem vindo usuário:</label><?php echo $_SESSION['nome'] ?><br>
	 <label>ID usuário:</label><?php echo session_id(); ?>
</body>
</html>