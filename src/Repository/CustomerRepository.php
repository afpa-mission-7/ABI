<?php

namespace App\Repository;

use\PDO;
use App\Repository\Repository;
use App\Entity\Project;

class CustomerRepository extends Repository
{
    public function __construct()
    {
        parent::__construct('Customer');
    }

    public function findByProject($projet)
    {
        $idProjet = $projet->getId();
        $sql = "SELECT customer.* FROM customer JOIN project_customer ON customer.id = project_customer.customer_id WHERE project_id = ?";
        $query = $this->pdo->prepare($sql);
        $query->execute([$idProjet]);
        return $query->fetchAll(PDO::FETCH_CLASS, "App\Entity\Customer");
    }

}