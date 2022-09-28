<?php
session_start();
require('inc/header.php');
require_once '../controllers/admin_missives_controller.php'
?>
<div class="row justify-content-center">
    <div class="back">
        <a class="btn btn-danger rounded mb-5" href="home.php">Retour à la page d'accueil</a>
        <?php if ($_SESSION['user']['u_role'] == 'admin' || $_SESSION['user']['u_role'] == 'editeur') { ?>
            <a href="archivesMissives.php" class="btn greenbtn mb-5">Archives <i class="bi bi-archive-fill text-white"></i></a>
        <?php } ?>
    </div>
    <div class="col-11 my-3">
        <div class="row justify-content-center">
            <table class="table table-striped rounded border">
                <thead>
                    <tr>
                        <th scope="col">Identité</th>
                        <th scope="col">Messages</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($missives as $missive) { ?>
                        <tr>
                            <td><?= $missive['c_lastname'] ?> <?= $missive['c_firstname'] ?></td>
                            <td><?= $missive['mi_missive'] ?></td>
                            <td>
                                <a href="details.php?obj=4&id=<?= $missive['mi_id'] ?>" class="btn greenbtn">Voir +</a> 
                                <?php if ($_SESSION['user']['u_role'] == 'admin' || $_SESSION['user']['u_role'] == 'editeur') { ?>
                                    <button type="button" class="btn btn-danger my-1" data-bs-toggle="modal" data-bs-target="#missive<?= $missive['mi_id'] ?>">
                                        Supprimer <i class="bi bi-trash3-fill"></i>
                                    </button>
                                <?php } ?>
                            </td>
                        </tr>
                        <div class="modal fade " id="missive<?= $missive['mi_id'] ?>" tabindex="-1" aria-labelledby="missive<?= $missive['mi_id'] ?>Label" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header greenbg text-white">
                                        <h5 class="modal-title" id="missive<?= $missive['mi_id'] ?>Label">Supprimer le message de <?= $missive['c_firstname'] ?> <?= $missive['c_lastname'] ?></h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Vous vous apretez à supprimer un message qui <?= $missive['mi_respoce'] = 1 ? 'n\'a pas eu de réponse' : 'a eu une réponse' ?>. Voulez vous continuer?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn greenbtn" data-bs-dismiss="modal">Annuler</button>
                                        <a href="soft_delete.php?obj=4&id=<?= $missive['mi_id'] ?>" class="btn btn-danger">Supprimer <i class="bi bi-trash3-fill"></i></a>
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
