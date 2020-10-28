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
}elseif($uri==="/nouveaucollaborateur"){
    $controller->nouveaucollaborateurController();
}elseif($uri==="/nouveaucontrat"){
    $controller->nouveaucontratController();
}elseif($uri==="/infocollaborateur"){
    $controller->infocollaborateurController();
}elseif($uri==="/gestionprojets"){
    $controller->gestionprojetsController();
} elseif ($uri === "/login") {
    $controller->loginController();
} elseif ($uri === "/disconnect") {
    $controller->disconnectController();
} elseif ($uri === "/profile") {
    $controller->profileController();
}elseif($uri === "/modalProject"){
    $controller->modalController('Project');
} elseif ($uri === "/modalCustomer") {
    $controller->modalController('Customer');
} elseif ($uri === "/addCustomer") {
    $controller->addController('Customer');
}elseif ($uri === "/unjoin"){
    $controller->unjoinController();
} elseif ($uri === "/deleteCustomer") {
    $controller->deleteCustomerController();
} else{
    $controller->error404Controller();
}
