<?php 
/**
 * @author Doryan
 * 21/10/20
 */

namespace App\Repository;
use App\Repository\Repository;
use App\Entity\Document;
use App\Entity\Project;
use \PDO;

class DocumentRepository extends Repository
{
    public function __construct()
    {
        parent::__construct("Document");
    }

    public function findByProject( Project $project, $first): array
    {
        $idProject = $project->getId();
        $query = $this->pdo->prepare("SELECT document.* FROM document WHERE project_id = ?");
        $query->execute([$idProject]);
        return $query->fetchAll(PDO:: FETCH_CLASS, Document::class,[$first]);
    }
}
 