<?php
/* 
	10 - Faça um programa que receba um número e informe se o mesmo é positivo, negativo ou zero.
*/

$numero = 5;

if($numero == 0){
	echo "O numero ".$numero." é igual a zero.";
}else if($numero > 0){
	echo "O numero ".$numero." é positivo.";
}else{
	echo "O numero ".$numero." é negativo.";
}