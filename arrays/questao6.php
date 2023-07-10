<?php

//Suponha que você tenha um array contendo uma série de números e queira remover todos os elementos duplicados desse array. Como você poderia criar um novo array sem elementos repetidos?

$numeros = [22,50,23,29,28,22,50,23];

$arraySemDuplicados = array_unique($numeros);

var_dump($arraySemDuplicados);