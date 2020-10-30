<?php
/**
 * @author Doryan
 * 21/10/20
 */

namespace App\Repository;
use App\Repository\Repository;
use App\Entity\Project;
use App\Entity\Customer;
use \PDO;



class CustomerRepository extends Repository
{
    public function __construct()
    {
        parent::__construct("Customer");
    }

    /**
     * Retourne les valeurs correspondantes dans la table client associer a la table project dans la base de donnée selon les id
     * @param object project
     * @method findByProject
     * @return array
     */
    public function findByProject( Project $project, $nb = 1): array
    {
        $idProject = $project->getId();
        $query = $this->pdo->prepare("SELECT customer.* FROM customer JOIN project_customer AS pc ON customer.id = pc.customer_id WHERE pc.project_id = ?");
        $query->execute([$idProject]);
        return $query->fetchAll(PDO::FETCH_CLASS, Customer::class,[$nb]);
    }

}