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
                            <td><?= $user['c_firstname'] ?> <?= $user['c_lastname'] ?></td>
                            <td><?= $user['c_mail'] ?></td>
                            <td>
                                <a href="<?= $user['c_id'] ?>" class="btn btn-warning">Signaler</a>
                                <a href="soft_delete.php?obj=1&id=<?= $user['c_id'] ?>" class="btn btn-danger">Supprimer</a>
                            </td>
                        </tr>
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