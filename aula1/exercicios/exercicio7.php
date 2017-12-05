<?php
/* 
	7 - Faça um programa que receba um número e diga se este número está no intervalo entre 100 e 200.
*/

$numero = 150;

if($numero >= 100 && $numero <= 200){
	echo "O número ".$numero." está no intervalo de 100 e 200";
}else{
	echo "O número ".$numero." não está no intervalo de 100 e 200";
}