<?php
session_start();
require('inc/header.php');
require_once '../controllers/form_controller.php';
require_once '../controllers/admin_devis_controller.php';
?>
<div class="row justify-content-center">
    <div class="back">
        <a class="btn btn-danger rounded mb-5" href="home.php">Retour à la page d'accueil <i class="bi bi-house-fill"></i></a>
        <?php if ($_SESSION['user']['u_role'] == 'admin' || $_SESSION['user']['u_role'] == 'editeur') { ?>
            <a href="addJobs.php" class="btn greenbtn mb-5">Ajouter des tâches</a>
            <a href="archivesEstimations.php" class="btn greenbtn mb-5">Archives <i class="bi bi-archive-fill text-white"></i></a>
        <?php } ?>
    </div>
    <div class="col-11 my-3">
        <div class="row justify-content-center">
            <table class="table table-striped rounded border">
                <thead>
                    <tr>
                        <th scope="col">Indentité</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($devis as $devi) { ?>
                        <tr>
                            <td><?= $devi['c_firstname'] ?> <?= $devi['c_lastname'] ?></td>
                            <td><a href="details.php?obj=5&id=<?= $devi['e_id'] ?>" class="btn greenbtn">Voir +</a>
                                <?php if ($_SESSION['user']['u_role'] == 'admin' || $_SESSION['user']['u_role'] == 'editeur') { ?>
                                    <?= $devi['e_responce'] == 0 ? '<a href="" class="btn greenbtn">Marquer comme repondus <i class="bi bi-envelope-fill text-white"></i>' : '<a href="" class="btn edithbtn">Marquer comme non repondus <i class="bi bi-envelope-paper-fill text-white"></i>' ?></a>
                                    <button type="button" class="btn btn-danger my-1" data-bs-toggle="modal" data-bs-target="#devi<?= $devi['e_id'] ?>">
                                        Supprimer <i class="bi bi-trash3-fill"></i>
                                    </button>
                                <?php } ?>
                            </td>
                        </tr>
                        <div class="modal fade " id="devi<?= $devi['e_id'] ?>" tabindex="-1" aria-labelledby="devi<?= $devi['e_id'] ?>Label" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header greenbg text-white">
                                        <h5 class="modal-title" id="devi<?= $devi['e_id'] ?>Label">Supprimer le devis de <?= $devi['c_firstname'] ?> <?= $devi['c_lastname'] ?></h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Vous vous apretez à supprimer un devi. Voulez vous continuer?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn greenbtn" data-bs-dismiss="modal">Annuler</button>
                                        <a href="soft_delete.php?obj=5&id=<?= $devi['e_id'] ?>" class="btn btn-danger">Supprimer <i class="bi bi-trash3-fill"></i></a>
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
