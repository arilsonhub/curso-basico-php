<?php
/*
1 - Escrever um programa que receba o nome de um aluno e as notas das três provas que ele obteve no semestre, no final
    imprimir na tela o nome do aluno e a sua média(aritmética). Obs: a nota da prova é entre 0 a 10.
*/

$listaAlunos = array(
		  0 => array("nome" => "Arilson", "notas" => array(8,6,7.5)),
		  1 => array("nome" => "Ronaldo", "notas" => array(4,2,7)),
		  2 => array("nome" => "Rogério", "notas" => array(9,8,9))
);

foreach($listaAlunos as $dados){	

	$notasDoAluno = $dados['notas'];
	$somatorioNotas = 0;
	$quantidadeAvaliacoes = count($notasDoAluno);
	$stringNotasAluno = implode(" , ",$notasDoAluno);
	
	foreach($notasDoAluno as $nota)
		$somatorioNotas += $nota;		
	
	$media = (int)($somatorioNotas / $quantidadeAvaliacoes);
	
	echo "Nome do aluno: ".$dados['nome']."<br>";
	echo "Notas do semestre: ".$stringNotasAluno."<br>";
	echo "Média do aluno: ".$media."<br>";
	echo "-------------------------------------------<br>";
}