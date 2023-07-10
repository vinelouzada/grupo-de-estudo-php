<?php

//Faça um Programa que peça um valor e mostre na tela se o valor é positivo ou negativo.

$valor = '-10';

if($valor > 0){
    echo "Este valor é positivo";
}else if ($valor < 0){
    echo "Este valor é negativo";
}else{
    echo "Este é um valor nulo";
}