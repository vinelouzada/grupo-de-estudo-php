<?php

// Em um sistema de gerenciamento de usuários, você precisa armazenar os usuários ativos em um array. Como você poderia remover um usuário específico do array?

$usuarios = [
    [
        'id' => 3,
       'nome' => 'Airam',
       'ativo' => false
    ],
    [
        'id' => 2,
       'nome' => "Nat",
       'ativo' => true
    ],
    [
        'id' => 6,
       'nome' => 'Ray',
       'ativo' => false
    ], 
];

$id = 6;

foreach($usuarios as $chave => $valor){
    if($valor['id'] == $id){
        unset($usuarios[$chave]);
    }   
}

var_dump($usuarios);






















