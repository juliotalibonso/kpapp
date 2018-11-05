<?php

require '../vendor/autoload.php';

$route = trim($_SERVER['REQUEST_URI']);

switch ($route) {
    case '/':
        include '../app/view/home.php';
        break;
    
    case '/about':
        include '../app/view/about.php';
        break;

    case '/login':
        include '../app/view/login.php';
        break;


    default:
        echo ("<h1>Halaman Tidak Ditemukan</h1>");
        break;
}

?>