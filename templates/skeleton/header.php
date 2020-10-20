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
<nav class="navbar navbar-expand-lg navbar-light bg-abi-light-brown font-weight-bold border-bottom-3 border-abi-grey position-fixed w-100">
    <a class=" navbar-brand
" href="">ABI</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse d-flex" id="navbarNavDropdown">
        <ul class="navbar-nav navbar-collapse">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown link
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item ml-auto">
                <?php
                if (empty($_SESSION)) {
                    echo '<a id="connect" class="nav-link d-inline" href="connect"><i class="fas fa-sign-in-alt d-inline"></i> Connexion</a>';
                }else{
                    echo '<a id="disConnect" class="nav-link d-inline" href="disconnect"><i class="fas fa-sign-in-alt d-inline"></i> Déconnexion</a>';
                }
                ?>
            </li>
        </ul>
    </div>
</nav>
<div id="login"
     class="align-self-end p-4 bg-white border-bottom-3 border-left-3 border-abi-grey position-fixed rounded-bottom-left-xxl d-none">
    <form action="" method="post">
        <div class="form-group">
            <label for="email">Adresse mail</label>
            <input type="email" class="form-control" id="email" name="email">
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

<div class="container">