<?php
/* 
	Declarar uma variável que receba uma temperatura em graus Celsius e apresente-a convertida em graus Fahrenheit. A fórmula de conversão é:
    F=(9*C + 160) / 5, sendo F a temperatura em Fahrenheit e C a temperatura em Celsius.
*/

$c = 100;
$f=(9 * $c + 160) / 5;

echo "Graus Celsius: ".$c."<br>";
echo "Graus Fahrenheit: ".$f;