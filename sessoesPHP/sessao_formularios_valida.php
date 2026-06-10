<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Verifica Sessões</title>
	<?php 

		session_start();

		if ($_SESSION['nome'] != "master"){

			session_destroy();

			header("location:sessao_implementando_formularios.php");
		}

	 ?>
</head>
<body>
	 <b>Página autorizada!!</b>
</body>

</html>