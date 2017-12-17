<?php
/*
7 - Faça um programa que receba a lista de compras do supermercado de 3 pessoas conforme tabela abaixo, 
	calcule o valor total da compra de cada pessoa, ordene a listagem pela pessoa que teve o menor gasto total na compra.
	No final mostre na tela todos os dados da compra de cada pessoa, inclusive o valor total da compra de cada pessoa.
	
	Nome do cliente: Arilson
	|  Produto        |Quantidade|Preço unitário|SubTotal
	| Tv Smart        |    1     | 2000.00      |  (Calcular)
	| Lava louça      |    1     | 830.00       |  (Calcular)
	| Saco de Arroz   |    2     | 20.00        |  (Calcular)
	| Pão frances     |    15    | 0.50         |  (Calcular)
	| Maionese        |    2     | 8.00         |  (Calcular)
	| Batata          |    11    | 2.00         |  (Calcular)
	| Lata Milho      |    2     | 3.50         |  (Calcular)
	| Extrato tomate  |    3     | 2.90         |  (Calcular)
	| Pasta de dente  |    4     | 3.95         |  (Calcular)
	Total da compra: R$ x.xx(Calcular)
	
	Nome do cliente: Rogério
	|  Produto          |Quantidade|Preço unitário|SubTotal
	| Notebook Dell     |    1     | 3500.00      |  (Calcular)
	| Cartão netflix    |    2     | 27.00        |  (Calcular)
	| Saco de Arroz     |    1     | 10.00        |  (Calcular)
	| Pão frances       |    20    | 0.50         |  (Calcular)
	| Tomate            |    6     | 5.00         |  (Calcular)
	| Batata Palha      |    1     | 4.00         |  (Calcular)	
	| Extrato tomate    |    3     | 2.90         |  (Calcular)
	| Secador de cabelo |    1     | 100.00       |  (Calcular)
	Total da compra: R$ x.xx(Calcular)
	
	Nome do cliente: Ronaldo
	|  Produto        |Quantidade|Preço unitário|SubTotal		
	| Pote Iogurte    |    2     | 6.99         |  (Calcular)
	| Geladeira Inox  |    8     | 3500.00      |  (Calcular)
	| Maionese        |    1     | 10.00        |  (Calcular)	
	| Refrigerante    |    3     | 4.50         |  (Calcular)
	| Xicara          |    2     | 29.90        |  (Calcular)
	| Desodorante     |    4     | 13.00        |  (Calcular)
	Total da compra: R$ x.xx(Calcular)
*/

//Arquivos de funções
require_once("funcoes.php");

//Criando lista de compras
$listaCompras = array();

//Montando array de compras
$listaCompras[0] = array();
$listaCompras[0]['nomeCliente'] = "Arilson";
$listaCompras[0]['listaProdutos'] = array();
$listaCompras[0]['listaProdutos'][0] = array("nomeProduto" => "Tv Smart",       "quantidade" => 1,  "precoUnitario" => 12000.00);
$listaCompras[0]['listaProdutos'][1] = array("nomeProduto" => "Lava louça",     "quantidade" => 1,  "precoUnitario" => 830.00);
$listaCompras[0]['listaProdutos'][2] = array("nomeProduto" => "Saco de Arroz",  "quantidade" => 2,  "precoUnitario" => 20.00);
$listaCompras[0]['listaProdutos'][3] = array("nomeProduto" => "Pão frances",    "quantidade" => 15, "precoUnitario" => 0.50);
$listaCompras[0]['listaProdutos'][4] = array("nomeProduto" => "Maionese",       "quantidade" => 2,  "precoUnitario" => 8.00);
$listaCompras[0]['listaProdutos'][5] = array("nomeProduto" => "Batata",         "quantidade" => 11, "precoUnitario" => 2.00);
$listaCompras[0]['listaProdutos'][6] = array("nomeProduto" => "Lata Milho",     "quantidade" => 2,  "precoUnitario" => 3.50);
$listaCompras[0]['listaProdutos'][7] = array("nomeProduto" => "Extrato tomate", "quantidade" => 3,  "precoUnitario" => 2.90);
$listaCompras[0]['listaProdutos'][8] = array("nomeProduto" => "Pasta de dente", "quantidade" => 4,  "precoUnitario" => 3.95);

