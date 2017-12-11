<?php
include("constantes.php");

function somarDoisValoresComPI($x,$y){
	
	$resultado = $x + $y + NUMERO_PI;
	return $resultado;
}

function imprimirNumerosDeZeroAteDez(){
	for($i = 0; $i <= 10;$i++){
		echo $i." ";
	}
}

//Função com parâmetros não obrigatórios
function imprimirNomeUsuarioNaTela($nomeUsuario=""){
	
	if($nomeUsuario == "")	
		echo "Nome padrão: Joãozinho";
	else
		echo $nomeUsuario;
}