<?php
/*
5 - Faça um programa que recebe um array de inteiros e retorna a quantidade de elementos do array que são números negativos.
*/

$listaNumeros = array(-5,-1,10,-30,50,3);

$quantidadeNumerosNegativos = 0;

foreach($listaNumeros as $numero){
	if($numero < 0)
		$quantidadeNumerosNegativos++;	
}

echo implode(" | ",$listaNumeros)."<br>";
echo $quantidadeNumerosNegativos." números da lista são negativos.";