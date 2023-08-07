<?php

function crud_create(array $user)
{
    $conteudoBD = file_get_contents('data/users.json');
    $conteudoBDArray = json_decode($conteudoBD);

    $conteudoBDArray[] = $user;

    $conteudoUserJson = json_encode($conteudoBDArray);

    file_put_contents('data/users.json', $conteudoUserJson);
}