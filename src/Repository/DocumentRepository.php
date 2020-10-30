<?php 
/**
 * @author Doryan
 * @author Aymeric
 * @author Simon
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

    /**
     * @method findByProject
     * Retourne un Document qui a une relation avec le Project passé en paramètre
     * @param Project $project
     * @param int $nb
     * @return array
     */
    public function findByProject( Project $project, $nb = 1): array
    {
        $idProject = $project->getId();
        $query = $this->pdo->prepare("SELECT document.* FROM document WHERE project_id = ?");
        $query->execute([$idProject]);
        return $query->fetchAll(PDO:: FETCH_CLASS, Document::class,[$nb]);
    }
}
 