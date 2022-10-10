<?php
session_start();
require('inc/header.php');
require_once '../controllers/devis_admin_controller.php';
?>
<div class="row justify-content-center">
    <div class="back">
        <a class="btn btn-danger rounded mb-5" href="home.php">Retour à la page d'accueil <i class="bi bi-house-fill"></i></a>
        <a class="btn btn-danger rounded mb-5" href="devis.php">Retour à la liste des devis <i class="bi bi-house-fill"></i></a>
    </div>
    <div class="col-11 my-3">
        <div class="row justify-content-center">
            <table class="table table-striped rounded border">
                <thead>
                    <tr>
                        <th scope="col">Identité</th>
                        <th scope="col">Localisation</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($deleteDevis as $devi) { ?>
                        <tr>
                            <td><?= $devi['c_firstname'] ?> <?= $devi['c_lastname'] ?></td>
                            <td><?= $devi['e_zip'] ?> <?= $devi['e_city'] ?></td>
                            <td>
                                <button type="button" class="btn greenbtn" data-bs-toggle="modal" data-bs-target="#devi<?= $devi['e_id'] ?>Update">
                                    Désarchiver
                                </button>
                                <?php if ($_SESSION['user']['u_role'] == 'admin') { ?>
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#devi<?= $devi['e_id'] ?>Delete">
                                        Supprimer <i class="bi bi-trash3-fill"></i>
                                    </button>
                                <?php } ?>
                            </td>
                        </tr>
                        <div class="modal fade" id="devi<?= $devi['e_id'] ?>Update" tabindex="-1" aria-labelledby="devi<?= $devi['e_id'] ?>UpdateLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header greenbg text-white">
                                        <h5 class="modal-title" id="devi<?= $devi['e_id'] ?>UpdateLabel">Désarchiver le devis de <?= $devi['c_firstname'] ?> <?= $devi['c_lastname'] ?></h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Vous vous apprêtez à désarchiver un devis qui <?= $devi['e_respoce'] = 1 ? 'n\'a pas eu de réponse' : 'a eu une réponse' ?>. Voulez-vous continuer ?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                        <a href="unarchive.php?obj=5&id=<?= $devi['e_id'] ?>" class="btn greenbtn">Désarchiver</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="devi<?= $devi['e_id'] ?>Delete" tabindex="-1" aria-labelledby="devi<?= $devi['e_id'] ?>DeleteLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header greenbg text-white">
                                        <h5 class="modal-title" id="devi<?= $devi['e_id'] ?>DeleteLabel">Supprimer le devis de <?= $devi['c_firstname'] ?> <?= $devi['c_lastname'] ?></h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Vous vous apprêtez à supprimer définitivement un rendez-vous qui <?= $devi['e_respoce'] = 1 ? 'n\'a pas eu de réponse' : 'a eu une réponse' ?>. Voulez-vous continuer ?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn greenbtn" data-bs-dismiss="modal">Annuler</button>
                                        <a href="delete.php?obj=5&id=<?= $devi['e_id'] ?>" class="btn btn-danger">Supprimer <i class="bi bi-trash3-fill"></i></a>
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
