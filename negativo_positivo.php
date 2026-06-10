<?php 
//Criar um vetor com 10 números
//Quantos números positivos foram digitados
//Quantos números negativos
//Quantos pares e impares
	$numeros = array(10, -2, 5, -3, 8, -4, 7, 3, 23, -6);
	$negativo = 0;
	$positivo = 0;
	$impar = 0;
	$par = 0;

	for($i = 0; $i <= 10; $i++){
		if($numeros[$i] >= 0){
			$positivo++;
		}else{
			$negativo++;
		}
		if($numeros[$i] % 2 == 0){
			$par++;
		}else{
			$impar++;
		}
	}

	echo "$positivo<br>";
	echo "$negativo<br>";
	echo "$impar<br>";
	echo "$par<br>";

 ?>