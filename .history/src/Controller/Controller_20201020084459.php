<?php
namespace App\Controller;

use LoginForm;

class Controller
{
    public function indexController()
    {
        ob_start();
        $loginform = new LoginForm();
        $loginform->login();
        include '../templates/index.php';
        ob_end_flush();
    }

}