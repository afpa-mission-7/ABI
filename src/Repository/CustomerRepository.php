<?php

namespace App\CustomerRepository;

use App\Repository\Repository;
use App\Entity\Collaborator;

class CustomerRepository extends Repository
{
    public function __construct()
    {
        parent::__construct('Customer');
    }

    public function findByCollaborator($collaborator)
    {
        $idCollaborator = $collaborator->getId();
        $sql = "SELECT customer.* FROM customer JOIN projet WHERE customer.customer_id = projet.id IN(SELECT * FROM collaborator JOIN projet ON collaborator.collaborator_id = projet_id WHERE projet.id = ?)"
        $query = $this->pdo->prepare($sql);
        $query->execute($idCollaborator);
    }

}