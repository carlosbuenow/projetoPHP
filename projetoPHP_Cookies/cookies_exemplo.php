<?php 

	//setcookie("usuarios", "Carlos",time()+86400);

	$valor = 'teste';

	setcookie("admin",$valor);

	setcookie("admin", $valor,time()+60);

	echo $_COOKIE['usuarios'] . "<br>";
	$admin = $_COOKIE['admin'];

	if(isset($_COOKIE['usuarios'])){
		echo 'Bem vindo, ' . $_COOKIE['usuarios'] . '<br>';
	}else{
		echo "Usuário novo, seja bem-vindo";
	}
 ?>