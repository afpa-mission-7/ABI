<?php

namespace App\Controller;

use App\Forms\LoginForm;

class Controller
{
    public function indexController()
    {
       
        
        include '../templates/index.php';
        
    }

    public function loginController()
    {
        session_start();
        if (!empty($_POST)) {
            $loginform = new LoginForm($_POST);
            $loginform->login();
        }
        header('location: /');
    }

    public function disconnectController()
    {
        session_destroy();
        header('location: /');
        exit();
    }
}
