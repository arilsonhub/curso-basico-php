<?php
/*
8 - Faça um programa que receba um número inteiro e converta esse número para o sistema de numeração binário, 
	no final imprima na tela o número inteiro recebido e o resultado da conversão do número em binário.
*/

$numeroInteiro = 10;
$resultadoDivisao = 0;
$arrayRestos = array();

$x = $numeroInteiro;
do {	

	$resultadoDivisao = (int)($x / 2);
	$resto = $x % 2;	
	array_push($arrayRestos, $resto);	
	$x = $resultadoDivisao;	
	
}while($resultadoDivisao != 0);

$numeroBinario = implode("",array_pad(array_reverse($arrayRestos),-4,0));
echo "Valor decimal: ".$numeroInteiro."<br>";
echo "Valor binário: ".$numeroBinario."<br>";