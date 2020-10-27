<?php

namespace App\Forms;

use \PDO;
use App\Config\DbConfig;

class AddContractForm  
{
    private $start_date;
    private $end_date;
    private string $label;
    private string $type;
    private int $salary;
    private string $hiringReason;

    public function __construct($post)
    {
        $this->start_date = $post['start_date'];
        $this->end_date = $post['end_date'];
        $this->label = $post['label'];
        $this->type = $post['type'];
        $this->salary = $post['salary'];
        $this->hiringReason = $post['hiringReason'];
    }


     /** ajoute un contrat
     * @author Yann BOYER
     * @method newContract
     */
    public function newContract(){

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
            '$this->collaboratorId', // mais ou est ce que je vais te trouver
            '$this->start_date',
            '$this->end_date',
            '$this->label',
            '$this->type',
            '$this->salary',
            '$this->hiringReason')
        ";

        $sql = $this->pdo->prepare($sqlRequest);
        $sql->execute();

    }

}
