<?php
require_once("funcoes.php");

$nomeArquivo = "listaPessoas.txt";
$dadosArquivo = file($nomeArquivo);
$tamanhoArray = count($dadosArquivo);
$codigoCliente = buscarProximoCodigoCliente($dadosArquivo);

$link = fopen($nomeArquivo,"a");

$dadosCliente = array($codigoCliente,"Mario","15","Masculino","25/03/1992");
$dadosLinhaArquivo = implode("|", $dadosCliente);

if($tamanhoArray > 0)  
  $dadosLinhaArquivo = PHP_EOL.$dadosLinhaArquivo;

fwrite($link,$dadosLinhaArquivo);

fclose($link);

echo "Cliente cadastrado com sucesso.";