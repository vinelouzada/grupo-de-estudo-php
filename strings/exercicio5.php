<?php

//Dada a seguinte string com caracteres especiais: "!@#Hello, world!@#", escreva um código em PHP para remover os caracteres "!@#" no início e no final da string. Em seguida, exiba a string resultante.

$texto = "!@#Hello, world!@#";
var_dump($texto);
$resultado =  rtrim($texto, '!@#');
var_dump($resultado);