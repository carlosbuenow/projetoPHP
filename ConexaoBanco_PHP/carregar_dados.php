<?php 

	$host = "localhost";
	$user = "user_dbLoja";
	$pass = "1234";
	$db = "dbloja";

	// Criando uma conexão com o banco de dados

	$con = mysqli_connect($host, $user, $pass, $db);

	// Verificando conexão com banco de dados

	if(mysqli_connect_errno()){
		//Informa se houver algum erro na conexão
		echo "Erro ao conectar a base de dados" . mysqli_connect_error();

	}else{

		//Realiza o comando de Select e busca as informações de Nome e Email da tabela tbPessoa

		$sql = "select nome,email from tbPessoa";

		$resultado = mysqli_query($con, $sql);

		echo "<h2>Lista</h2>";

		//Carrega os dados da váriavel que contém o banco "$resultado" dentro de "$pessoas"
		
		while($pessoa = mysqli_fetch_array($resultado)){

			//Carrega o nome e o email ao lado, dos dados que estão dentro da tabela tbPessoa

			echo "$pessoa[nome]" . " - " . "$pessoa[email]" . "<br><br>";


		}
		mysqli_close($con);
	}

 ?>