<?php require_once 'skeleton/header.php' ?>


<div class="form-group">
    <a href="gestioncollaborateurs">
    <input type="button" value="Vers collaborateurs et contrats" class="btn btn-block btn-duck">
</a>
</div>


<form action="" method="post" class="" enctype="multipart/form-data">

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
            <label for="phone">Téléphone : </label>
            <input type="tel" name="phone" id="phone" placeholder="0123456789" pattern="[0]{1}[0-9]{9}"class="form-control" >
        </div>
        <div class="col form-group">
            <label for="email">Email: </label>
            <input type="email" name="email" id="email" desabled class="form-control">
        </div>
    </div>

    <div class="form-row">
        <div class="col form-group">
            <label for="status">Statut : </label>
            <select name="status" id="status" class="form-control">
                <option value="" selected>Statut</option>
                <option value="cadre">Cadre</option>
                <option value="non cadre">Non cadre</option>
            </select>
        </div>
        <div class="col form-group">
            <label for="qualification">Qualification : </label>
            <select name="qualification" id="qualification" class="form-control">
                <option value="" selected>Qualification principale</option>
                <option value="agent commercial">Agent commercial</option>
                <option value="chef de service">Chef de service</option>
                <option value="designer">Designer</option>
                <option value="developpeur bdd">Développeur BDD</option>
                <option value="developpeur web">Développeur Web</option>
                <option value="secretaire bilingue">Secrétaire bilingue</option>
            </select>
        </div>
    </div>
    
    <div class="form-row">
        <div class="col form-group">
            <label for="photo">Photo : </label>
            <input type="file" id="photo" name="photo" accept="image/jpeg" class="bg-abi-cream" >
        </div>
        <div class="col form-group">
            <label for="address">Adresse</label>
            <textarea name="address" id="address" cols="30" rows="5" class="form-control"></textarea>
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
