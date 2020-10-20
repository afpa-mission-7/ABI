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
        ob_end_flush();
    }

    public function aproposController()
    {
        ob_start();
        include '../templates/apropos.php';
        ob_end_flush();
    }

    public function contactController()
    {
        ob_start();
        include '../templates/contact.php';
        ob_end_flush();
    }

    public function gestionclientsController()
    {
        ob_start();
        include '../templates/gestionclients.php';
        ob_end_flush();
    }

    public function gestioncollaborateursController()
    {
        ob_start();
        include '../templates/gestioncollaborateurs.php';
        ob_end_flush();
    }

    public function gestionprojetsController()
    {
        ob_start();
        include '../templates/gestionprojets.php';
        ob_end_flush();
    }

    public function indexconnectController()
    {
        ob_start();
        include '../templates/indexconnect.php';
        ob_end_flush();
    }

    public function error404Controller()
    {
        ob_start();
        include '../templates/error404.php';
        ob_end_flush();
    }
///////////////////////////////////////////////
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
        session_start();
        session_unset();
        header('location: /');
        exit();
    }
}
