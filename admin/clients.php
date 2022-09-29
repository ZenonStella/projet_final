<?php
session_start();
require_once '../controllers/admin_clients_controller.php';
require('inc/header.php');
?>
<div class="row justify-content-center">
    <div class="back">
        <a class="btn btn-danger rounded mb-5" href="home.php">Retour à la page d'accueil <i class="bi bi-house-fill"></i></a>
        <?php if ($_SESSION['user']['u_role'] == 'admin' || $_SESSION['user']['u_role'] == 'editeur') { ?>
            <a href="archivesClients.php" class="btn greenbtn mb-5">Archives <i class="bi bi-archive-fill text-white"></i></a>
        <?php } ?>
    </div>
    <div class="col-11 my-3">
        <div class="row justify-content-center">
            <table class="table table-striped rounded border">
                <thead class="green">
                    <tr>
                        <th scope="col">Identité</th>
                        <th scope="col">Adresse mail</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($clients as $client) { ?>
                        <tr>
                            <td><?= $client['c_firstname'] ?> <?= $client['c_lastname'] ?></td>
                            <td><?= $client['c_mail'] ?></td>
                            <td>
                                <a href="details.php?obj=1&id=<?= $client['c_id'] ?>" class="btn greenbtn">Voir +</a>
                                <?php if ($_SESSION['user']['u_role'] == 'admin' || $_SESSION['user']['u_role'] == 'editeur') { ?>
                                    <button type="button" class="btn btn-danger my-1" data-bs-toggle="modal" data-bs-target="#client<?= $client['c_id'] ?>">
                                        Supprimer <i class="bi bi-trash3-fill"></i>
                                    </button>
                                <?php } ?>
                            </td>
                        </tr>
                        <div class="modal fade " id="client<?= $client['c_id'] ?>" tabindex="-1" aria-labelledby="client<?= $client['c_id'] ?>Label" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header greenbg text-white">
                                        <h5 class="modal-title" id="client<?= $client['c_id'] ?>Label">Supprimer <?= $client['c_firstname'] ?> <?= $client['c_lastname'] ?></h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Vous vous apretez à supprimer un client. Voulez vous continuer?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn greenbtn" data-bs-dismiss="modal">Annuler</button>
                                        <a href="soft_delete.php?obj=1&id=<?= $client['c_id'] ?>" class="btn btn-danger">Supprimer <i class="bi bi-trash3-fill"></i></a>
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
