<?php
/*
2 - Faça um programa que receba o nome e a idade de 3 pessoas, no final informe quais pessoas são maiores de idade, 
	considerando que a partir de 18 anos é maior de idade.
*/

//Definida uma constante para a idade considerada de maior, pois esse valor não irá mudar enquanto a execução do programa ocorre.
define("IDADE_CONSIDERADA_MAIOR",18);

$listaPessoas = array(
		   0 => array("nome" => "Arilson",  "idade" => 28),
		   1 => array("nome" => "Emerson",  "idade" => 43),
		   2 => array("nome" => "Leonardo", "idade" => 15)
);

foreach($listaPessoas as $dados){	
		echo "Nome: ".$dados['nome']."<br>";
		echo "Idade: ".$dados['idade']."<br>";
		
		if($dados['idade'] >= IDADE_CONSIDERADA_MAIOR)
			echo "Esta pessoa é maior de idade.<br>";
		else
			echo "Esta pessoa é menor de idade.<br>";
		
		echo "--------------------------------<br>";
}