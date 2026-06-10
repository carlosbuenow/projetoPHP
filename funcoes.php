<?php 
	
	//Funções em php

	//Criando uma função sem paramêtro 

	function somaValor(){
		echo "Somando";
	}

	

	//Criando uma função com paramêtro

	function imprimirNome($nome){
		echo "<br/>Olá $nome";
	}

	function somar($num1, $num2){
		$resp = $num1 + $num2;
		return $resp;
	}


	$num = 8;

	//Função para verificar se a variável é número

	if(is_numeric($num)){

		echo "$num<br>";
	}else{
		echo "Não é número<br>";
	}

	//Executando funções
	somaValor();
	imprimirNome("Etecia");
	$resposta = somar(10.5,20.0);
	echo "<br>O resultado da soma $resposta";
	echo "<br> O resultado direto chamando a função: " . somar(30,50);
 ?>