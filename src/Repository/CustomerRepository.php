<?php
/**
 * @author Doryan
 * 21/10/20
 */

namespace App\Repository;
use App\Repository\Repository;
use App\Entity\Project;
use \PDO;



class CustomerRepository extends Repository
{
    public function __construct()
    {
        parent::__construct("Customer");
    }

    public function findByProject( Project $project): array 
    {
        $idProject = $project->getId();
        $query = $this->pdo->prepare("SELECT customer.* FROM customer JOIN project_customer AS pc ON customer.id = pc.customer_id WHERE pc.project_id = ?");
        $query->execute([$idProject]);
        return $query->fetchAll(PDO::FETCH_CLASS, "App\Entity\Customer");
    }
}