<?php require_once 'skeleton/header.php' ?>

<div class="row">
    <input class="form-control mb-2" id="tableSearch" type="text" placeholder="Recherche">
</div>
<div class="row mb-4">
    <div class="col d-flex justify-content-center">
        Trier par :
        <div class="form-check form-check-inline ml-5">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
            <label class="form-check-label" for="inlineRadio1">Raison sociale</label>
        </div>
        <div class="form-check form-check-inline ml-5">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
            <label class="form-check-label" for="inlineRadio2">Département</label>
        </div>
    </div>
</div>
<table class="table table-hover table-bordered" id="tableCustomer">
    <thead>
        <tr>
            <th scope="col">Raison Sociale</th>
            <th scope="col">Code postal</th>
            <th scope="col">Activité</th>
            <th scope="col">Contacter</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($customers as $customer) : ?>
            <tr data-toggle="modal" data-target="#modalCustomer">
                <td scope="row"><?= $customer->getCompanyName() ?></th>
                <td><?= $customer->getZip() ?></td>
                <td><?= $customer->getCity() ?></td>
                <td>1</td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<!-- Modal -->
<div class="modal fade" id="modalCustomer" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCustomerTitle">Détails</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-hover table-bordered" id="tableCustomer">
                    <thead>
                        <tr>
                            <th scope="col">Raison Sociale</th>
                            <th scope="col">Code postal</th>
                            <th scope="col">Activité</th>
                            <th scope="col">Contacter</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($customers as $customer) : ?>
                            <tr data-toggle="modal" data-target="#modalCustomer">
                                <td scope="row"><?= $customer->getCompanyName() ?></th>
                                <td><?= $customer->getZip() ?></td>
                                <td><?= $customer->getCity() ?></td>
                                <td>1</td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<?php require_once 'skeleton/footer.php' ?>