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
                            <td><?= $devi[''] ?></td>
                            <td><a href="" class="btn btn-info">Voir +</a>
                                <?php if ($_SESSION['user']['u_role'] == 'admin' || $_SESSION['user']['u_role'] == 'editeur') { ?>
                                    <a href="" class="btn greenbtn">Modifier</a>
                                    <a href="" class="btn btn-danger">Supprimer <i class="bi bi-trash3-fill"></i></a>
                                <?php } ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php
require('inc/footer.php');

require('inc/end.php');
