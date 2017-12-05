<?php
/* 
	9 - Faça um programa que receba o nome e a idade de 3 pessoas, no final informe quais pessoas são maiores de idade, considerando que a partir de 18 anos é maior de idade.
*/

//Definida uma constante para a idade considerada de maior, pois esse valor não irá mudar enquanto a execução do programa ocorre.
define("IDADE_CONSIDERADA_MAIOR",18);

$nome_pessoa1 = "Arilson";
$idade_pessoa1 = 21;

$nome_pessoa2 = "Edson";
$idade_pessoa2 = 10;

$nome_pessoa3 = "Leonardo";
$idade_pessoa3 = 19;

if($idade_pessoa1 > IDADE_CONSIDERADA_MAIOR){
	echo $nome_pessoa1." é maior de idade<br>";
}

if($idade_pessoa2 > IDADE_CONSIDERADA_MAIOR){
	echo $nome_pessoa2." é maior de idade<br>";
}

if($idade_pessoa3 > IDADE_CONSIDERADA_MAIOR){
	echo $nome_pessoa3." é maior de idade<br>";
}