<?php
//Declarando um Array usando a função array e atribuindo as posições manualmente.
/*
$listaNumeros = array();
$listaNumeros[0] = 6;
$listaNumeros[1] = 15;
$listaNumeros[2] = 30;
$listaNumeros[3] = 80;
$listaNumeros[4] = 1;
$listaNumeros[5] = 3;
$listaNumeros[6] = 8;
$listaNumeros[7] = 10;
$listaNumeros[8] = 5;
$listaNumeros[9] = 40;
*/

//$listaNumeros = [6,15,30,80,1,3,8,10,5,40];

$listaNumeros = array(6,15,30,80,1,3,8,10,5,40);

//Conta quantos elementos o Array possui.
//$tamanhoArray = count($listaNumeros);

//Imprime um valor especifico do meu Array
//echo $listaNumeros[9];

//Percorro(Com o Laço For) meu Array e imprimo o valor de cada posição.
/*
for($i = 0; $i < $tamanhoArray; $i++){
	echo "[".$i."]"." = ".$listaNumeros[$i]."<br>";
}
*/

/*$i = 0;
while($i < $tamanhoArray){
	echo "[".$i."]"." = ".$listaNumeros[$i]."<br>";	
	$i++;
}
*/

/*
//Imprimindo somente os valores do Array usando o foreach
foreach($listaNumeros as $valor){
	echo $valor."<br>";
}
*/

//Imprimindo o indice e o valor do meu Array usando foreach
foreach($listaNumeros as $indice => $valor){
	//echo "[".$indice."]"." = ".$valor."<br>";
	echo "[".$indice."]"." = ".$valor."<br>";
}