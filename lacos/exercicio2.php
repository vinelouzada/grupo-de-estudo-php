<?php 

#2 Faça um programa que receba a idade de 5 pessoas e que calcule e mostre a quantidade de pessoas com idade maior ou igual a 18 anos.

$quantidadeDePessoas = 0;

for($i = 1; $i <= 5; $i++){
    $idadePessoa = readline("Digite a sua idade: ");

    if($idadePessoa >= 18){
        $quantidadeDePessoas++;
    }
}

echo "A quantidade de pessoas com idade maior ou igual a 18 é $quantidadeDePessoas";