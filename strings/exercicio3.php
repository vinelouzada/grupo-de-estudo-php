<?php

//3 - Dado o seguinte array: ["azul", "verde", "amarelo", "vermelho"], junte os elementos desse array em uma unica string separados por virgula.

$cores = ["azul", "verde", "amarelo", "vermelho"];
$coresJuntas = implode(',', $cores);
var_dump($coresJuntas);