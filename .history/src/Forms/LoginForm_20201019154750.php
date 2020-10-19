<?php 
require_once '../src/Repository/Repository.php';

class LoginForm
{

    public function login(){
        $req = $this->pdo->prepare('SELECT login .* FROM login');


    }

}