<?php
namespace App\Controller;


class Controller
{
    public function indexController()
    {
        ob_start();
        
        include '../templates/index.php';
        ob_end_flush();
    }
}