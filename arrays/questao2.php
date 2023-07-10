<?php

//Suponha que você tenha um array de números inteiros e queira calcular a média dos valores. Como você poderia percorrer o array e calcular a média dos elementos?

$numeros = [11,35,40,53,96];

$somaTotal = array_sum($numeros);
$quantidadeDeNumeros = count($numeros);
$media = $somaTotal / $quantidadeDeNumeros;

echo "A soma total é: $somaTotal" . PHP_EOL;
echo "A média é: $media";