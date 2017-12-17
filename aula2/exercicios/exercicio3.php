<?php
/*
3 - Faça um programa que crie uma lista de 5 pessoas cujos nomes são (Arilson,Bruna,Emerson,Fernando,Roberta) 
	e no final imprima essa lista de nomes na tela em ordem alfabética.
*/

$listaPessoas = array("Roberta","Emerson","Fernando","Arilson","Bruna");
sort($listaPessoas);

foreach($listaPessoas as $nome){
	echo $nome."<br>";
}