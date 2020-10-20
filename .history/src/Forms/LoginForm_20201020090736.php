<?php 
namespace App\Forms;
use \PDO;
use App\Config\DbConfig;




class LoginForm
{

    private int $id;
    private string $name;
    private string $password;
    private string $email;

    public function __construct($post){
        $this->email=$post['email'];
        $this->password=$post['password'];


    }

    public function login(){
        $pdo = new PDO(DbConfig::DSN, DbConfig::USERNAME, DbConfig::PASSWORD);

        // Récupération de l'utilisateur et de son PASSWORD
        $req = $pdo->prepare('SELECT login .* FROM login WHERE email = :email');
        $req->execute([':email'=> $this->email]);
        $resultat = $req->fetch();
        dd($resultat);

        // Comparaison du pass envoyé via le formulaire avec la BDD
       

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