<?php

// Suponha que você esteja desenvolvendo um sistema de upload de arquivos e deseja verificar se o nome de um arquivo possui uma extensão específica, como ".jpg".


$arquivo = "gato.mp4";

if(str_ends_with($arquivo, ".jpg")){
    echo "O arquivo é uma imagem";    
}else{
    echo "O arquivo não é uma imagem";
}