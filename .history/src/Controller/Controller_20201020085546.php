<?php
namespace App\Controller;

use App\Forms\LoginForm;

class Controller
{
    public function indexController()
    {
        ob_start();
        dd($_POST);
        if(!empty($_POST)) {
              $loginform = new LoginForm($_POST);
        $loginform->login();
        }
      
        include '../templates/index.php';
        ob_end_flush();
    }

}