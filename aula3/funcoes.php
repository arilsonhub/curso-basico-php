<?php
function buscarProximoCodigoCliente($dadosArquivo){	
	$tamanhoArray = count($dadosArquivo);
	
	if($tamanhoArray > 0)
		$tamanhoArray -= 1;
	else
		return 1;
	
	$posicaoUltimaLinha = $tamanhoArray;
	$ultimaLinha = $dadosArquivo[$posicaoUltimaLinha];
	$dadosUltimaLinha = explode("|",$ultimaLinha);
	return ($dadosUltimaLinha[0] + 1);
}