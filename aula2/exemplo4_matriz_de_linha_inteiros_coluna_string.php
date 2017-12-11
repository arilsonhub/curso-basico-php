<?php
//Criando matriz através da função Array
$listaClientes = array(0 => array(
								"nome" => "Arilson",
								"idade" => "28",
								"dataNascimento" => "07/10/1989",
								"sexo" => "Masculino"
							),
					   1 => array(
								"nome" => "Wilson",
								"idade" => "69",
								"dataNascimento" => "12/10/1949",
								"sexo" => "Masculino"
							)
				);

//Imprimindo os dados da lista de clientes.
foreach($listaClientes as $linha){	
	echo "Nome: ".$linha["nome"]."<br>";
	echo "Idade: ".$linha["idade"]."<br>";
	echo "Data de nascimento: ".$linha["dataNascimento"]."<br>";
	echo "Sexo: ".$linha["sexo"];
	echo "<br>-------------------------------------------<br>";
}
				
/*
//Criando matriz "Manualmente"
$listaClientes = array();
$listaClientes[0]["nome"] = "Arilson";
$listaClientes[0]["idade"] = "28";
$listaClientes[0]["dataNascimento"] = "07/10/1989";
$listaClientes[0]["sexo"] = "Masculino";

$listaClientes[1]["nome"] = "Wilson";
$listaClientes[1]["idade"] = "69";
$listaClientes[1]["dataNascimento"] = "12/10/1949";
$listaClientes[1]["sexo"] = "Masculino";
*/

//Imprimindo os dados individualmente
/*
echo "Nome: ".$listaClientes[0]["nome"]."<br>";
echo "Idade: ".$listaClientes[0]["idade"]."<br>";
echo "Data de nascimento: ".$listaClientes[0]["dataNascimento"]."<br>";
echo "Sexo: ".$listaClientes[0]["sexo"];

echo "<br>-------------------------------------------<br>";

echo "Nome: ".$listaClientes[1]["nome"]."<br>";
echo "Idade: ".$listaClientes[1]["idade"]."<br>";
echo "Data de nascimento: ".$listaClientes[1]["dataNascimento"]."<br>";
echo "Sexo: ".$listaClientes[1]["sexo"];
*/

//Imprimindo os valores da Matriz informando o número da linha e a coluna.
/*foreach($listaClientes as $indiceLinha => $arrayColunas){	
	echo "[".$indiceLinha."]: ";
	foreach($arrayColunas as $indiceColuna => $valorColuna){
		echo "[".$indiceColuna."] = ".$valorColuna." | ";
	}
	echo "<br>";
}
*/