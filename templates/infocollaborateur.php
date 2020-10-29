<?php require_once 'skeleton/header.php' ?>


<div class="form-group">
    <a href="gestioncollaborateurs">
    <input type="button" value="Retour vers l'espace de gestion RH" class="btn btn-block btn-duck">
</a>
</div>
<section class="d-flex">
        <section class="mx-3 my-3 col-3">
            <div class="card bg-abi-light-brown" style="width: 100%;">
                <img class="card-img-top" src="" alt="Card image cap">
                <div class="card-body">
                    <div class="form-row">
                        <div class="col form-group">
                            <select name="persons" id="persons" class="form-control">
                                <option value="" selected>Collaborateurs</option>
                                <?php foreach ($listOfCollaborators as $collaborator) : ?>
                                <option value="<?= $collaborator->getId() ?>"><?= $collaborator->getLastname() . " " . $collaborator->getFirstname() ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <input type="hidden" name="collaborator_id" id="collaborator_id" value="">
                    </div>

                    <p class="card-text">address</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">username : <span id="username"></span></li>
                    <li class="list-group-item">phone : <span id="phone"></span></li>
                    <li class="list-group-item">email : <span id="email"></span></li>
                    <li class="list-group-item">status : <span id="status"></span></li>
                    <li class="list-group-item">qualification : <span id="qualification"></span></li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>
        </section>
</section>


<?php require_once 'skeleton/footer.php' ?>
