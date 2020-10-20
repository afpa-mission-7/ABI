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
        dd($_SESSION);
      
        include '../templates/index.php';
        ob_end_flush();
    }

}