<?php
session_start();
require_once '../controllers/admin_clients_controller.php';
require('inc/header.php');
?>
<div class="row justify-content-center">
    <div class="back">
        <a class="btn btn-danger rounded mb-5" href="home.php">Retour à la page d'accueil</a>
        <a href="archivesClients.php" class="btn btn-primary mb-5">Archives</a>
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
                    <?php foreach ($clients as $client) { ?>
                        <tr>
                            <td><?= $client['c_firstname'] ?> <?= $client['c_lastname'] ?></td>
                            <td><?= $client['c_mail'] ?></td>
                            <td>
                                <a href="<?= $client['c_id'] ?>" class="btn btn-warning">Signaler</a>
                                <a href="soft_delete.php?obj=1&id=<?= $client['c_id'] ?>" class="btn btn-danger">Supprimer</a>
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