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
        $collaboratorRepository = new CollaboratorRepository();
        $collaborators = $collaboratorRepository->find(5);
        $projectRepository = new ProjectRepository("Project");
        $projects = $projectRepository->findByCollaborator($collaborators);
        dump($projects);
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

    public function addCustomerController()
    {
        $addCustomerForm = new AddCustomerForm($_POST);
        if(empty($_POST['id'])){
            $addCustomerForm->addCustomer();
        } else {
            $addCustomerForm->updateCustomer();
        }
        

    }


    /**
     * @author Doryan
     * @author Aymeric
     * 22/10/20
     */
    public function modalCustomerController()
    {
        $id = $_POST["id"];
        $customerRepository = new CustomerRepository();
        $customer = $customerRepository->find($id);
        echo $customer->toJSON();
    }

    public function updateCustomerController()
    {
        if(!empty($_POST['id'])){
            $addCustomerForm = new customerForm($_POST);
            $addCustomerForm->updateCustomer();
        }
        dd($_POST);

        
        /*$customer = new CustomerRepository();
        $customer->find(7)->delete($customer);*/

    }

}