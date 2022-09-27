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
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#user<?= $user['u_id'] ?>Update">
                                    Désarchiver
                                </button>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#user<?= $user['u_id'] ?>Delete">
                                    Supprimer
                                </button>
                            </td>
                        </tr>
                        <div class="modal fade" id="user<?= $user['u_id'] ?>Update" tabindex="-1" aria-labelledby="user<?= $user['u_id'] ?>UpdateLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="user<?= $user['u_id'] ?>UpdateLabel">Désarchiver <?= $user['u_firstname'] ?> <?= $user['u_lastname'] ?></h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Vous vous apretez à Désarchiver un utilisateur. Voulez vous continuer?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <a href="unarchive.php?obj=2&id=<?= $user['u_id'] ?>" class="btn btn-primary">Désarchiver</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="user<?= $user['u_id'] ?>Delete" tabindex="-1" aria-labelledby="user<?= $user['u_id'] ?>DeleteLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="user<?= $user['u_id'] ?>DeleteLabel">Supprimer <?= $user['u_firstname'] ?> <?= $user['u_lastname'] ?></h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Vous vous apretez à supprimer définitivement un utilisateur. Voulez vous continuer?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <a href="delete.php?obj=2&id=<?= $user['u_id'] ?>" class="btn btn-danger">Supprimer</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </tbody>
            </table>
            <a href="" class="col-6 mt-3 btn btn-secondary">Gerer mes messages</a>
        </div>
    </div>
</div>
<?php
require('inc/footer.php');

require('inc/end.php');
