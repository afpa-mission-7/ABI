<?php

namespace App\Forms;

use \PDO;
use App\Config\DbConfig;
use App\Repository\FonctionRepository;


class LoginForm extends Form
{
    protected string $password;
    protected string $username;

    public function __construct(array $post)
    {
        parent::__construct($post);
    }


    public function login(): bool
    {
        $pdo = new PDO(DbConfig::DSN, DbConfig::USERNAME, DbConfig::PASSWORD);
        $fonctionRepository = new FonctionRepository();
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
            $_SESSION['fonction'] = $fonctionRepository->findByCollaborator($collaborator)->getLabel();
            return true;
        } else {
            return false;
        }
    }
}