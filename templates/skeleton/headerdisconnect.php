<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Page d'accueil</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main.css">

    <script src="https://kit.fontawesome.com/c2ce3de10b.js" crossorigin="anonymous" defer></script>
</head>

<body class="d-flex flex-column justify-content-between">
<nav class="navbar navbar-expand-lg navbar-light bg-abi-light-brown font-weight-bold border-bottom-3 border-abi-grey fixed-top w-100">
        <a class="navbar-brand" href="/">       
            <img src="assets/image/logo.png" width="auto" height="30" class="d-inline-block align-top" alt="ABI"/>
        </a>
    <div class="collapse navbar-collapse d-flex" id="navbarNavDropdown">
        <ul class="navbar-nav navbar-collapse">
            <li class="nav-item">
                <a class="nav-link" href="/">Accueil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/apropos">A propos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/contact">Contact</a>
            </li>
            <li class="nav-item ml-auto">
               <?php 
               if(empty($_SESSION))
               {
                   echo '<a id="connect" class="nav-link d-inline" href="#"><i class="fas fa-sign-in-alt d-inline"></i> Connexion</a>' ;
            } else {
                echo '<a id="disconnect" class="nav-link d-inline" href="/disconnect"><i class="fas fa-sign-in-alt d-inline"></i> Deconnexion </a>' ;
            }
            ?>
            </li>
        </ul>
    </div>
</nav>
<div id="login"
     class="align-self-end p-4 bg-white border-bottom-3 border-left-3 border-abi-grey fixed-top rounded-bottom-left-xxl d-none">
    <form action="/login" method="post">
        <div class="form-group">
            <label for="username">Nom d'utilisateur</label>
            <input type="text" class="form-control" id="username" name="username">
        </div>
        <div class="form-group">
            <label for="password">Mot de passe</label>
            <input type="text" class="form-control" id="password" name="password">
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="remember">
            <label for="remember" class="form-check-label">Rester connecter</label>
        </div>
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-duck font-weight-bold">Se connecter</button>
        </div>
        <div>
            <span>Pas encore de compte? </span><a href="../signup.php">Inscrivez-vous</a>
        </div>
    </form>
</div>

<main class="container">