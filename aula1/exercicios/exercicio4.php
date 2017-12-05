<?php
/* 
	4 - Ler dois valores para as variáveis A e B, e efetuar as trocas dos valores de forma que a variável A passe a possuir o valor da variável B e a variável B passe a possuir o valor da variável A.
    No final apresente os valores trocados.
*/

$a = 3;
$b = 2;
$auxiliar = 0;

echo "A = ".$a."<br> B = ".$b."<br><br>";

$auxiliar = $a;
$a = $b;
$b = $auxiliar;

echo "A = ".$a."<br> B = ".$b;


//A     AUX      B
//(2)   (3)     (3)