<?php require_once 'skeleton/header.php' ?>

    <table id="listProject" class="table table-hover">
        <thead>
        <tr>
            <th colspan="2"><h2 class="text-center">Liste des projets</h2></th>
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
                    <form action="#" method="POST" id="form_modal">
                        <div class="form-row form-group">
                            <label for="name" class="col-sm-3 col-form-label">Nom</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control editableModal" id="name" value="" disabled>
                            </div>
                        </div>
                        <div class="form-row form-group">
                            <label for="expected_date_start" class="col-sm col-form-label">Date de début prévue : </label>
                            <div class="col-sm">
                                <input type="date" class="form-control editableModal" id="expected_date_start" disabled>
                            </div>
                        </div>
                        <div class="form-row form-group">
                            <label for="date_start" class="col-sm col-form-label">Date de début réelle : </label>
                            <div class="col-sm">
                                <input type="date" class="form-control editableModal" id="date_start" disabled>
                            </div>
                        </div>
                        <div class="form-row form-group">
                            <label for="expected_date_end" class="col-sm col-form-label">Date de fin prévue : </label>
                            <div class="col-sm">
                                <input type="date" class="form-control editableModal" id="expected_date_end" disabled>
                            </div>
                        </div>
                        <div class="form-row form-group">
                            <label for="date_end" class="col-sm col-form-label">Date de fin réelle : </label>
                            <div class="col-sm">
                                <input type="date" class="form-control editableModal" id="date_end" disabled>
                            </div>
                        </div>
                        <hr>
                        <h5 class="text-center">Clients</h5>
                        <ul id="customers">
                        </ul>
                        <input type="hidden" name="id" id="id">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                        <button type="button" id="edit" class="btn btn-primary">Modifier</button>
                        <button type="submit" id="valid" class="btn btn-primary">Valider</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php require_once 'skeleton/footer.php' ?>