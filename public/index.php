<?php
require '../vendor/autoload.php';
use App\Controller\Controller;

$uri = $_SERVER['REQUEST_URI'];

$controller = new Controller();

if($uri==="/"){
    $controller->indexController();
}elseif ($uri === "/login") {
    $controller->loginController();
}elseif ($uri === "/connect") {
    $controller->connectController();
}elseif ($uri === "/disconnect"){
    $controller->disconnectController();
}else{
    $controller->error404Controller();
}