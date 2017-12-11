<?php

$listaNumeros = array();
$listaNumeros["a"] = 10;
$listaNumeros["b"] = 30;

//echo $listaNumeros["a"]."<br>";
//echo $listaNumeros["b"];

foreach($listaNumeros as $indice => $nome){
	echo $indice.": ".$nome."<br>";
}

//var_dump($listaNumeros);