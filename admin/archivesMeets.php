<?php
session_start();
require_once '../controllers/archives_controller.php';
require('inc/header.php');
?>
<div class="row justify-content-center">
    <div class="back">
        <a class="btn btn-danger rounded mb-5" href="meet.php">Retour à la liste des rendez-vous</a>
    </div>
    <div class="col-11 my-3">
        <div class="row justify-content-center">
            <table class="table table-striped rounded border">
                <thead>
                    <tr>
                        <th scope="col">Identité</th>
                        <th scope="col">Rendez-vous</th>
                        <!-- <th scope="col">Action</th> -->
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($meets as $meet) { ?>
                        <tr>
                            <td><?= $meet['c_lastname'] ?> <?= $meet['c_firstname'] ?></td>
                            <td><?= $meet['me_meet_date'] ?> à <?= $meet['me_meet_at'] ?></td>
                            <td>
                                <button type="button" class="btn greenbtn" data-bs-toggle="modal" data-bs-target="#meet<?= $meet['me_id'] ?>Update">
                                    Désarchiver
                                </button>
                                <?php if ($_SESSION['user']['u_role'] == 'admin') { ?>
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#meet<?= $meet['me_id'] ?>Delete">
                                        Supprimer <i class="bi bi-trash3-fill"></i>
                                    </button>
                                <?php } ?>
                            </td>
                        </tr>
                        <div class="modal fade" id="meet<?= $meet['me_id'] ?>Update" tabindex="-1" aria-labelledby="meet<?= $meet['me_id'] ?>UpdateLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header greenbg text-white">
                                        <h5 class="modal-title" id="meet<?= $meet['me_id'] ?>UpdateLabel">Désarchiver le rendez-vous du <?= $meet['me_meet_date'] ?> à <?= $meet['me_meet_at'] ?> avec <?= $meet['c_firstname'] ?> <?= $meet['c_lastname'] ?></h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Vous vous apretez à désarchiver un rendez-vous qui <?= $meet['me_respoce'] = 1 ? 'n\'a pas eu de réponse' : 'a eu une réponse' ?>. Voulez vous continuer?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                        <a href="unarchive.php?obj=3&id=<?= $meet['me_id'] ?>" class="btn greenbtn">Désarchiver</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="meet<?= $meet['me_id'] ?>Delete" tabindex="-1" aria-labelledby="meet<?= $meet['me_id'] ?>DeleteLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header greenbg text-white">
                                        <h5 class="modal-title" id="meet<?= $meet['me_id'] ?>DeleteLabel">Supprimer lerendez-vous du <?= $meet['me_meet_date'] ?> à <?= $meet['me_meet_at'] ?> avec <?= $meet['c_firstname'] ?> <?= $meet['c_lastname'] ?></h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Vous vous apretez à supprimer définitivement un rendez-vous qui <?= $meet['me_respoce'] = 1 ? 'n\'a pas eu de réponse' : 'a eu une réponse' ?>. Voulez vous continuer?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn greenbtn" data-bs-dismiss="modal">Annuler</button>
                                        <a href="delete.php?obj=3&id=<?= $meet['me_id'] ?>" class="btn btn-danger">Supprimer <i class="bi bi-trash3-fill"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }  ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php
require('inc/footer.php');

require('inc/end.php');
