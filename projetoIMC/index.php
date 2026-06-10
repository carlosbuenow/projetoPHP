<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Calcule o seu IMC</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<h1>Tabela com classificação</h1>
	<table border="1">
		<tr>
			<th>Classificação</th>
			<th>IMC (kg/m²)</th>
		</tr>
		<tr>
			<td>Baixo Peso</td>
			<td>Menor que 18,5</td>
		</tr>
		<tr>
			<td>Normal</td>
			<td>18,5-24,9</td>
		</tr>
		<tr>
			<td>Sobrepeso</td>
			<td>Maior que 25</td>
		</tr>
		<tr>
			<td>Pré-obeso</td>
			<td>25-29,9</td>
		</tr>
		<tr>
			<td>Obeso I</td>
			<td>30-34,9</td>
		</tr>
			<td>Obeso II</td>
			<td>35-39,9</td>
		<tr>
			<td>Obeso III</td>
			<td>Maior que 40</td>
		</tr>
		</tr>
	</table>
	<br><br>
	<h1>Calcular o seu IMC</h1>
	<form action="valores.php" method="post">
		<label for="nome">Nome: </label>
		<input type="text" name="nome" id="nome"><br><br>
		<label for="peso">Peso: </label>
		<input type="text" name="peso" id="peso"><br><br>
		<label for="altura">Altura: </label>
		<input type="text" name="altura" id="altura"><br><br>
		<input type="submit" name="calcular" id="calcular">
		<input type="reset" name="limpar" id="limpar">
	</form>
</body>
</html>