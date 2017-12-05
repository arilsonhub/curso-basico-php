<?php
/* 
	3 - Escrever um programa que receba o nome de um aluno e as notas das três provas que ele obteve no semestre, no final
    imprimir na tela o nome do aluno e a sua média(aritmética). Obs: a nota da prova é entre 0 a 10.
*/

$nomeAluno = "Fernando Silva";
$nota1 = 7;
$nota2 = 9;
$nota3 = 7;
$media = (int)(($nota1 + $nota2 + $nota3) / 3);

echo "Nome do aluno: ".$nomeAluno."<br>";
echo "Nota da primeira prova: ".$nota1."<br>";
echo "Nota da segunda prova: ".$nota2."<br>";
echo "Nota da terceira prova: ".$nota3."<br>";
echo "Média do aluno: ".$media."<br>";