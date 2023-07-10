<?php

//Desenvolva um algoritmo para calcular a área de uma circunferência (C), quadrado (Q), e retângulo (R). O usuário deverá escolher o polígono e informar os dados necessários para proceder os cálculos.

echo "Calculadora de Área" . PHP_EOL;
echo "-------------------" . PHP_EOL;
echo "Digite [C] p/ área do Circulo". PHP_EOL;
echo "Digite [Q] p/ área do Quadrado". PHP_EOL;
echo "Digite [R] p/ área do Retangulo" .PHP_EOL;
echo "------------------" . PHP_EOL;

$opcao = strtoupper(readline("Digite uma opção: "));



if($opcao == "C"){
    $raio = readline("Digite o Raio do Circulo: ");
    $resultado = M_PI * $raio ** 2;
    echo "A área da circuferência é: $resultado m²";
}else if($opcao == "Q"){
    $lado1 = readline("Digite o valor do Lado 1: ");
    $lado2 = readline("Digite o valor do Lado 2: ");

    $resultado = $lado1 * $lado2;
    echo "A área do quadrado é: $resultado m²";
}else if($opcao == "R"){
    $base = readline("Digite o valor da base: ");
    $altura = readline("Digite o valor da altura: ");

    $resultado = $base * $altura;
    echo "A área do retangulo é: $resultado m²";
}else{
    echo "Opção inválida";
}