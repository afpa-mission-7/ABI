<nav class="navbar navbar-expand-lg navbar-light bg-abi-light-brown font-weight-bold border-bottom-3 border-abi-grey fixed-top w-100">
    <a class="navbar-brand" href="/">
        <img src="assets/image/logo.png" width="auto" height="30" class="d-inline-block align-top" alt="ABI"/>
    </a>
    <div class="collapse navbar-collapse d-flex">
        <ul class="navbar-nav navbar-collapse">
            <li class="nav-item">
                <a class="nav-link" href="/">Accueil</a>
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
                <div class="dropdown">
                    <a class="btn btn-abi-light-brown dropdown-toggle" type="button" id="account" data-toggle="dropdown">
                        <i class="fas fa-user"></i> <?= $_SESSION['firstname'] . ' ' . $_SESSION['lastname'] ?>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="/profile">Profil</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/disconnect">Déconnexion</a>
                    </div>
                </div>
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