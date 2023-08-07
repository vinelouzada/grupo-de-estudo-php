<?php


function do_register()
{
    if (isset($_POST['person'])){
        crud_create($_POST['person']);
        header("Location: /?page=login");
        exit();
    }


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
