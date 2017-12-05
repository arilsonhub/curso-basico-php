<?php
/* 
	11 - Faça um programa que mostre na tela os números ímpares de 0 a 100.
*/

/* Com FOR */
for($i = 0;$i <= 100;$i++){ //++ é um operador de incremento, isto é ($i = $i + 1)
	//Operador % é o MOD, que significa o módulo(resto) da divisão.
	if($i % 2 != 0)
		echo $i." ";
}

/* Com WHILE */
/*
$i = 0;
while($i <= 100){

	if($i % 2 != 0)
		echo $i." ";	

   $i++;	
}
*/