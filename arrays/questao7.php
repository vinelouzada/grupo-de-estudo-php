<?php

//Você recebeu uma lista de produtos vendidos em um determinado dia, e cada produto está representado como um array associativo contendo informações como nome, preço e quantidade. Como você poderia calcular o valor total das vendas desse dia?

$produtos = [
    [
        'nome' => 'Play 5',
        'preco' => 4050,
        'quantidade'=> 2
    ],
    [
        'nome' => 'PC Gamer com Led',
        'preco' => 5000,
        'quantidade'=> 3
    ],
    [
        'nome' => 'Controle',
        'preco' => 350,
        'quantidade'=> 2
    ]
];

// $totalVendas = 0;
// foreach($produtos as $produto){
//     $preco = $produto['preco'];
//     $quantidade = $produto['quantidade'];
//     $valorVenda = $preco * $quantidade;
    
//     $totalVendas += $valorVenda;
// }

$totalPrecoPorProduto = array_map(function($produto){
    return $produto['preco'] * $produto['quantidade'];
},$produtos);


var_dump($totalVendas);