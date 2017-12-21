<?php

$link = fopen("listaPessoas.txt","r");

while(!feof($link)){
	$linha = fgets($link,4096);
	$dadosCliente = explode("|",$linha);
	echo "Nome do cliente: ".$dadosCliente[0]."<br>";
	echo "idade: ".$dadosCliente[1]."<br>";
	echo "sexo: ".$dadosCliente[2]."<br>";
	echo "Data de nascimento: ".$dadosCliente[3]."<br>";
	echo "-----------------------------------------------<br>";
}

fclose($link);