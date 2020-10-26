<?php

use App\Repository\CollaboratorRepository;

require_once 'skeleton/header.php' ?>
    <div>
        <a href="newCollaborator.php">
            <input type="button" value="ajouter un collaborateur et son contrat" class="btn btn-duck">
        </a>
    </div>

    <div class="row">
        <input class="form-control mb-2" id="tableSearch" type="text" placeholder="Recherche">
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
            $test = new CollaboratorRepository;
            $test->showAllCollaborator(); 
            ?>
        </tbody>
    </table>

<?php require_once 'skeleton/footer.php' ?>

