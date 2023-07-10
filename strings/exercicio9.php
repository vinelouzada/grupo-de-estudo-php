<?php

// 2 - Escreva um código em PHP que recebe um e-mail e verifique se ele começa com “admin”.

$email = "vinelouzada@gmail.com";

$email = filter_var($email, FILTER_VALIDATE_EMAIL);

if($email == false){
    die("E-mail inválido");
}

if(str_starts_with($email, "admin")){
    echo "O e-mail começa com 'admin'";
}else{
    echo "O e-mail não começa com 'admin'";
}