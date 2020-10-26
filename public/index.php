<?php
require '../vendor/autoload.php';

use App\Controller\Controller;

$uri = $_SERVER['REQUEST_URI'];

$controller = new Controller();
if ($uri === "/") {
    $controller->indexController();
} elseif ($uri === "/apropos") {
    $controller->aproposController();
} elseif ($uri === "/contact") {
    $controller->contactController();
} elseif ($uri === "/gestionclients") {
    $controller->gestionclientsController();
} elseif ($uri === "/gestioncollaborateurs") {
    $controller->gestioncollaborateursController();
} elseif ($uri === "/gestionprojets") {
    $controller->gestionprojetsController();
} elseif ($uri === "/login") {
    $controller->loginController();
} elseif ($uri === "/disconnect") {
    $controller->disconnectController();
<<<<<<< HEAD
} elseif ($uri === "/profile") {
    $controller->profileController();
}elseif($uri === "/modalProject"){
    $controller->modalProjectController();
} else {
=======
} elseif ($uri === "/addCustomer") {
    $controller->addCustomerController();
} elseif ($uri === "/modalCustomer") {
    $controller->modalCustomerController();
} else{
>>>>>>> b5d5ef97d1dce085982342e48e9592153698f56c
    $controller->error404Controller();
}
