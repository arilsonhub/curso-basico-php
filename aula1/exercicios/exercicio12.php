<?php
/* 
	12 - Faça um programa que receba dois números inteiros e calcule o mínimo múltiplo comum(MMC) destes números e no final apresente o resultado.
*/

$num1 = 4;
$num2 = 3;
$resto = 0;	
$a = 0;
$b = 0;

$a = $num1;
$b = $num2;

do {
	
	//depuração
	//echo $a." ".$b."<br>";
	
    $resto = $a % $b;
    $a = $b;
    $b = $resto;

} while ($resto != 0);

$resultadoMMC = ( $num1 * $num2) / $a;

echo "Resultado do MMC de ".$num1." e ".$num2." é ".$resultadoMMC;