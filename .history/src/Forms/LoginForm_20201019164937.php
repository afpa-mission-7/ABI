<?php 
require_once '../src/Repository/Repository.php';

class LoginForm
{

    private int $id;
    private string $name;
    private string $password;
    private string $email;

    public function login(){

        // Récupération de l'utilisateur et de son PASSWORD
        $req = $this->pdo->prepare('SELECT login .* FROM login WHERE email = :email');
        $req->execute(array('email'=> $this->email));
        $resultat = $req->fetch();

        // Comparaison du pass envoyé via le formulaire avec la BDD
        $isPasswordCorrect = password_verify($_POST['password'], $resultat['password']);

        if (!$resultat)
        {
            echo 'Mauvais identifiant ou mot de passe !';
        }

        else
        {
            if ($isPasswordCorrect) {
                session_start();
                $_SESSION['password'] = $resultat['password'];
                $_SESSION['email'] = $this->email;
            }
        }







    }

}