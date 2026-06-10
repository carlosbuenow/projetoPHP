<?php 

	$num1 = array(10,20,30,40);
	$num2 = array(50,60,70,80);
	$resultado = array();

	echo "Array 1:<br>";
	for($i =0; $i < 4; $i++){
	   echo "$num1[$i] <br>";
	}
	echo "<br>Array 2:<br>";
	for($i = 0; $i < 4; $i++){
		echo "$num2[$i] <br>";
	}
	echo "<br>Soma dos array:<br>";
	//Realiza a soma do primeiro array + segundo array, pela sequência de casas
	for($i = 0; $i < 4; $i++){
		$resultado[$i] = $num1[$i] + $num2[$i];
	}
	//Mostrar as casas do array resultado
	for($i = 0; $i < 4; $i++){
		echo "$resultado[$i] <br>";
	}
 ?>