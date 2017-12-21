<?php
$nomeArquivo = "listaPessoas.txt";

$codigoCliente = 8;
$dadosArquivo = file($nomeArquivo);
$tamanhoArray = count($dadosArquivo);

if($tamanhoArray > 0){

	$clienteEncontrado = false;
	for($i = 0; $i < $tamanhoArray; $i++){
		
		$dadosCliente = explode("|",$dadosArquivo[$i]);	
		if($dadosCliente[0] == $codigoCliente){
			$clienteEncontrado = true;
			array_splice($dadosArquivo,$i,1);
			break;
		}		
	}
	
	if($clienteEncontrado){

		$link = fopen($nomeArquivo,"w");

		$conteudoArquivo = "";
		foreach($dadosArquivo as $dadosCliente){
			$conteudoArquivo .= $dadosCliente;
		}

		fwrite($link, $conteudoArquivo);

		fclose($link);

		echo "Registro removido com sucesso.";
		
	}else{
		echo "O cliente solicitado para remoção nao existe.";
	}
	
}else{
	echo "Não existem registros para remover.";
}