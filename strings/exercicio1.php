<?php
//1 - Escreva um código em PHP que recebe uma frase como entrada e verifique se a palavra "Grupo" está contida nessa string

$frase = readline("Digite uma frase: ");

if(str_contains($frase, "Grupo") == true){
    echo "A palavra 'Grupo' pertence a frase: '$frase'";
}else{
    echo "A palavra 'Grupo' NÃO pertence a frase: '$frase'";
}