<?php
namespace App\Controller;

use App\Forms\LoginForm;

class Controller
{
    public function indexController()
    {
        ob_start();
        session_start();
        if(!empty($_POST)) {
                $loginform = new LoginForm($_POST);
                $loginform->login();
        }
        dump($_SESSION);
      
        include '../templates/index.php';
        ob_end_flush();
    }

    public function disconnectController(){
        unset($_SESSION);
        dd($_SESSION);
        header('location: /');

    }

}