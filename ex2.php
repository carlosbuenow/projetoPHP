<?php 

echo "Imposto de Renda (Tabela de IR %)<br/><br/>";

$salario = 10000;
$imposto; 
$salarioliquido;

if($salario <=2428.80){
	echo "Isento de imposto<br/>";
}else if($salario <=2826.65){
	$imposto = ($salario * 7.5/100);
	$desconto = 7.5;
	$salarioliquido = $salario - $imposto;
}else if($salario<=3751.05){
	$imposto = ($salario *15/100);
	$desconto = 15;
	$salarioliquido = $salario - $imposto;
}else if($salario<=4668.68){
	$imposto = ($salario *22.5/100);
	$desconto = 22.5;
	$salarioliquido = $salario - $imposto;
}else if($salario>=4668.69){
	$imposto = ($salario *27.5/100);
	$desconto = 27.5;
	$salarioliquido = $salario - $imposto;
}
printf("A porcentagem de desconto é: %.1f%% <br/><br/>", $desconto);
printf("O valor do salário líquido: R$%.2f <br/><br/>", $salarioliquido);
printf("O valor do imposto de renda é: R$%.2f", $imposto);
 ?>
