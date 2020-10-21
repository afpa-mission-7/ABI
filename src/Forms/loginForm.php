<?php

namespace App\Forms;

use \PDO;
use App\Config\DbConfig;


class LoginForm
{

    private string $password;
    private string $username;

    public function __construct($post)
    {
        $this->username = $post['username'];
        $this->password = $post['password'];
    }


    public function login(): bool
    {
        $pdo = new PDO(DbConfig::DSN, DbConfig::USERNAME, DbConfig::PASSWORD);

        // Récupération de l'utilisateur et de son PASSWORD
        $query = $pdo->prepare('SELECT * FROM collaborator WHERE username = ?');
        $query->execute([$this->username]);
        $query->setFetchMode(PDO::FETCH_CLASS, "App\Entity\Collaborator");
        $collaborator = $query->fetch();
        if (!$collaborator) return false;

        // Comparaison du pass envoyé via le formulaire avec la BDD
        if ($collaborator->getPassword() === $this->password) {
            $_SESSION['id'] = $collaborator->getId();
            $_SESSION['firstname'] = $collaborator->getFirstname();
            $_SESSION['lastname'] = $collaborator->getLastname();
            return true;
        } else {
            return false;
        }
    }
}