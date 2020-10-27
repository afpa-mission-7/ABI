<?php require_once 'skeleton/header.php' ?>


<div class="form-group">
    <a href="gestioncollaborateurs">
    <input type="button" value="Retour vers l'espace de gestion RH" class="btn btn-block btn-duck">
</a>
</div>


REMPLIR MENU DEROULANT

<form action="" method="post" class="" enctype="multipart/form-data">
    <div class="form-row">
        <div class="col form-group">
            <label for="persons">Collaborateur : </label>
            <select name="persons" id="persons" class="form-control">
                <option value="" selected>Collaborateurs</option>
                <option value="non cadre">Non cadre</option>
            </select>
        </div>
    </div>


    <div class="form-row">
        <div class="col form-group">
            <label for="lastname">Nom : </label>
            <input type="text" name="lastname" id="lastname" class="form-control">
        </div>
        <div class="col form-group">
            <label for="firstname">Prénom : </label>
            <input type="text" name="firstname" id="firstname" class="form-control">
        </div>
    </div>

    <div class="form-row">
        <div class="col form-group">
            <label for="date_start">Début du contrat : </label>
            <input type="date" name="start_date" id="date_start" class="form-control">
        </div>
        <div class="col form-group">
            <label for="end_date">Fin du contrat : </label>
            <input type="date" name="end_date" id="end_date" class="form-control">
        </div>
    </div>
    <div class="form-row">
        <div class="col form-group">
            <label for="label">Contrat initial / avenant :</label>
            <select name="label" id="label" class="form-control">
                <option value="" >Selectionnez</option>
                <option value="initial">Initial</option>
                <option value="Avenant">Avenant</option>
            </select>
        </div>    
        <div class="col form-group" >
            <label for="type">Type de contrat :</label>
            <select name="type" id="type" class="form-control">
                <option value="" >Selectionnez</option>
                <option value="cdi">CDI</option>
                <option value="cdd">CDD</option>
                <option value="interim">Interim</option>
                <option value="stage">Stage</option>
            </select>
        </div>
    </div>

    <div class="form-row">
        <div class="col form-group">
            <label for="salary">Salaire : </label>
            <input type="number" id="salary" name="salary" min = 0 step = 100 class="form-control">
        </div>
        <div class="col form-group">
            <label for="hiring_reason">Motif du contrat :</label>
            <input type="text" id="hiring_reason" name="hiring_reason" size="80" class="form-control">
        </div>
    </div>
        
    <div class="form-group">
        <input type="submit" value="Valider" class="btn btn-block btn-duck" >
    </div>
</form>



<?php require_once 'skeleton/footer.php' ?>
