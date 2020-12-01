<?php 

namespace App\Forms;

use \PDO;
use App\Config\DbConfig;
use App\Entity\Contract;

class AddContractForm extends Contract
{
    public function __construct($post)
    {
        // dd($post);
        $this->collaborator_id = $post['collaborator_id'];
        $this->start_date = $post['start_date'];
        $this->end_date = $post['end_date'];
        $this->label = $post['label'];
        $this->type = $post['type'];
        $this->salary = $post['salary'];
        $this->hiringReason = $post['hiring_reason'];
    }


     /** ajoute un contrat
     * @author Yann BOYER
     * @method newContract
     */
    public function newContract()      // C'EST PAR ICI AUSSI QUE JE BOSSE DUR
    {
        $pdo = new PDO(DbConfig::DSN, DbConfig::USERNAME, DbConfig::PASSWORD);

        $sqlRequest = " 
        INSERT INTO contract(
            collaborator_id, 
            start_date, 
            end_date, 
            label, 
            type, 
            salary, 
            hiring_reason) 
        VALUES (
            '$this->collaborator_id',
            '$this->start_date',
            '$this->end_date',
            '$this->label',
            '$this->type',
            '$this->salary',
            '$this->hiringReason')
        ";

        $sql = $pdo->prepare($sqlRequest);
        $sql->execute();
    }

}
