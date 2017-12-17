<?php
/*
4 - Faça um programa que receba uma lista de números com os dados(5,1.5,10,30,500), 
	efetue o somatório desses números e no final imprima na tela a posição do array 
	com os valores ao lado e abaixo(última linha) o resultado do somatório.
*/

$listaNumeros = array(5,1.5,10,30,500);

/*
//Realizando o somatório "manualmente"
$somatorio = 0;
foreach($listaNumeros as $numero)
	$somatorio += $numero;
*/

//Realizando o somatório por meio da função array_sum
$somatorio = array_sum($listaNumeros);

foreach($listaNumeros as $indice => $numero)
	echo "[".$indice."]"." = ".$numero."<br>";
	
echo "<br>Resultado do somatório: ".$somatorio;