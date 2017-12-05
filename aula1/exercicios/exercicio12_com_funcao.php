<?php
/* 
	12 - Faça um programa que receba dois números inteiros e calcule o mínimo múltiplo comum(MMC) destes números e no final apresente o resultado.
*/
require_once("mmc.php");
$num1 = 4;
$num2 = 3;

$resultadoMMC = calcularMMC($num1, $num2);

echo "Resultado do MMC de ".$num1." e ".$num2." é ".$resultadoMMC;