<?php
session_start();
require_once '../controllers/archives_controller.php';
require('inc/header.php');
?>
<div class="row justify-content-center">
    <div class="back">
        <a class="btn btn-danger rounded mb-5" href="clients.php">Retour à la liste des clients</a>
    </div>
    <div class="col-11 my-3">
        <div class="row justify-content-center">
            <table class="table table-striped rounded border">
                <thead>
                    <tr>
                        <th scope="col">Identité</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($clients as $client) { ?>
                        <tr>
                            <td><?= $client['c_lastname'] ?> <?= $client['c_firstname'] ?></td>
                            <td>
                                <button type="button" class="btn greenbtn" data-bs-toggle="modal" data-bs-target="#client<?= $client['c_id'] ?>Update">
                                    Désarchiver
                                </button>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#client<?= $client['c_id'] ?>Delete">
                                    Supprimer <i class="bi bi-trash3-fill"></i>
                                </button>
                            </td>
                        </tr>
                        <div class="modal fade" id="client<?= $client['c_id'] ?>Update" tabindex="-1" aria-labelledby="client<?= $client['c_id'] ?>UpdateLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header greenbg text-white">
                                        <h5 class="modal-title" id="client<?= $client['c_id'] ?>UpdateLabel">Désarchiver <?= $client['c_firstname'] ?> <?= $client['c_lastname'] ?></h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Vous vous apprêtez à désarchiver un client. Voulez-vous continuer ?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                        <a href="unarchive.php?obj=1&id=<?= $client['c_id'] ?>" class="btn greenbtn">Désarchiver</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="client<?= $client['c_id'] ?>Delete" tabindex="-1" aria-labelledby="client<?= $client['c_id'] ?>DeleteLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header greenbg text-white">
                                        <h5 class="modal-title" id="client<?= $client['c_id'] ?>DeleteLabel">Supprimer <?= $client['c_firstname'] ?> <?= $client['c_lastname'] ?></h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Vous vous apprêtez à supprimer définitivement un client. Voulez-vous continuer ?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn greenbtn" data-bs-dismiss="modal">Annuler</button>
                                        <a href="delete.php?obj=1&id=<?= $client['c_id'] ?>" class="btn btn-danger">Supprimer <i class="bi bi-trash3-fill"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php
require('inc/footer.php');

require('inc/end.php');
