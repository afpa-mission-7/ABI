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
        echo $newRow;
        
    }

    /** ajoute un collaborateur
     * @author Yann BOYER
     * @method newCollaborator
     */
    public function newCollaborator(string $username, string $password, string $firstname, string $lastname, int $phone, string $email, string $status, string $qualification, $photo, string $address)
    {
        $sqlRequest = "
        INSERT INTO collaborator(
            `username`, 
            `password`, 
            `firstname`, 
            `lastname`, 
            `phone`, 
            `email`, 
            `status`, 
            `qualification`, 
            `photo`, 
            `address`) 
            VALUES ('$username','$password', '$firstname', '$lastname', '$phone', '$email', '$status', '$qualification', '$photo', '$address')       
        ";
        $sql = $this->pdo->prepare($sqlRequest);
        $sql->execute();
    }

}
