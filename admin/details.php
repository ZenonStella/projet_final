<?php
session_start();
require_once '../controllers/detail_controller.php';
require('inc/header.php');
if (isset($_GET['obj']) && array_key_exists($_GET['obj'], $objs)) {
    if ($_GET['obj'] == 1) { ?>
        <div class="row justify-content-center">
            <div class="back">
                <a class="btn btn-danger rounded mb-5" href="users.php">Retour à la liste des utilisateurs</a>
            </div>
            <div>
                <p class="h2 text-center">Informations client</p>
                <p>Ces informations ne sont modifiable que par le client en question ou l'administrateur.</p>
            </div>
            <div class="card col-5 my-3 py-5 shadow justify-content-center">
                <div class="row justify-content-center">
                    <p>Nom : <?= $client['c_firstname'] ?></p>
                    <p>Prénom : <?= $client['c_lastname'] ?></p>
                    <p>Mail : <?= $client['c_mail'] ?></p>
                    <!-- <p>Role : <?= $client['c_role'] ?></p> -->
                </div>
            </div>
            <div class="card my-3 shadow">
                <p class="h3 text-center my-2">Liste des message de ce client</p>
                <div class="row">
                    <table class="table table-striped rounded border">
                        <thead>
                            <tr>
                                <th scope="col">Date du message</th>
                                <th scope="col">Messages</th>
                                <th scope="col">Reponce</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($missives as $missive) { ?>
                                <tr>
                                    <td><?= $missive['mi_created_at'] ?></td>
                                    <td><?= $missive['mi_missive'] ?></td>
                                    
                                    <td><?= $missive['mi_responce'] == 0 ? 'non': 'oui' ?></td>
                                </tr>
                            <?php } { ?>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card my-3 shadow">
                <p class="h3 text-center my-2">Liste des rendez-vous de ce client</p>
                <div class="row">
                    <table class="table table-striped rounded border">
                        <thead>
                            <tr>
                                <th scope="col">Date du rendez-vous</th>
                                <th scope="col">Heure du rendez-vous</th>
                                <th scope="col">Reponce</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($meets as $meet) { ?>
                                <tr>
                                    <td><?= $meet['me_created_at'] ?></td>
                                    <td><?= $meet['me_meet_at'] ?></td>
                                    <td><?= $meet['me_responce'] == 0 ? 'non': 'oui' ?></td>
                                </tr>
                            <?php } { ?>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card my-3 shadow">
                <p class="h3 text-center my-2">Liste des devis de ce client</p>
                <div class="row">
                    <table class="table table-striped rounded border">
                        <thead>
                            <tr>
                                <th scope="col">Devis</th>
                                <th scope="col"></th>
                                <th scope="col">Reponce</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($estimations as $estimation) { ?>
                                <tr>
                                    <td><?= $estimation['e_zip'] ?></td>
                                    <!-- <td><?= $estimation['me_estimation_at'] ?></td> -->
                                    <!-- <td><?= $estimation['me_responce'] == 0 ? 'non': 'oui' ?></td> -->
                                </tr>
                            <?php } { ?>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    <?php }
    if ($_GET['obj'] == 2) { ?>
        <div class="row justify-content-center">
            <div class="back">
                <a class="btn btn-danger rounded mb-5" href="users.php">Retour à la liste des utilisateurs</a>
            </div>
            <div>
                <p class="h2 text-center">Informations d'utilisateur</p>
                <p>Ces informations ne sont modifiable que par l'utilisateur en question ou l'administrateur.</p>
            </div>
            <div class="card col-5 my-3 py-5 shadow justify-content-center">
                <div class="row justify-content-center">
                    <p>Nom : <?= $user['u_firstname'] ?></p>
                    <p>Prénom : <?= $user['u_lastname'] ?></p>
                    <p>Mail : <?= $user['u_email'] ?></p>
                    <p>Role : <?= $user['u_role'] ?></p>
                </div>
            </div>
        </div>
    <?php }
    if ($_GET['obj'] == 3) { ?>




    <?php }
    if ($_GET['obj'] == 4) { ?>




    <?php }
    if ($_GET['obj'] == 5) { ?>




<?php }
}
require('inc/footer.php');
require('inc/end.php');
