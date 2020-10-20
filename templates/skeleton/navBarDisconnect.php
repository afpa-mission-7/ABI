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
                <a id="connect" class="nav-link d-inline" href=""><i class="fas fa-sign-in-alt d-inline"></i> Connexion</a>
            </li>
        </ul>
    </div>
</nav>
<div id="login"
     class="align-self-end p-4 bg-white border-bottom-3 border-left-3 border-abi-grey fixed-top rounded-bottom-left-xxl d-none">
    <form id="loginForm" action="" method="post">
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
        <span id="connectFailed" class="text-danger" style="display: none">Identifiants incorrects</span>
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-duck font-weight-bold">Se connecter</button>
        </div>
        <div>
            <span>Pas encore de compte? </span><a href="../signup.php">Inscrivez-vous</a>
        </div>
    </form>
</div>