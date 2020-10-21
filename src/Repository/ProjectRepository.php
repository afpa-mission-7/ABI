<?php 
/**
 * @author Doryan
 * 21/10/20
 */

namespace App\Repository;
use App\Repository\Repository;
use App\Entity\Collaborator;
use App\Entity\Customer;
use App\Entity\Document;
use \PDO;



class ProjectRepository extends Repository
{
    public function __construct()
    {
        parent::__construct("Project");
    }

    public function findByDocument( Document $document):array
    {
        $idDocument = $document->getId();
        $query = $this->pdo->prepare("SELECT project.* FROM project JOIN document ON project.id=document.project_id WHERE document.id = ?  ");
        $query->execute([$idDocument]);
        return $query->fetchAll(PDO:: FETCH_CLASS, "App\Entity\Project");
    }

    public function findByCustomer( Customer $customer) : array
    {
        $idCustomer = $customer->getId();
        $query = $this->pdo->prepare("SELECT project.* FROM project JOIN project_customer AS pc ON project.id = pc.project_id WHERE pc.customer_id = ?");
        $query->execute([$idCustomer]);
        return $query->fetchAll(PDO:: FETCH_CLASS, "App\Entity\Project");
    }

    public function findByCollaborator( Collaborator $collaborator) : array
    {
        $idCollaborator = $collaborator->getId();
        $query = $this->pdo->prepare("SELECT project.* FROM project JOIN project_collaborator AS pc ON project.id = pc.project_id WHERE pc.collaborator_id = ?");
        $query->execute([$idCollaborator]);
        return $query->fetchAll(PDO:: FETCH_CLASS, "App\Entity\Project");

    }
}