<?php require_once 'skeleton/header.php' ?>


<div class="form-row">
    <div class="col form-group">
        <a href="nouveaucollaborateur">
            <input type="button" value="Ajouter un nouveau collaborateur et son contrat" class="btn btn-block btn-duck">
        </a>
    </div>
    <div class="col form-group">
        <a href="nouveaucontrat">
            <input type="button" value="Ajouter un nouveau contrat à un collaborateur" class="btn btn-block btn-duck">
        </a>
    </div>
</div>


    <div class="form-group">
        <input class="form-control mb-2" id="tableSearch" type="text" placeholder="Recherche un collaborateur">
    </div>

    <table class="table table-hover table-bordered">
        <thead>
            <tr>
                <th colspan="8">collaborateurs et contrats</th>
            </tr>
            <tr>            
                <th>Nom</th>
                <th>Prénom</th>
                <th>libellé</th>
                <th>type</th>
                <th>date de début</th>
                <th>date de fin</th>
                <th>motif</th>
                <th>salaire</th>
            </tr>
        </thead>
        <tbody id="myTable">
            <?php 
            echo $collaborators;
            ?>
        </tbody>
    </table>


<?php require_once 'skeleton/footer.php' ?>

