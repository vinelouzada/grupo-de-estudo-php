<?php

require_once 'controller.php';
require_once 'validation.php';
require_once 'view.php';
require_once 'crud.php';
require_once 'mail.php';

$route = $_GET['page'] ?? 'login';

switch ($route){
    case 'register':
        do_register();
        break;
    case 'login':
        do_login();
        break;
    default:
        do_not_found();
        break;
}



