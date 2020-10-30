<?php
/**
 * @author Doryan
 * @author Yann
 * @author Aymeric
 * @author Simon
 * 21/10/20
 */

namespace App\Repository;
use App\Entity\Collaborator;
use App\Repository\Repository;
use App\Entity\Project;
use \PDO;



class CollaboratorRepository extends Repository
{
    public function __construct() 
    {
        parent::__construct("Collaborator");
    }

    /**
     * @method findByProject
     * Retourne tous les Collaborator qui ont une relation avec le Project passé en paramètre
     * @param Project $project
     * @param int $nb
     * @return array
     */
        public function findByProject(Project $project, $nb = 1): array
    {
        $idProject = $project->getId();
        $query = $this->pdo->prepare("SELECT collaborator.* FROM collaborator JOIN project_collaborator AS pc ON collaborator.id=pc.collaborator_id WHERE pc.project_id = ? ");
        $query->execute([$idProject]);
        return $query->fetchAll(PDO::FETCH_CLASS,Collaborator::class,[$nb]);
    }

    /** montre tous les collaborateurs et leurs contrats
     * @author Yann BOYER
     * @method showAllCollaborator
     */
    public function showAllCollaborator()
    {
        $newRow = "";
        $sqlRequest = "
        SELECT `collaborator`.`lastname`, `collaborator`.`firstname`, `contract`.`label`, `contract`.`type`, `contract`.`start_date`, `contract`.`end_date`, `contract`.`hiring_reason`, `contract`.`salary`
        FROM `collaborator` 
        LEFT JOIN `contract` ON `contract`.`collaborator_id` = `collaborator`.`id` 
        ";

        $sql = $this->pdo->prepare($sqlRequest);
        $sql->execute();
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);

        foreach ($result as $key => $value) {

            $newRow .=  
            "<tr>
                <td>". $value['lastname'] . "</td>
                <td>". $value['firstname'] . "</td>
                <td>". $value['label'] . "</td>
                <td>". $value['type'] . "</td>
                <td>". $value['start_date'] . "</td>
                <td>". $value['end_date'] . "</td>
                <td>". $value['hiring_reason'] . "</td>
                <td>". $value['salary'] . "</td>
            </tr>";
        }   
        return $newRow;
        
    }

}
