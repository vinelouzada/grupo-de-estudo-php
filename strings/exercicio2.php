<?php

// 2 - Dada a seguinte string: "maçã,banana,uva,morango,laranja", separe essa string e imprima seus valores separadamente

$string = "maçã,banana,uva,morango,laranja";
$frutas = explode(',', $string);

var_dump($frutas);

