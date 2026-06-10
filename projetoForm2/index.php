<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulário sobre pets</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<h1>Pets não se cuidam sozinhos</h1>
	<p>Você sabia que o seu pet sente sua falta quando você sai de casa? Para eles, os seus tutores são importantes no seu sentimental do dia a dia, a atenção extra que você dá para o seu animal beneficia muito na saúde dele.<p>
	<p>Vamos ver se é um tutor presente na vida do seu pet, informe características sobre seu pet e seus cuidados.</p><br>
	<h2>Responda o questionário</h2>
	<form action="respostas.php" method="post">
		<label for="nome">Qual o nome do seu pet?</label><br><br>
		<input type="text" name="pet_nome" placeholder="Informe o nome do seu pet" autocomplete="off" required autofocus maxlength="15"><br><br>
		<label for="peso">Qual o peso do seu pet?</label><br><br>
		<input type="text" name="pet_peso" placeholder="Informe o peso do seu pet" autocomplete="off" maxlength="3"><br><br>
		<label for="sexo">Qual o sexo do seu pet?</label><br><br>
		<select name="pet_sexo">
			<option value="Macho">Macho</option>
			<option value="Femea">Femea</option>
		</select><br><br>
		<label for="passeio">Com que frequência você passeia com seu pet?</label><br><br>
		<label for="nenhuma">Não levo meu pet para passear</label>
		<input type="radio" name="passeio" required autocomplete="off"><br>
		<label for="pouca">Uma vez na semana</label>
		<input type="radio" name="passeio" required autocomplete="off"><br>
		<label for="razoavel">Algumas vezes na semana</label>
		<input type="radio" name="passeio" required autocomplete="off"><br>
		<label for="bastante">Todos os dias da semana</label>
		<input type="radio" name="passeio" required autocomplete="off"><br><br>
		<label for="comida">Quantas vezes ao dia você alimenta seu pet?</label><br><br>
		<select name="pet_comida">
			<option value="uma">1</option>
			<option value="duas">2</option>
			<option value="tres">3</option>
			<option value="quatro">4+</option>
		</select>
	</form>
	<script src="js/script.js"></script>
</body>
</html>