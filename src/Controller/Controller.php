<?php
namespace App\Controller;


class Controller
{
    public function indexController()
    {
        ob_start();
        session_start();
        dump($_SESSION);
        include '../templates/index.php';
        ob_end_flush();
    }

    public function loginController()
    {
        ob_start();
        include '../templates/login.php';
        ob_end_flush();
    }

    public function connectController()
    {
        session_start();
        $_SESSION["name"] = "Jean";
        header("Location: /");
    }

    public function disconnectController()
    {
        session_start();
        session_unset();
        header("Location: /");
    }
}