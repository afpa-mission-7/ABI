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
} elseif ($uri === "/profile") {
    $controller->profileController();
}elseif($uri === "/modalProject"){
    $controller->modalProjectController();
} else {
    $controller->error404Controller();
}
