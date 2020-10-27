<?php

namespace App\Controller;

use App\Entity\Customer;
use App\Forms\AddCustomerForm;
use App\Forms\customerForm;
use App\Forms\LoginForm;
use App\Repository\CustomerRepository;
use App\Repository\CollaboratorRepository;
use App\Repository\Repository;
use App\Repository\DocumentRepository;
use App\Repository\ProjectRepository;


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
        /* $collaboratorRepository = new CollaboratorRepository();
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
        $customerRepository = new CustomerRepository();
        $customers = $customerRepository->findAll();
        include '../templates/gestionclients.php';
        ob_end_flush();
    }

    public function gestioncollaborateursController()
    {
        ob_start();
        session_start();
        include '../templates/gestioncollaborateurs.php';
        ob_end_flush();
    }

    public function gestionprojetsController()
    {
        ob_start();
        session_start();
        $projectRepository = new ProjectRepository();
        $projects = $projectRepository->findAll();
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
            if ($loginform->login()) {
                echo 'true';
            } else {
                echo 'false';
            }
        }
    }

    public function profileController()
    {
        ob_start();
        session_start();
        $collaboratorRepository = new CollaboratorRepository();
        $collaborator = $collaboratorRepository->find($_SESSION["id"]);
        include '../templates/profile.php';
        ob_end_flush();
    }

    public function disconnectController()
    {
        session_start();
        session_unset();
        header('location: /');
    }

    public function addController($classname)
    {
        $formName = "App\Forms\Add$classname" . "Form";
        $addCustomerForm = new $formName($_POST);
        if (empty($_POST['id'])) {
            $addCustomerForm->addCustomer();
        } else {
            $addCustomerForm->updateCustomer();
        }
    }

    public function modalController(string $classname)
    {
        $id = $_POST["id"];
        $repositoryName = 'App\Repository\\' . $classname . 'Repository';
        $repository = new $repositoryName();
        $entity = $repository->find($id);
       // dd($entity->toJSON());
        echo $entity->toJSON();
    }

    public function deleteCustomerController()
    {
        $id = $_POST['id'];
        $customer = new Customer();
        $customer->delete($id);
    }

}
