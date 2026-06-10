<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulários PHP</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<h1>Formulários PHP</h1>
	<form action="valida.php" method="post">
		<label for="email">Email:</label>
		<input type="email" name="email" id="email" maxlength="50" required autocomplete="off" autofocus><br><br>
		<label for="senha">Senha:</label>
		<input type="password" name="senha" id="senha" maxlength="15" required autocomplete="off"><br><br>
		<input type="submit" name="entrar" id="entrar" value="Entrar">
		<input type="reset" name="limpar" value="Limpar">
	</form>
<script src="js/script.js"></script>
</body>
</html>
