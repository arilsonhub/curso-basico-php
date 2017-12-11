<?php
//Atribuindo os valores da matriz através da função Array
$listaNumeros = array(0 => array(10,1,4),
					  1 => array(3,3,5),
					  2 => array(2,5,4),
					  3 => array(3,2,5)					 
				);

//Atribuindo so valores da matriz de forma "Manual"
/*
$listaNumeros = array();
$listaNumeros[0][0] = 10;
$listaNumeros[0][1] = 1;
$listaNumeros[0][2] = 4;
$listaNumeros[1][0] = 3;
$listaNumeros[1][1] = 3;
$listaNumeros[1][2] = 5;
$listaNumeros[2][0] = 2;
$listaNumeros[2][1] = 5;
$listaNumeros[2][2] = 4;
$listaNumeros[3][0] = 3;
$listaNumeros[3][1] = 2;
$listaNumeros[3][2] = 5; 
*/

//Função específica para depurar Array
echo "<pre>";
print_r($listaNumeros);
echo "</pre>";

/*
//Depuração da variável $listaNumeros 
echo "<pre>";
var_dump($listaNumeros);
echo "</pre>";
*/

//Imprime um valor especifico da matriz
//echo $listaNumeros[0][0];


//Imprime todos os dados da matriz mostrando linha e coluna na tela com FOR
/*
$quantidadeLinhasMatriz = count($listaNumeros);

for($i = 0; $i < $quantidadeLinhasMatriz; $i++){
	
	$quantidadeColunasLinha = count($listaNumeros[$i]);	
	echo "[".$i."]: ";
	for($j = 0; $j < $quantidadeColunasLinha; $j++){
		echo "[".$j."] = ".$listaNumeros[$i][$j]." | ";
	}
	echo "<br>";
}
*/

//Imprime todos os valores contidos na matriz usando Foreach
/*
foreach($listaNumeros as $linha){
	foreach($linha as $valor){
		echo $valor." | ";
	}
	echo "<br>";
}
*/

//Este for imprime todos os dados da matriz mostrando linha e coluna na tela com Foreach
/*foreach($listaNumeros as $indiceLinha => $arrayColunas){
	
	echo "[".$indiceLinha."]: ";
	foreach($arrayColunas as $indiceColuna => $valorColuna){
		echo "[".$indiceColuna."] = ".$valorColuna." | ";
	}
	echo "<br>";
}*/

//Imprime todos os valores contidos na matriz usando While
/*$quantidadeLinhasMatriz = count($listaNumeros);

$i = 0;
while($i < $quantidadeLinhasMatriz){
	
	$j = 0;
	$quantidadeColunasLinha = count($listaNumeros[$i]);
	echo "[".$i."]: ";
	
	while($j < $quantidadeColunasLinha){		
		echo "[".$j."] = ".$listaNumeros[$i][$j]." | ";
		$j++;
	}
	
	echo "<br>";
	$i++;
}
*/