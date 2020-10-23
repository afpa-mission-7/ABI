<?php require_once 'skeleton/header.php' ?>

    <h1 class="my-5 text-center">Liste des projets</h1>

    <table class="table table-hover">
    <thead>
    <tr>
        <th scope="col">Nom du projet</th>
        <th scope="col">Date de début prévu</th>
        <th scope="col">Date de début réelle</th>
        <th scope="col">Date de fin prévu</th>
        <th scope="col">Date de fin réelle</th>
        <th scope="col">Clients</th>
        <th scope="col">Documents</th>
    </tr>
    </thead>
    <tbody>
<?php foreach ($projects as $project): ?>
    <tr>
    <td><?= $project->getName() ?></td>
    <td><?= $project->getExpectedDateStart() ?></td>
    <td><?= $project->getDateStart() ?></td>
    <td><?= $project->getExpectedDateEnd() ?></td>
    <td><?= $project->getDateEnd() ?></td>
    <td>
    <?php $customers = $customerRepository->findByProject($project);
    foreach ($customers as $customer){
        echo $customer->getCompanyName();
    }
    ?>
        </td>
        <td><?= $project->getDateEnd() ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
    </table>

    <?php require_once 'skeleton/footer.php' ?>