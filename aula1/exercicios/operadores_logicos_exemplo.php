<?php
/*
Operadores lógicos:

&& - AND - E -> Conceito: É uma multiplicação de valores - Se todas as expressões forem verdade(true) então a condição é verdadeira.
|| - OR - OU -> Conceito: é uma soma - Se qualquer uma das expressões da condição for verdade(true) então a condição é verdadeira.
!  - NOT - Negação -> Conceito: é uma negação, cujo objetivo é inverter o valor lógico da expressão.
*/

/*
Exemplo de NOT(Negação)

$x = 3;
if(!($x == 5))
	echo "x não é igual a 5";
*/

/*
Exemplo de OR(OU)

$x = 10;
$y = 3;

if($x > 5 || $y > 5)
	echo "um dos números é maior que 5";
*/


/*
Exemplo de AND(E)
*/

$numero = 110;

if($numero >= 100 && $numero <= 200){
	echo "O número ".$numero." está no intervalo de 100 e 200";
}else{
	echo "O número ".$numero." não está no intervalo de 100 e 200";
}