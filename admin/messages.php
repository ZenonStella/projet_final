<?php
session_start();
require('inc/header.php');
require_once '../controllers/admin_missives_controller.php'
?>
<div class="row justify-content-center">
    <div class="back">
        <a class="btn btn-danger rounded mb-5" href="home.php">Retour à la page d'accueil</a>
        <a href="archivesMissives.php" class="btn btn-primary mb-5">Archives</a>
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
                                <a href="detail.php?obj=1&id=<?= $missive['mi_id'] ?>" class="btn btn-warning">Voir +</a>
                                <?php if ($_SESSION['user']['u_role'] == 'admin') { ?>
                                    <a href="" class="btn btn-warning">Editer</a>
                                    <a href="" class="btn btn-danger">Supprimer</a>
                                <?php
                                } ?>
                            </td>
                        </tr>
                    <?php } { ?>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php
require('inc/footer.php');

require('inc/end.php');
