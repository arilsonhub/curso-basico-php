<?php
$arquivoCadastroClientes = file("listaPessoas.txt");

foreach($arquivoCadastroClientes as $linha){	
	$dadosCliente = explode("|",$linha);
	echo "Código do cliente: ".$dadosCliente[0]."<br>";
	echo "Nome do cliente: ".$dadosCliente[1]."<br>";
	echo "idade: ".$dadosCliente[2]."<br>";
	echo "sexo: ".$dadosCliente[3]."<br>";
	echo "Data de nascimento: ".$dadosCliente[4]."<br>";
	echo "-----------------------------------------------<br>";	
}