<?php
$listaNumeros = array(50,25,1,15,5);

//Adiciona um valor no final do Array
//array_push($listaNumeros,100);

//Extrai uma parcela do Array, que posso usar para deletar um elemento do Array por exemplo.
//array_splice($listaNumeros,0,1);

/*
 Função unset cancela a declaração de uma variável, nesse caso posso usar também para remover um elemento do Array
 OBS: Essa função não reajusta os indices do Array.
*/
//unset($listaNumeros[0]);

/*
Localiza um elemento dentro do Array, Se o elemento existe então retorna um número inteiro com a posição onde foi encontrado.
Se o elemento não existe então retorna um tipo booleano com valor false.
*/
/*
$valorProcurar = 25;
$posicaoElementoLocalizado = array_search($valorProcurar,$listaNumeros);

if($posicaoElementoLocalizado != false){
	echo "O valor ".$valorProcurar." foi localizado no Array<br>";
	echo "Posição do elemento: ".$posicaoElementoLocalizado;
}else{
	echo "O valor ".$valorProcurar." não existe no Array";
}
*/

/*
//Concatena dois Arrays, isto é, realiza a junção de dois Arrays, no final temos um Array com os valores de ambos Arrays.

$listaNumerosImpares = array(1,3,5,7,9);
$listaNumerosPares = array(0,2,4,6,8);
$listaUnificada = array_merge($listaNumerosPares,$listaNumerosImpares);

echo "<pre>";
print_r($listaUnificada);
echo "</pre>";
*/

//Verifica se um valor existe no Array
/*
$existeNoArray = in_array(5,$listaNumeros);
var_dump($existeNoArray);
*/

//Verifica se uma chave(indice) existe no Array
/*
$indiceExisteNoArray = array_key_exists(4,$listaNumeros);
var_dump($indiceExisteNoArray);
*/

//Retorna a quantidade de elementos que o Array possui.
/*
$quantidadeElementosNoArray = count($listaNumeros);
var_dump($quantidadeElementosNoArray);
*/

/*
  Junta elementos de uma matriz em uma string
  Retorna uma string contendo os elementos da matriz na mesma ordem com uma ligação entre cada elemento.
*/
/*
$arrayNomes = array("Arilson","Emerson","Fulano","Beutrano","Siclano");
$stringNomes = implode(",",$arrayNomes);
var_dump($stringNomes);
*/

//Cria um Array a partir de uma String, usando como delimitador um determinado caracter que esta presente na String.
/*
$stringNomes = "Arilson|Emerson|Fulano|Beutrano|Siclano|Teutrano";
$arrayNomes = explode("|", $stringNomes);
echo "<pre>";
print_r($arrayNomes);
echo "</pre>";
*/

//Mistura os elementos de um Array de forma aleatória
//shuffle($listaNumeros);

//Ordena o Array de forma ascendente(Menor para o Maior)
//sort($listaNumeros);

//Ordena o Array de forma ascendente(Menor para o Maior) porém mantém a associação entre Indice/Valor.
//asort($listaNumeros);

echo "<pre>";
print_r($listaNumeros);
echo "</pre>";