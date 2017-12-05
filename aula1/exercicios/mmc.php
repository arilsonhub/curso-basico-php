<?php
function calcularMMC($num1,$num2){
    $resto = 0;	
	$a = 0;
	$b = 0;

    $a = $num1;
    $b = $num2;

    do {
        $resto = $a % $b;

        $a = $b;
        $b = $resto;

    } while ($resto != 0);

	$resultado = ($num1 * $num2) / $a;
	
	return $resultado;
}