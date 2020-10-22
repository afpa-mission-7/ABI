<?php
require '../vendor/autoload.php';
use App\Controller\Controller;

$uri = $_SERVER['REQUEST_URI'];

$controller = new Controller();
if($uri==="/"){
    $controller->indexController();
}elseif($uri==="/apropos"){
    $controller->aproposController();
}elseif($uri==="/contact"){
    $controller->contactController();
}elseif($uri==="/gestionclients"){
    $controller->gestionclientsController();
}elseif($uri==="/gestioncollaborateurs"){
    $controller->gestioncollaborateursController();
}elseif($uri==="/gestionprojets"){
    $controller->gestionprojetsController();
} elseif ($uri === "/login"){
    $controller->loginController();
} elseif ($uri === "/disconnect") {
    $controller->disconnectController();
} elseif ($uri === "/addCustomer") {
    $controller->addCustomerController();
} elseif ($uri === "/modalCustomer") {
    $controller->modalCustomerController();
} else{
    $controller->error404Controller();
}
