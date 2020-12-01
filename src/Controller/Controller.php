<?php

namespace App\Controller;

use App\Entity\Customer;
use App\Entity\Document;
use App\Entity\Collaborator;
use App\Forms\AddCustomerForm;
use App\Forms\customerForm;
use App\Forms\AddCollaboratorForm;
use App\Forms\AddContractForm;
use App\Forms\LoginForm;
use App\Repository\CustomerRepository;
use App\Repository\CollaboratorRepository;
use App\Repository\Repository;
use App\Repository\Fonction;
use App\Repository\ContractRepository;
use App\Repository\DocumentRepository;
use App\Repository\FonctionRepository;
use App\Repository\ProjectRepository;


/**
 * Class d'appel aux différentes pages en utilisant les différentes méthodes créer dans les Repository
 * @author Aymeric
 * @author Doryan
 * @author Simon
 * 19/10/20
 */
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
        $accepted = ["Scrum master", "Secrétaire technique", "Directeur général", "Directeur administratif", "Directeur financier", "Responsable des ressources humaines", "Secrétaire administratif", "Commercial"];
        if (in_array($_SESSION['fonction'], $accepted)) {
            include '../templates/gestionclients.php';
        } else {
            include '../templates/accessdenied.php';
        }
        ob_end_flush();
    }

    public function gestioncollaborateursController()
    {
        ob_start();
        session_start();
        $collaboratorRepository = new CollaboratorRepository();
        $collaborators = $collaboratorRepository->showAllCollaborator();
        $accepted = ["Scrum master", "Secrétaire technique", "Directeur général", "Directeur administratif", "Directeur financier", "Responsable des ressources humaines", "Secrétaire administratif"];
        if (in_array($_SESSION['fonction'], $accepted)) {
            include '../templates/gestioncollaborateurs.php';
        } else {
            include '../templates/accessdenied.php';
        }
        ob_end_flush();
    }

    public function nouveaucollaborateurController()
    {
        ob_start();
        session_start();
        // $newCollaborator = new AddCollaboratorForm($_POST);
        // $newContract = new AddContractForm($_POST);
        $accepted = ["Scrum master", "Secrétaire technique", "Directeur général", "Directeur administratif", "Directeur financier", "Responsable des ressources humaines", "Secrétaire administratif"];
        if (in_array($_SESSION['fonction'], $accepted)) {
            include '../templates/nouveaucollaborateur.php';
        } else {
            include '../templates/accessdenied.php';
        }
        ob_end_flush();
    }

    public function nouveaucontratController()
    {
        ob_start();
        session_start();

        $accepted = ["Scrum master", "Secrétaire technique", "Directeur général", "Directeur administratif", "Directeur financier", "Responsable des ressources humaines", "Secrétaire administratif"];
        if (in_array($_SESSION['fonction'], $accepted)) {
            $collaboratorRepository = new CollaboratorRepository();
            $listOfCollaborators = $collaboratorRepository->findAllAndSort('lastname', 'firstname');
            if (!empty($_POST)) {
                $newContractForm = new AddContractForm($_POST);
                $newContractForm->newContract();
            }
            include '../templates/nouveaucontrat.php';
        } else {
            include '../templates/accessdenied.php';
        }

        ob_end_flush();
    }


    public function infocollaborateurController()
    {
        ob_start();
        session_start();
        $accepted = ["Scrum master", "Secrétaire technique", "Directeur général", "Directeur administratif", "Directeur financier", "Responsable des ressources humaines", "Secrétaire administratif"];
        if (in_array($_SESSION['fonction'], $accepted)) {
            include '../templates/infocollaborateur.php';
        } else {
            include '../templates/accessdenied.php';
        }
        $collaboratorRepository = new CollaboratorRepository();
        $listOfCollaborators = $collaboratorRepository->findAllAndSort('lastname', 'firstname');
        ob_end_flush();
    }

    public function gestionprojetsController()
    {
        ob_start();
        session_start();
        $projectRepository = new ProjectRepository();
        $projects = $projectRepository->findAll();
        $customerRepository = new CustomerRepository();
        $customers = $customerRepository->findAll();
        $collaboratorRepository = new CollaboratorRepository();
        $collaborators = $collaboratorRepository->findAll();
        $accepted = [
            "Scrum master",
            "Secrétaire technique",
            "Directeur général",
            "Développeur",
            "Directeur financier",
            "Directeur administratif"
        ];
        if (in_array($_SESSION['fonction'], $accepted)) {
            include '../templates/gestionprojets.php';
        } else {
            include '../templates/accessdenied.php';
        }
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
        $formName = 'App\Forms\\' . $classname . 'Form';
        $form = new $formName($_POST);

        $failed = $form->getFailed();
        if (empty($failed)) {
            if (empty($_POST['id'])) {
                $form->add();
            } else {
                $form->update();
            }
        } else {
            echo json_encode($failed);
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
        $customerRepository = new CustomerRepository();
        $customer = $customerRepository->find($id);
        $customer->delete();
    }

    public function deleteProjectController()
    {
        $id = $_POST['id'];
        $projectRepository = new ProjectRepository();
        $project = $projectRepository->find($id);
        $project->delete();
    }

    public function newContractController()
    {
        $AddContractForm = new AddContractForm($_POST);
        $AddContractForm->newContract();
    }
}
