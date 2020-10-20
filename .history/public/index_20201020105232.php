<?php
require '../vendor/autoload.php';
use App\Controller\Controller;

$uri = $_SERVER['REQUEST_URI'];

$controller = new Controller();
if($uri==="/" && session_status(PHP_SESSION_active)){
    $controller->indexController();
} elseif ($uri === "/login"){
    $controller->loginController();
} elseif ($uri === "/disconnect") {
    $controller->disconnectController();
} 