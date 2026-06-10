<?php 
	//Array de linha -> Vetor
	//Array de linha/coluna -> Matrizes

	//Exemplo Array de linha:
	$valor = array(10,20,30,40,50,60,70,80,90);
	$idade[0] = 10;
	$idade[8] = 5;
	$nomes = array("Maria","José","Pedro","Paulo");

	$salario[] = 1500.52;
	$salario[] = 1250.35;
	$salario[] = 1587.96;
	$salario[] = 1587.89;

	echo($valor[0] . "<br>");
	echo($nomes[3] . "<br>");
	echo($salario[3]);
	
	echo '<br>';
	var_dump($valor);
	echo '<br>';
	var_dump($nomes);
	echo '<br>';
	var_dump($idade);
	echo '<br>';
	var_dump($salario);
 ?>