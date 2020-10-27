<?php

namespace App\Controller;

use App\Entity\Document;
use App\Forms\LoginForm;
use App\Forms\AddCollaboratorForm;
use App\Forms\AddContractForm;
use App\Repository\CollaboratorRepository;
use App\Repository\ContractRepository;
use App\Repository\CustomerRepository;
use App\Repository\DocumentRepository;
use App\Repository\ProjectRepository;
use App\Repository\Repository;




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
        session_start();

        /*
        $collaboratorRepository = new CollaboratorRepository();
        $collaborators = $collaboratorRepository->find(5);
        $projectRepository = new ProjectRepository("Project");
        $projects = $projectRepository->findByCollaborator($collaborators);
        dump($projects);*/

        include '../templates/apropos.php';
        ob_end_flush();
    }

    public function contactController()
    {
        ob_start();
        session_start();
        include '../templates/contact.php';
        ob_end_flush();
    }

    public function gestionclientsController()
    {
        ob_start();
        session_start();
        include '../templates/gestionclients.php';
        ob_end_flush();
    }

    public function gestioncollaborateursController()
    {
        ob_start();
        session_start();
        $collaboratorRepository = new CollaboratorRepository;
        $collaborators = $collaboratorRepository->showAllCollaborator(); 
        include '../templates/gestioncollaborateurs.php';
        ob_end_flush();
    }

    public function nouveaucollaborateurController()
    {
        ob_start();
        session_start();
        // $newCollaborator = new AddCollaboratorForm($_POST);
        // $newContract = new AddContractForm($_POST);
        include '../templates/nouveaucollaborateur.php';
        ob_end_flush();
    }

    public function nouveaucontratController()
    {
        ob_start();
        session_start();
        // $newContract = new AddContractForm($_POST);
        $collaboratorRepository = new CollaboratorRepository;
        $listOfCollaborators = $collaboratorRepository->findAll();
        include '../templates/nouveaucontrat.php';
/*
        foreach ($listOfCollaborators as $key => $value) {
            print_r($key );
        }
        echo " -------------------- \n";
        print_r($listOfCollaborators);*/

        ob_end_flush();
    }

    
    public function infocollaborateurController()
    {
        ob_start();
        session_start();

        include '../templates/infocollaborateur.php';

        ob_end_flush();
    }

    public function gestionprojetsController()
    {
        ob_start();
        session_start();
        include '../templates/gestionprojets.php';
        ob_end_flush();
    }

    public function error404Controller()
    {
        ob_start();
        session_start();
        include '../templates/error404.php';
        ob_end_flush();
    }

    public function loginController()
    {
        session_start();
        if (!empty($_POST)) {
            $loginform = new LoginForm($_POST);
            if($loginform->login()){
                echo 'true';
            }else{
                echo 'false';
            }
        }
    }

    public function disconnectController()
    {
        session_start();
        session_unset();
        header('location: /');
    }
}