$listaCompras[1] = array();
$listaCompras[1]['nomeCliente'] = "Rogério";
$listaCompras[1]['listaProdutos'] = array();
$listaCompras[1]['listaProdutos'][0] = array("nomeProduto" => "Notebook Dell",     "quantidade" => 1,  "precoUnitario" => 3500.00);
$listaCompras[1]['listaProdutos'][1] = array("nomeProduto" => "Cartão netflix",    "quantidade" => 2,  "precoUnitario" => 27.00);
$listaCompras[1]['listaProdutos'][2] = array("nomeProduto" => "Saco de Arroz",     "quantidade" => 1,  "precoUnitario" => 10.00);
$listaCompras[1]['listaProdutos'][3] = array("nomeProduto" => "Pão frances",       "quantidade" => 20, "precoUnitario" => 0.50);
$listaCompras[1]['listaProdutos'][4] = array("nomeProduto" => "Tomate", 		   "quantidade" => 6,  "precoUnitario" => 5.00);
$listaCompras[1]['listaProdutos'][5] = array("nomeProduto" => "Batata Palha", 	   "quantidade" => 1,  "precoUnitario" => 4.00);
$listaCompras[1]['listaProdutos'][6] = array("nomeProduto" => "Extrato tomate",    "quantidade" => 3,  "precoUnitario" => 2.90);
$listaCompras[1]['listaProdutos'][7] = array("nomeProduto" => "Secador de cabelo", "quantidade" => 1,  "precoUnitario" => 100.00);

$listaCompras[2] = array();
$listaCompras[2]['nomeCliente'] = "Ronaldo";
$listaCompras[2]['listaProdutos'] = array();
$listaCompras[2]['listaProdutos'][0] = array("nomeProduto" => "Pote Iogurte",   "quantidade" => 2, "precoUnitario" => 6.99);
$listaCompras[2]['listaProdutos'][1] = array("nomeProduto" => "Geladeira Inox", "quantidade" => 1, "precoUnitario" => 3500.00);
$listaCompras[2]['listaProdutos'][2] = array("nomeProduto" => "Maionese", 		"quantidade" => 1, "precoUnitario" => 10.00);
$listaCompras[2]['listaProdutos'][3] = array("nomeProduto" => "Refrigerante", 	"quantidade" => 3, "precoUnitario" => 4.50);
$listaCompras[2]['listaProdutos'][4] = array("nomeProduto" => "Xicara", 		"quantidade" => 2, "precoUnitario" => 29.90);
$listaCompras[2]['listaProdutos'][5] = array("nomeProduto" => "Desodorante", 	"quantidade" => 4, "precoUnitario" => 13.00);

//Processamento dos dados
$saidaDosDados = "";

foreach($listaCompras as $indiceCliente => $cliente){
	$listaProdutos = $cliente['listaProdutos'];
	$totalCompra = 0;	
	foreach($listaProdutos as $indiceProduto => $produto){		
		$precoUnitario = $produto['precoUnitario'];
		$quantidade = $produto['quantidade'];
		$subTotal = $quantidade * $precoUnitario;
		$listaCompras[$indiceCliente]['listaProdutos'][$indiceProduto]['subTotal'] = $subTotal;
		$totalCompra += $subTotal;
	}
	$listaCompras[$indiceCliente]['totalCompra'] = $totalCompra;
}

//Ordenação da listagem
usort($listaCompras, 'compararValores');

//Saida de dados
$saidaDosDados = "";

foreach($listaCompras as $cliente){
	$listaProdutos = $cliente['listaProdutos'];
	$saidaDosDados .= "Nome do cliente: ".$cliente['nomeCliente']."<br>";
	$saidaDosDados .= "Produto | Quantidade | Preço unitário | SubTotal<br><br>";
	
	foreach($listaProdutos as $produto){
		$nomeProduto = $produto['nomeProduto'];
		$quantidade = $produto['quantidade'];
		$precoUnitario = $produto['precoUnitario'];
		$subTotal = $produto['subTotal'];
		$saidaDosDados .= $nomeProduto." | ".$quantidade." | ".$precoUnitario." | ".$subTotal."<br><br>";		
	}
	
	$totalCompraFormatado = number_format($cliente['totalCompra'], 2, ',', '');
	$saidaDosDados .= "Total da compra: R$ ".$totalCompraFormatado."<br><br>";	
	$saidaDosDados .= "---------------------------------------------------------<br><br>";
}

echo $saidaDosDados;