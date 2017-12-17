<?php
/*
6 - Faça um programa que recebe um array de inteiros e um valor inteiro X e retorna a quantidade de vezes que X aparece no array.
*/

$listaNumeros = array(5,1,3,1,50,3,1,10,5);
$x = 1;

$quantidadeVezesXAparece = 0;
foreach($listaNumeros as $numero){
	if($numero == $x)
		$quantidadeVezesXAparece++;
}

echo implode(" | ",$listaNumeros)."<br>";
echo "Valor de x: ".$x."<br>";
echo "O valor de x aparece ".$quantidadeVezesXAparece." vezes na lista.";