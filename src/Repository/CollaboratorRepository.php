<?php
/**
 * @author Doryan
 * 21/10/20
 */

namespace App\Repository;
use App\Repository\Repository;
use App\Entity\Project;
use \PDO;



class CollaboratorRepository extends Repository
{
    public function __construct() 
    {
        parent::__construct("Collaborator");
    }

        public function findByProject(Project $project): array
    {
        $idProject = $project->getId();
        $query = $this->pdo->prepare("SELECT collaborator.* FROM collaborator JOIN project_collaborator AS pc ON collaborator.id=pc.collaborator_id WHERE pc.project_id = ? ");
        $query->execute([$idProject]);
        return $query->fetchAll(PDO::FETCH_CLASS,'App\Entity\Collaborator');
    }
}