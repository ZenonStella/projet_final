<?php
session_start();
require_once '../controllers/archives_controller.php';
require('inc/header.php');
?>
<div class="row justify-content-center">
    <div class="back">
        <a class="btn btn-danger rounded mb-5" href="users.php">Retour à la liste de utilisateurs</a>
    </div>
    <div class="col-11 my-3">
        <div class="row justify-content-center">
            <table class="table table-striped rounded border">
                <thead>
                    <tr>
                        <th scope="col">Identité</th>
                        <th scope="col">Adresse mail</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user) { ?>
                        <tr>
                            <td><?= $user['u_firstname'] ?> <?= $user['u_lastname'] ?></td>
                            <td><?= $user['u_email'] ?></td>
                            <td>
                                <button type="button" class="btn greenbtn" data-bs-toggle="modal" data-bs-target="#user<?= $user['u_id'] ?>Update">
                                    Désarchiver
                                </button>
                                <?php if ($_SESSION['user']['u_role'] == 'admin') { ?>
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#user<?= $user['u_id'] ?>Delete">
                                        Supprimer <i class="bi bi-trash3-fill"></i>
                                    </button>
                                <?php } ?>
                            </td>
                        </tr>
                        <div class="modal fade" id="user<?= $user['u_id'] ?>Update" tabindex="-1" aria-labelledby="user<?= $user['u_id'] ?>UpdateLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header greenbg text-white">
                                        <h5 class="modal-title" id="user<?= $user['u_id'] ?>UpdateLabel">Désarchiver <?= $user['u_firstname'] ?> <?= $user['u_lastname'] ?></h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Vous vous apprêtez à désarchiver un utilisateur. Voulez-vous continuer ?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                        <a href="unarchive.php?obj=2&id=<?= $user['u_id'] ?>" class="btn greenbtn">Désarchiver</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="user<?= $user['u_id'] ?>Delete" tabindex="-1" aria-labelledby="user<?= $user['u_id'] ?>DeleteLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header greenbg text-white">
                                        <h5 class="modal-title" id="user<?= $user['u_id'] ?>DeleteLabel">Supprimer <?= $user['u_firstname'] ?> <?= $user['u_lastname'] ?></h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Vous vous apprêtez à supprimer définitivement un utilisateur. Voulez-vous continuer ?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn greenbtn" data-bs-dismiss="modal">Annuler</button>
                                        <a href="delete.php?obj=2&id=<?= $user['u_id'] ?>" class="btn btn-danger">Supprimer <i class="bi bi-trash3-fill"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </tbody>
            </table>
            <a href="" class="col-6 mt-3 btn greenbtn">Gerer mes messages</a>
        </div>
    </div>
</div>
<?php
require('inc/footer.php');

require('inc/end.php');
