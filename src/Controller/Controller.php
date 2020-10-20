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
}