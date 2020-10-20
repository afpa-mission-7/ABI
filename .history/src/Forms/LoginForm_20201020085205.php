<?php 
namespace App\Forms;

class LoginForm
{

    private int $id;
    private string $name;
    private string $password;
    private string $email;

    public function __construct($post){


    }

    public function login(){

        // Récupération de l'utilisateur et de son PASSWORD
        dd($this->email);
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
                echo 'Vous êtes connecté';
            }
            else {
                echo 'Mauvais ID ou MDP !';
            }
        }







    }

}