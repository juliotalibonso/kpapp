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

    case '/profil':
        include '../app/view/profil.php';
        break;


    default:
        echo ("<h1>Halaman Tidak Ditemukan</h1>");
        break;
}

?>