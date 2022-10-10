<?php
session_start();
require('inc/header.php');
require_once '../controllers/admin_meets_controller.php';

// require_once '../controllers/calendar_controller.php';
?>
<div class="col-11 my-3">
    <div class="back">
        <a class="btn btn-danger rounded mb-5" href="home.php">Retour à la page d'accueil <i class="bi bi-house-fill"></i></a>
        <?php if ($_SESSION['user']['u_role'] == 'admin' || $_SESSION['user']['u_role'] == 'editeur') { ?>
            <a href="archivesMeets.php" class="btn greenbtn mb-5">Archives <i class="bi bi-archive-fill text-white"></i></a>
        <?php } ?>
    </div>
    <div class="row justify-content-center">
        <p class="h3 text-center p3">Les rendez-vous avec nos clients</p>
        <table class="table table-striped rounded border">
            <thead class="green">
                <tr>
                    <th scope="col">Identité</th>
                    <th scope="col">Rendez-vous</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($meets as $meet) { ?>
                    <tr>
                        <td><?= $meet['c_lastname'] ?> <?= $meet['c_firstname'] ?></td>
                        <td class="">Le <?= $meet['me_meet_date'] ?> à <?= $meet['me_meet_at'] ?></td>
                        <td>
                            <a href="details.php?obj=3&id=<?= $meet['me_id'] ?>" class="btn greenbtn">Voir +</a>
                            <?php if ($_SESSION['user']['u_role'] == 'admin' || $_SESSION['user']['u_role'] == 'editeur') { ?>
                                <button type="button" class="btn btn-danger my-1" data-bs-toggle="modal" data-bs-target="#meet<?= $meet['me_id'] ?>">
                                    Supprimer <i class="bi bi-trash3-fill"></i>
                                </button>
                            <?php } ?>
                        </td>
                    </tr>
                    <div class="modal fade " id="meet<?= $meet['me_id'] ?>" tabindex="-1" aria-labelledby="meet<?= $meet['me_id'] ?>Label" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header greenbg text-white">
                                    <h5 class="modal-title" id="meet<?= $meet['me_id'] ?>Label">Supprimer le rendez-vous de <?= $meet['me_meet_date'] ?> à <?= $meet['me_meet_at'] ?> avec <?= $meet['c_firstname'] ?> <?= $meet['c_lastname'] ?></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Vous vous apprêtez à supprimer un message qui <?= $meet['me_respoce'] = 1 ? 'n\'a pas eu de réponse' : 'a eu une réponse' ?>. Voulez-vous continuer ?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn greenbtn" data-bs-dismiss="modal">Annuler</button>
                                    <a href="soft_delete.php?obj=3&id=<?= $meet['me_id'] ?>" class="btn btn-danger">Supprimer <i class="bi bi-trash3-fill"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <!-- <a href="meet.php" class="col-6 mt-3 btn greenbtn">Gerer mes rendez-vous <i class="bi bi-calendar3 text-white"></i></a> -->
    </div>
</div>
<!-- <div class="row justify-content-center">
    <div class="back">
        <a class="btn btn-danger rounded mb-5" href="home.php">Retour à la page d'accueil <i class="bi bi-house-fill"></i></a>
        <?php if ($_SESSION['user']['u_role'] == 'admin' || $_SESSION['user']['u_role'] == 'editeur') { ?>
            <a href="archivesMeets.php" class="btn greenbtn mb-5">Archives <i class="bi bi-archive-fill text-white"></i></a>
        <?php } ?>
    </div>
    <div class="col-10 my-3 justify-content-center">
        <p class="text-center p-0 m-0"><a class="btn" href="index.php?<?= isset($_GET['month']) ? 'month=' . $_GET['month'] . '&' : '' ?>year=<?= $year - 1 ?>"><i class="bi bi-arrow-left-circle"></i></a><?= $year ?><a class="btn" href="index.php?<?= isset($_GET['month']) ? 'month=' . $_GET['month'] . '&' : '' ?>year=<?= $year + 1 ?>"><i class="bi bi-arrow-right-circle"></i></a></p>
        <p class="text-center p-0 m-0"><a class="btn" href="index.php?<?= isset($_GET['year']) ? ($monthNumber == 1 ? 'year=' . $_GET['year'] - 1 . '&' :  'year=' . $_GET['year'] . '&') : '' ?>month=<?= $monthNumber == 1 ? 12 : $monthNumber - 1 ?>"><i class="bi bi-chevron-left me-1"></i></a><?= $monthLetters ?><a class="btn" href="index.php?<?= isset($_GET['year']) ? ($monthNumber == 12 ? 'year=' . $_GET['year'] + 1 . '&' :  'year=' . $_GET['year'] . '&') : '' ?>month=<?= $monthNumber == 12 ? 1 : $monthNumber + 1 ?>"><i class="bi bi-chevron-right ms-1"></i></a></p>
        <div class="row justify-content-center p-0 mt-1 mx-0">
            <div class="col-12 calendar p-0 m-0">
                <?php
                foreach ($days as $key => $value) { ?>
                    <div class="text-center text-light bg-dark"><?= $value ?></div>
                <?php }
                for ($i = 1; $i <= $lines; $i++) { ?>
                    <?= createCase($firstCaseTimestamp, $i, $monthNumber, $arraySpecialDays) ?>
                <?php }
                ?>
            </div>
        </div>
    </div>
</div> -->
<?php
require('inc/footer.php');

require('inc/end.php');
