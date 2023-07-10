<?php

# 3 - Exibir a soma dos 100 primeiros números pares.
# 2, 4 , 6, 8, 10

$i = 1;
$somaTotal = 0;
$contagemPar = 1;
while($contagemPar <= 100){

    if($i % 2 == 0){
        $somaTotal = $somaTotal + $i;
        $contagemPar++;
    }

    $i++;
}

echo "A soma total é $somaTotal";