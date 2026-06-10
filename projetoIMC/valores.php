<?php 
	$nome = $_POST['nome'];
	$peso = $_POST['peso'];
	$altura = $_POST['altura'];

	$peso1 = (double) $peso;
	$altura1 = (double) $altura;

	$imc = $peso1 / ($altura1 * $altura1);

	if($imc == 0){
		echo "Digite novamente os seus dados!";
	}elseif ($imc < 18.5){
		$significa = "Baixo Peso";
	}elseif($imc < 24.9){
		$significa = "Normal";
	}elseif ($imc < 29.9){
		$significa = "Pré-Obeso";
	}elseif ($imc < 34.9){
		$significa = "Obeso I";
	}elseif ($imc < 39.9) {
		$significa = "Obeso II";;
	}elseif($imc < 40){
		$significa = "Obeso III";
	}

	echo 'Olá, ' . $nome . '<br>' . 'O seu peso é: ' .  $peso . '<br>' . 'A sua altura é: ' . $altura . '<br>' . 'O seu imc é: ' . $imc . '<br>' . 'Está classificado como: ' . $significa;

 ?>