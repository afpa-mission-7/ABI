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
        <a class="navbar-brand" href="/indexconnect">       
            <img src="assets/image/logo.png" width="auto" height="30" class="d-inline-block align-top" alt="ABI"/>
        </a>
    <div class="collapse navbar-collapse d-flex" id="navbarNavDropdown">
        <ul class="navbar-nav navbar-collapse">
            <li class="nav-item">
                <a class="nav-link" href="/indexconnect">Accueil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/gestionclients">Gestion clients</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/gestioncollaborateurs">Gestion collaborateurs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/gestionprojets">Gestion projets</a>
            </li>
            <li class="nav-item ml-auto">
                <a id="connect" class="nav-link d-inline" href="#"><i class="fas fa-sign-in-alt d-inline"></i> Déconnexion</a>
            </li>
        </ul>
    </div>
</nav>
<div id="login"
     class="align-self-end p-4 bg-white border-bottom-3 border-left-3 border-abi-grey fixed-top rounded-bottom-left-xxl d-none">
    <form action="/disconnect" method="post">
        <div class="form-group">
            <label for="submit">Êtes vous sur de vouloir vous déconnecter ?</label>
            <button type="submit" class="btn btn-duck font-weight-bold">Se déconnecter</button>
        </div>
    </form>
</div>

<main class="container">