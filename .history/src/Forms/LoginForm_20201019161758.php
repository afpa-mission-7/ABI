<?php 
require_once '../src/Repository/Repository.php';

class LoginForm
{

    private int $id;
    private string $name;
    private string $password;
    private string $email;

    public function login(){
        $req = $this->pdo->prepare('SELECT login .* FROM login WHERE email = :email');
        $req->execute(array('email'=> $email));




    }

}