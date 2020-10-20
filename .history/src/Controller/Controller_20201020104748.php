<?php

namespace App\Controller;

use App\Forms\LoginForm;

class Controller
{
    public function indexController()
    {
        ob_start();
        session_start();
        include '../templates/index.php';
        session_reset();
        ob_end_flush();
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
        unset($_POST);
        session_destroy();
        header('location: /');
        exit();
    }
}
