<?php 

	$email =$_POST['email'];
	$senha =$_POST['senha'];

	if($email === 'etecia@etecia.com' && $senha === '123456'){
		echo "Bem vindo ao sistema!!!";
	}else{
		echo "Erro ao acessar";
	}
 ?>