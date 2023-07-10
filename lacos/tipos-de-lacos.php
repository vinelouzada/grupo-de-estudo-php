<?php 


$contador = 1;
while($contador <= 3){
     echo  "Pessoa #$contador " . readline("Qual é o seu nome: ") . PHP_EOL;

     $contador = $contador + 1;
}


for($contador = 1; $contador <= 3; $contador = $contador + 1){
    echo  "Pessoa #$contador " . readline("Qual é o seu nome: ") . PHP_EOL;
}

$contador = 1;

do{
    echo  "Pessoa #$contador " . readline("Qual é o seu nome: ") . PHP_EOL;
    $contador = $contador + 1;
}while($contador <= 3);
