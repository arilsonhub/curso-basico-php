<?php
/* 
	8 - Faça um programa que receba dois números inteiros e informe qual é o maior.
*/

$x = 50;
$y = 10;

echo "Valor de X: ".$x."<br>";
echo "Valor de Y: ".$y."<br><br>";

if($x == $y){
	echo "X e Y são iguais";
}else if($x > $y){	
	echo "X é maior que Y";
}else{
	echo "Y é maior que X";
}