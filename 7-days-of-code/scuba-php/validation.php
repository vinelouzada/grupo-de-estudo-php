<?php

function validator_cadastro(array $dadosDoFormulario): array
{

   if(mb_strlen($dadosDoFormulario["password"]) < 10){
        $erros['senha'] = "A senha é menor que 10 caracteres";
   }

   if ($dadosDoFormulario["password"] !== $dadosDoFormulario["password-confirm"]){
       $erros['confirmarSenha'] = "As senhas não coicidem";
   }

   $conteudoBD = file_get_contents("data/users.json");

   $bancoArray = json_decode($conteudoBD,true);

   foreach ($bancoArray as $item){
       if ($item["email"] == $dadosDoFormulario["email"]){
           $erros['email'] = "E-mail já cadastrado";
       };
   }


   return $erros;
}