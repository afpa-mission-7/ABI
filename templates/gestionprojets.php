<?php require_once 'skeleton/header.php' ?>

    <table id="listProject" class="table table-hover">
        <thead>
        <tr>
            <th colspan="2"><h1 class="text-center">Liste des projets</h1></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($projects as $project): ?>
            <tr id="<?= $project->getId() ?>">
                <td><?= $project->getName() ?></td>
                <td><?= $project->getDateEnd() ? $project->getDateEnd() : "En cours" ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

    <div class="modal fade" id="modalProject" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalCustomerTitle">Détails</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#" method="GET" id="form_customer">
                        <div class="form-row form-group">
                            <label for="newRaisonSociale" class="col-sm-3 col-form-label">Raison Sociale</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control editableModal" id="company_name" value="">
                            </div>
                        </div>
                        <div class="form-row form-group">
                            <div class="col-sm-4">
                                Secteur d'activité
                            </div>
                            <div class="form-check col-sm-2">
                                <input class="form-check-input" type="radio" name="newType" id="sector_activity"
                                       checked>
                                <label class="form-check-label" for="newPrivee">
                                    1
                                </label>
                            </div>
                            <div class="form-check col-sm-2">
                                <input class="form-check-input" type="radio" name="newType" id="sector_activity">
                                <label class="form-check-label" for="newPublique">
                                    2
                                </label>
                            </div>
                            <div class="form-check col-sm-2">
                                <input class="form-check-input" type="radio" name="newType" id="sector_activity">
                                <label class="form-check-label" for="newPublique">
                                    3
                                </label>
                            </div>
                            <div class="form-check col-sm-2">
                                <input class="form-check-input" type="radio" name="newType" id="sector_activity">
                                <label class="form-check-label" for="newPublique">
                                    4
                                </label>
                            </div>
                        </div>
                        <div class="form-row form-group">
                            <label for="newAdresse" class="col-sm-3 col-form-label">Adresse</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control editableModal" id="address">
                            </div>
                        </div>
                        <div class=row>
                            <div class="form-row form-group col-sm-6">
                                <label for="newCp" class="col-sm-3 col-form-label">CP</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control editableModal" id="zip">
                                </div>
                            </div>
                            <div class="form-row form-group col-sm-6">
                                <label for="newVille" class="col-sm-3 col-form-label">Ville</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control editableModal" id="city">
                                </div>
                            </div>
                        </div>
                        <div class="form-row form-group">
                            <label for="newTelephone" class="col-sm-3 col-form-label">Téléphone</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control editableModal" id="phone">
                            </div>
                        </div>
                        <div class="form-row form-group">
                            <label for="newEmail" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control editableModal" id="email"
                                       placeholder="********">
                            </div>
                        </div>
                        <div class="form-row form-group">
                            <label for="newCa" class="col-sm-3 col-form-label">CA</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control editableModal" id="revenue" placeholder="€">
                            </div>
                        </div>
                        <div class="form-row form-group">
                            <label for="newEffectif" class="col-sm-3 col-form-label">Effectif</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control editableModal" id="staff"
                                       placeholder="10">
                            </div>
                        </div>
                        <div class="form-row form-group">
                            <label for="newComment" class="col-sm-3 col-form-label">Commentaire</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="comment" placeholder="Commentaire"
                                       required></input>
                            </div>
                        </div>
                        <input type="hidden" name="id" id="id">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                        <button type="submit" id="valid_customer" class="btn btn-primary">Valider</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php require_once 'skeleton/footer.php' ?>