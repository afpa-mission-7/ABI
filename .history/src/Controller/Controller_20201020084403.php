<?php
namespace App\Controller;

use LoginForm;

class Controller
{
    public function indexController()
    {
        ob_start();
        $loginform = new LoginForm{
            
        }
        include '../templates/index.php';
        ob_end_flush();
    }

}