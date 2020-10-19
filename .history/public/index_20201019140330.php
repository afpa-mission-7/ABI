<?php
require '../vendor/autoload.php';
use App\Controller\Controller;

$uri = $_SERVER['REQUEST_URI'];

$controller = new Controller();
if($uri==="/"){
    $controller->indexController();
}