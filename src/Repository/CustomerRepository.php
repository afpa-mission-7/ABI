<?php
/**
 * @author Doryan
 * @author Aymeric
 * @author Simon
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
     * @method findByProject
     * Retourne tous les Customer qui ont une relation avec le Project passé en paramètre
     * @param Project $project
     * @param int $nb
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