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

		//Realiza o comando de insert no banco de dados, usando as váriaveis do formulário

		$sql = "insert into tbPessoa(nome,email)values('$_POST[nome]','$_POST[email]')";

		mysqli_query($con, $sql);

		//Informa se realizou o cadastro ou houve erro

		if(mysqli_query($con,$sql)){
			echo "Cadastrado com sucesso!!";
		}else{
			echo "Erro ao cadastrar!!" . mysqli_error();
		}
		mysqli_close($con);
	}

 ?>