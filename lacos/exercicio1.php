<?php

# 1 -  Faça um programa que receba um número e usando laços de repetição calcule e mostre a tabuada de multiplicação desse número.


$numero = readline("Digite um numero: ");

for($i = 1; $i <= 10; $i++){
    echo "$i x $numero = " . $i * $numero . PHP_EOL;
}
