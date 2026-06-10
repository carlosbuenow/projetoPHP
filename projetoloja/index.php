<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<form action="contato.php" method="post">
		<label for="idnome">Nome:</label>
		<input type="text" name="nome" id="idnome" placeholder="Insira seu nome" maxlength="50" autocomplete="off" required autofocus><br><br>
		<label for="idemail">Email:</label>
		<input type="email" name="email" id="idemail" placeholder="Insira seu email" maxlength="50" autocomplete="off" required><br><br>
		<label for="idmensagem">Mensagem:</label>
		<textarea name="mensagem" id="idmensagem" placeholder="Digite sua mensagem" required></textarea><br><br>
		<input type="submit" name="enviar" value="Enviar">
		<input type="reset" name="limpar" value="Limpar">
	</form>
	<script src="js/script.js"></script>
</body>
</html>