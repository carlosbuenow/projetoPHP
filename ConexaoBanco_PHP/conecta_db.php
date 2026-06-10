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
		echo "Banco de dados conectado com sucesso!!!";
		
	}

	$sql = "insert into tbPessoa(nome,email)values('Etecia', 'sac@etecia.com')";

	//Executa um comando
	mysqli_query($con, $sql);

	//Fecha o banco de dados.
	
	mysqli_close($con);
 ?>