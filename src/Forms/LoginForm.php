<?php 
namespace App\Forms;
use \PDO;
use App\Config\DbConfig;




class LoginForm
{

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

        // Comparaison du pass envoyé via le formulaire avec la BDD
       if($resultat['password'] === $this->password ){
            $_SESSION['name'] = $resultat['name'];
       } else {
           dd('Raté');
       }
    }
}