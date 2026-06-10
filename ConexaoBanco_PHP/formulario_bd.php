<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Implementando banco de dados com PHP</title>
</head>
<body>
<form action="cadastro.php" method="post">
	<label for="nome">Nome</label><br>
	<?php 
	//Utiliza o input name para adicionar no banco de dados
	 ?>
	<input type="name" name="nome" id="nome"><br><br>
	<label for="email">Email</label><br>
	<input type="email" name="email" id="email"><br><br>
	<input type="submit" name="cadastrar" value="Cadastrar">
</form>
</body>
</html>