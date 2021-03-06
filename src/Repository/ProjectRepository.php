<?php 
/**
 * @author Aymeric
 * @author Doryan
 * @author Simon
 * 21/10/20
 */

namespace App\Repository;
use App\Entity\Project;
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

    /**
     * Retourne un Project qui a une relation avec le Document passé en paramètre
     * @param Document $document
     * @param int $nb
     * @return Project
     */
    public function findOneByDocument( Document $document, $nb = 1):Project
    {
        $idDocument = $document->getId();
        $query = $this->pdo->prepare("SELECT project.* FROM project JOIN document ON project.id=document.project_id WHERE document.id = ?  ");
        $query->execute([$idDocument]);
        $query->setFetchMode(PDO:: FETCH_CLASS, Project::class,[$nb]);
        return $query->fetch();
    }

    /**
     * Retourne un Project qui a une relation avec le Customer passé en paramètre
     * @param Customer $customer
     * @param int $nb
     * @return array
     */
    public function findByCustomer( Customer $customer, $nb = 1) : array
    {
        $idCustomer = $customer->getId();
        $query = $this->pdo->prepare("SELECT project.* FROM project JOIN project_customer AS pc ON project.id = pc.project_id WHERE pc.customer_id = ?");
        $query->execute([$idCustomer]);
        return $query->fetchAll(PDO:: FETCH_CLASS, Project::class,[$nb]);
    }

    /**
     * Retourne un Project qui a une relation avec le Collaborator passé en paramètre
     * @param Collaborator $collaborator
     * @param int $nb
     * @return array
     */
    public function findByCollaborator( Collaborator $collaborator, $nb = 1) : array
    {
        $idCollaborator = $collaborator->getId();
        $query = $this->pdo->prepare("SELECT project.* FROM project JOIN project_collaborator AS pc ON project.id = pc.project_id WHERE pc.collaborator_id = ?");
        $query->execute([$idCollaborator]);
        return $query->fetchAll(PDO:: FETCH_CLASS, Project::class,[$nb]);

    }
}