<?php
/**
 * @author Simon
 * @author Aymeric
 * @author Doryan
 * 28/10/20
 */

 namespace App\Repository;

use App\Entity\Collaborator;
use App\Entity\Fonction;
 use App\Repository\Repository;
 use \PDO;


 class FonctionRepository extends Repository
 {

    public function __construct()
    {
        parent::__construct("Fonction");
    }

     /**
      * @method findOneByCollaborator
      * Retourne la Fonction qui a une relation avec le Collaborator passé en paramètre
      * @param Collaborator $collaborator
      * @return Fonction
      */
    public function findOneByCollaborator( Collaborator $collaborator): Fonction
    {
        $idCollaborator = $collaborator->getId();
        $query = $this->pdo->prepare("SELECT fonction.* FROM fonction WHERE collaborator_id = ?");
        $query->execute([$idCollaborator]);
        $query->setFetchMode(PDO:: FETCH_CLASS, Fonction::class);
        return $query->fetch();
    }
 }