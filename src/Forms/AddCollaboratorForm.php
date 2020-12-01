<?php

namespace App\Forms;

use \PDO;
use App\Config\DbConfig;

class AddCollaboratorForm  
{
    private string $lastname;
    private string $firstname;
    private int $phone;
    private string $username;
    private string $email;
    private string $passwordColl;
    private string $address;
    private string $status;
    private string $qualification;


    public function __construct()
    {
        /*
        $this->lastname = $post['lastname'];
        $this->firstname = $post['firstname'];
        $this->phone = $post['phone'];
        $this->username = $post['username'];
        $this->email = $post['email'];
        $this->passwordColl = $post['passwordColl'];
        $this->address = $post['address'];
        $this->status = $post['status'];
        $this->qualification = $post['qualification'];
        */
    }

    
    /** ajoute un collaborateur
     * @author Yann BOYER
     * @method nouveaucollaborateur
     */
    public function addCollaborator(string $username, string $passwordColl, string $firstname, string $lastname, int $phone, string $email, string $status, string $qualification, $photo, string $address)
    {
        $pdo = new PDO(DbConfig::DSN, DbConfig::USERNAME, DbConfig::PASSWORD);

        $this->username = $this->firstname . substr($this->lastname, 0, 2);
        $this->email = $this->firstname . "." . $this->lastname . "@abi.fr";
        $this->passwordColl = $this->firstname;
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
            VALUES ('$username','$passwordColl', '$firstname', '$lastname', '$phone', '$email', '$status', '$qualification', '$photo', '$address')       
        ";
        $sql = $this->pdo->prepare($sqlRequest);
        $sql->execute();
    }

}
