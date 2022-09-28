<?php
session_start();
require_once '../controllers/admin_users_controller.php';
require('inc/header.php');
?>
<div class="row justify-content-center">
    <div class="back mb-5">
        <a class="btn btn-danger rounded my-1" href="home.php">Retour à la page d'accueil</a>
        <?php if ($_SESSION['user']['u_role'] == 'admin' || $_SESSION['user']['u_role'] == 'editeur') { ?>
            <a class="btn btn-danger rounded my-1" href="redgister.php">Ajouter un nouvel utilisateur</a>
        <?php } ?>
    </div>
    <div class="col-11 my-3">
        <div class="row justify-content-center">
            <table class="table table-striped rounded border">
                <thead class="green">
                    <tr>
                        <th scope="col">Adresse mail</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user) { ?>
                        <tr>
                            <td><?= $user['u_email'] ?></td>
                            <td>
                                <a href="details.php?obj=2&id=<?= $user['u_id'] ?>" class="btn greenbtn my-1">+ d'infos</a>
                                <?php if ($_SESSION['user']['u_role'] == 'admin' || $_SESSION['user']['u_role'] == 'editeur') { ?>
                                    <button type="button" class="btn btn-danger my-1" data-bs-toggle="modal" data-bs-target="#user<?= $user['u_id'] ?>">
                                        Supprimer <i class="bi bi-trash3-fill"></i>
                                    </button>
                                <?php } ?>
                            </td>
                        </tr>
                        <div class="modal fade" id="user<?= $user['u_id'] ?>" tabindex="-1" aria-labelledby="user<?= $user['u_id'] ?>Label" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header greenbg text-white">
                                        <h5 class="modal-title" id="user<?= $user['u_id'] ?>Label">Supprimer <?= $user['u_firstname'] ?> <?= $user['u_lastname'] ?></h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Vous vous apretez à supprimer un utilisateur. Voulez vous continuer?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn greenbtn" data-bs-dismiss="modal">Annuler</button>
                                        <a href="soft_delete.php?obj=2&id=<?= $user['u_id'] ?>" class="btn btn-danger">Supprimer <i class="bi bi-trash3-fill"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </tbody>
            </table>
            <?php if ($_SESSION['user']['u_role'] == 'admin' || $_SESSION['user']['u_role'] == 'editeur') { ?>
                <a href="archivesUsers.php" class="col-6 mt-3 btn greenbtn">Voir mes utilisateurs supprimés</a>
            <?php } ?>
        </div>
    </div>
</div>
<?php
require('inc/footer.php');

require('inc/end.php');
