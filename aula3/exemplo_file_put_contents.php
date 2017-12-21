<?php
require_once("funcoes.php");

$nomeArquivo = "listaPessoas.txt";
$dadosArquivo = file($nomeArquivo);
$codigoCliente = buscarProximoCodigoCliente($dadosArquivo);

$dadosCliente = array($codigoCliente,"Edson","18","Masculino","10/01/1999");
$conteudo = implode("|", $dadosCliente);

if(count($dadosArquivo) > 0)
	$conteudo = PHP_EOL.$conteudo;

array_push($dadosArquivo, $conteudo);
file_put_contents($nomeArquivo,$dadosArquivo);

echo "Cliente cadastrado com sucesso.";