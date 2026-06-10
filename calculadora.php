<?php 
	
	//Calculadora com funções e switch

	echo "1 - Soma<br>";
	echo "2 - Subtração<br>";
	echo "3 - Multiplicação<br>";
	echo "4 - Divisão<br>";

	$valor = 1;
	$num1 = 20;
	$num2 = 5;

	function somar($num1, $num2){
				return $num1 + $num2;		
			}
	function subtrair($num1, $num2){
				return $num1 - $num2;					
			}
	function multiplicar($num1 , $num2){
				return $num1 * $num2;
			}	
	function divisão($num1, $num2){
				return $num1 / $num2;
			}

	switch ($valor){
		case 1:
			$resultado=somar($num1, $num2);
				echo "<br>O resultado da soma de $num1 + $num2 é: $resultado";
			break;
		case 2:
			$resultado=subtrair($num1, $num2);
				echo "<br>O resultado da subtração de $num1 - $num2 é: $resultado";
			break;
		case 3: 
			$resultado=multiplicar($num1, $num2);
			echo "<br>O resultado da multiplicação de $num1 * $num2 é: $resultado";
			break;
		case 4:
			$resultado=divisão($num1, $num2);
				echo "<br>O resultado da divisão de $num1 / $num2 é: $resultado";
			break;
	}

 ?>