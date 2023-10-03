<?php


function render_view($template, $erros = [])
{
    $content = file_get_contents(VIEW_FOLDER.$template.'.view');

    if (empty($erros)){
        $content = preg_replace('/{{\$[\w]+}}/','', $content);
    }else{
        foreach ($erros as $erro => $mensagem){
            $nomeErro = '{{$'.$erro.'}}';
            $content = str_replace($nomeErro, $mensagem, $content);

        }
        $content = preg_replace('/{{\$[\w]+}}/','', $content);
    }


    echo $content;
}