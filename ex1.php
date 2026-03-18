<?php 

		$num1 = 20;
		$num2 = 20;
		$op = 2;

		echo "Calculadora <br/><br/>";
		echo "1 - Soma <br/>";
		echo "2 - Subtração <br/>";
		echo "3 - Multiplicação <br/>";
		echo "4 - Divisão <br/><br/>";
		switch ($op){

			case 1:
				$resp = $num1 + $num2;
				$nomeOp = "soma";
				break;
			case 2: 
				$resp = $num1 - $num2;
				$nomeOp = "subtração";
				break; 
			case 3: 
					$resp = $num1 * $num2;
					$nomeOp= "multiplicação";
					break;
			case 4: 
					$resp = $num1 / $num2;
					$nomeOp= "divisão";
					break;
			default: echo("Sair");
				$nomeOp = "invalido";
				break;
		}

		if ($nomeOp != "invalido") {
			echo "A $nomeOp de $num1 e $num2 = $resp";
		}
		
		
?>

