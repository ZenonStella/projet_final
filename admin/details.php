<?php
session_start();
require_once '../controllers/detail_controller.php';
require('inc/header.php');
if (isset($_GET['obj']) && array_key_exists($_GET['obj'], $objs)) {
    if ($_GET['obj'] == 1) { ?>
        <div class="row justify-content-center">
            <div class="back">
                <a class="btn btn-danger rounded mb-5" href="clients.php">Retour à la liste des clients</a>
            </div>
            <div>
                <p class="h2 text-center">Informations client</p>
                <p class="text-center">Ces informations ne sont modifiable que par le client en question ou l'administrateur.</p>
            </div>
            <div class="card  col-lg-5 col-11 green my-3 py-5 shadow justify-content-center">
                <div class="row text-white justify-content-center">
                    <p>Nom : <?= $client['c_firstname'] ?></p>
                    <p>Prénom : <?= $client['c_lastname'] ?></p>
                    <p>Mail : <?= $client['c_mail'] ?></p>
                    <p>Téléphone : <?php if ($client['c_phone'] == '') { ?>
                            Information non renseigner
                        <?php } else { ?>
                            <?= $client['c_phone'] ?>
                        <?php } ?></p>
                </div>
            </div>
            <div class="card my-3 shadow">
                <p class="h3 text-center my-2">Liste des message de ce client</p>
                <div class="row">
                    <table class="table table-striped rounded border">
                        <thead class="green">
                            <tr>
                                <th scope="col">Date du message</th>
                                <th scope="col">Messages</th>
                                <th scope="col">Réponse</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($missives as $missive) { ?>
                                <tr>
                                    <td><?= $missive['mi_created_at'] ?></td>
                                    <td><?= $missive['mi_missive'] ?></td>

                                    <td><?= $missive['mi_responce'] == 0 ? 'non' : 'oui' ?></td>
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
                        <thead class="green">
                            <tr>
                                <th scope="col">Date du rendez-vous</th>
                                <th scope="col">Heure du rendez-vous</th>
                                <th scope="col">Réponse</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($meets as $meet) { ?>
                                <tr>
                                    <td><?= $meet['me_created_at'] ?></td>
                                    <td><?= $meet['me_meet_at'] ?></td>
                                    <td><?= $meet['me_responce'] == 0 ? 'non' : 'oui' ?></td>
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
                        <thead class="green">
                            <tr>
                                <th scope="col">Localisation</th>
                                <th scope="col">Devis</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($estimations as $estimation) { ?>
                                <tr>
                                    <td><?= $estimation['e_zip'] ?> <?= $estimation['e_city'] ?></td>
                                    <td><?= $estimation['e_created_at'] ?></td>
                                    <td>
                                        <a href="" class="btn btn-info">Voir +</a>
                                    </td>
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
                <p class="text-center">Ces informations ne sont modifiable que par l'utilisateur en question ou l'administrateur.</p>
            </div>
            <div class="card text-white col-lg-5 col-11 green my-3 py-5 shadow justify-content-center">
                <div class="row justify-content-center">
                    <p>Nom : <?= $user['u_firstname'] ?></p>
                    <p>Prénom : <?= $user['u_lastname'] ?></p>
                    <p>Mail : <?= $user['u_email'] ?></p>
                    <p>Rôle : <?= $user['u_role'] ?></p>
                </div>
            </div>
        </div>
    <?php }
    if ($_GET['obj'] == 3) { ?>
        <div class="row justify-content-center">
            <div class="back">
                <a class="btn btn-danger rounded mb-5" href="meet.php">Retour à la liste des rendeze-vous</a>
            </div>
            <div>
                <p class="h2 text-center">Informations du rendez-vous</p>
                <p>Ces informations ne sont modifiable que par l'administrateur ou l'éditeur.</p>
            </div>
            <div class="card text-white col-lg-5 col-11 green my-3 py-5 shadow justify-content-center">
                <div class="row justify-content-center">
                    <p>Nom : <?= $meet['c_firstname'] ?></p>
                    <p>Prénom : <?= $meet['c_lastname'] ?></p>
                    <p>Mail : <?= $meet['c_mail'] ?></p>
                    <p>Créer le : <?= $meet['me_created_at'] ?></p>
                    <p>Rendez-vous le : <br><?= $meet['me_meet_date'] ?> à <?= $meet['me_meet_at'] ?></p>
                    <p>Localisation : <?= $meet['me_zip'] ?> <?= $meet['me_city'] ?></p>
                    <p>Réponse : <?= $meet['me_responce'] == 0 ? 'non' : 'oui' ?></p>
                </div>
            </div>
        </div>
    <?php }
    if ($_GET['obj'] == 4) { ?>
        <div class="row justify-content-center">
            <div class="back">
                <a class="btn btn-danger rounded mb-5" href="messages.php">Retour à la liste des messages</a>
            </div>
            <div>
                <p class="h2 text-center">Informations d'un message</p>
                <p class="text-center">Ces informations ne sont modifiable que par l'administrateur ou l'éditeur.</p>
            </div>
            <div class="card text-white col-lg-5 col-11 green my-3 py-5 shadow justify-content-center">
                <div class="row justify-content-center">
                    <p>Nom : <?= $missive['c_firstname'] ?></p>
                    <p>Prénom : <?= $missive['c_lastname'] ?></p>
                    <p>Mail : <?= $missive['c_mail'] ?></p>
                    <p>Téléphone : <?php if ($missive['c_phone'] == '') { ?>
                            Information non renseigner
                        <?php } else { ?>
                            <?= $missive['c_phone'] ?>
                        <?php } ?></p>
                    <p>Créer le : <?= $missive['mi_created_at'] ?></p>
                    <p>message : <br><?= $missive['mi_missive'] ?></p>
                    <p>Réponse : <?= $missive['mi_responce'] == 0 ? '<i class="bi bi-envelope-fill text-white"></i>' : '<i class="bi bi-envelope-paper-fill text-white"></i>' ?></p>
                </div>
            </div>
        </div>
    <?php }
    if ($_GET['obj'] == 5) { ?>
        <div class="row justify-content-center">
            <div class="back">
                <a class="btn btn-danger rounded mb-5" href="devis.php">Retour à la liste des devis</a>
            </div>
            <div>
                <p class="h2 text-center">Informations d'un devis</p>
            </div>
            <div class="card text-white col-lg-5 col-11 green my-3 py-5 shadow justify-content-center">
                <div class="row justify-content-center">
                    <p>Nom : <?= $devis['c_firstname'] ?></p>
                    <p>Prénom : <?= $devis['c_lastname'] ?></p>
                    <p>Mail : <?= $devis['c_mail'] ?></p>
                    <p>Téléphone : <?php if ($devis['c_phone'] == '') { ?>
                            Information non renseigner
                        <?php } else { ?>
                            <?= $devis['c_phone'] ?>
                        <?php } ?></p>
                    <p>Localisation : <?= $devis['e_zip'] ?> <?= $devis['e_city'] ?></p>
                    <p>Créer le : <?= $devis['e_created_at'] ?></p>
                    <p>Réponse : <?= $devis['e_responce'] == 0 ? 'Non <i class="bi bi-envelope-fill text-white"></i>' : 'Oui <i class="bi bi-envelope-paper-fill text-white"></i>' ?></p>
                </div>

            </div>
            <div class="card my-3 shadow">
                <p class="h3 text-center my-2">Liste des missions demandés par ce client</p>
                <div class="row">
                    <table class="table table-striped rounded border">
                        <thead class="green">
                            <tr>
                                <th scope="col">Categorie</th>
                                <th scope="col">Mission</th>
                                <th scope="col">Quantité</th>
                                <th scope="col">Proprietés</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($missions as $mission) { ?>
                                <tr>
                                    <td><?= $mission['c_name'] ?></td>
                                    <td><?= $mission['tp_name'] ?></td>
                                    <td><?= $mission['p_quantity'] ?><?= $mission['p_unite'] ?></td>
                                    <td><?= $mission['p_propriety'] ?></td>
                                </tr>
                            <?php } { ?>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    <?php }
    if ($_GET['obj'] == 6) { ?>
        <div class="row justify-content-center">
            <div class="back">
                <a class="btn btn-danger rounded mb-5" href="devis.php">Retour à la liste des articles</a>
            </div>
            <div>
                <p class="h2 text-center">Informations d'un article</p>
            </div>
            <div class="card text-white col-lg-5 col-11 green my-3 py-5 shadow justify-content-center">
                <div class="row justify-content-center">
                    <p class="h5">Le createur de l'article</p>
                    <p>Nom : <?= $article['u_firstname'] ?></p>
                    <p>Prénom : <?= $article['u_lastname'] ?></p>
                    <p>Mail : <?= $article['u_email'] ?></p>
                    <p>Créer le : <?= $article['a_created_at'] ?></p>
                </div>

            </div>
            <div class="card my-3 shadow">
                <p class="h3 text-center my-2">Liste des missions demandés par ce client</p>
                <div class="row">
                    <div class="picture col-lg-4 col-10">
                        <img src="data:image/png;base64,<?= $article['a_img'] ?>" alt="<?= $article['a_img_name'] ?>">
                    </div>
                    <div class="col-lg-6 col-12">
                        <p class="h4 text-center"><?= $article['a_titles'] ?></p>
                        <p><?= $article['a_preveiw'] ?></p>
                        <p><?= $article['a_text'] ?></p>
                    </div>
                </div>
            </div>
        </div>
<?php }
}
require('inc/footer.php');
require('inc/end.php');
