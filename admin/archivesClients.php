<?php
session_start();
require_once '../controllers/archives_controller.php';
require('inc/header.php');
?>
<div class="row justify-content-center">
<div class="back">
        <a class="btn btn-danger rounded mb-5" href="clients.php">Retour à la liste des messages</a>
    </div>
    <div class="col-11 my-3">
        <div class="row justify-content-center">
            <table class="table table-striped rounded border">
                <thead>
                    <tr>
                        <th scope="col">Identité</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($clients as $client) { ?>
                        <tr>
                            <td><?= $client['c_lastname'] ?> <?= $client['c_firstname'] ?></td>
                            <?php if ($_SESSION['user']['u_role'] == 'user') { ?>
                                <td>
                                    <a href="" class="btn btn-warning">Editer</a>
                                    <?php if ($_SESSION['user']['u_role'] == 'admin') { ?>
                                        <a href="" class="btn btn-warning">Editer</a>
                                        <a href="" class="btn btn-danger">Supprimer</a>
                                    <?php
                                    } ?>
                                </td>
                            <?php
                            } ?>
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
