<?php


function do_register()
{
    if (isset($_POST['person'])){
        do_register_post();
    }else{
        do_register_get();
    }

}

function do_register_post()
{
    $erros = validator_cadastro($_POST['person']);

    if (!empty($erros)){
        render_view('register', $erros);
        exit();
    }

    $_POST['person']['mail_validation'] = false;
    crud_create($_POST['person']);
    enviarEmail($_POST['person']);
    header("Location: /?page=login");
}

function do_register_get()
{
    render_view('register');
}

function do_login()
{
    render_view('login');
}

function do_not_found()
{
    render_view('not_found');
}
