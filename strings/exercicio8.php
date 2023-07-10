<?php

$senha = "vinís";

if(mb_strlen($senha) < 6){
    echo "A senha deve conter pelo 6 caracteres";
}else{
    echo "Senha ok";
}