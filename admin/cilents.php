<?php
session_start();
require_once '../controllers/admin_clients_controller.php';
require('inc/header.php');
?>
<div class="row justify-content-center">
    <div class="back">
        <a class="btn btn-danger rounded mb-5" href="home.php">Retour à la page d'accueil</a>
    </div>
    <div class="col-11 my-3">
        <div class="row justify-content-center">
            <table class="table table-striped rounded border">
                <thead>
                    <tr>
                        <th scope="col">Adresse mail</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($clients as $client) { ?>
                        <tr>
                            <td><?php $client['u_email'] ?></td>
                            <td>
                                <a href="<?php $client['u_id'] ?>" class="btn btn-warning">Signaler</a>
                                <a href="<?php $client['u_id'] ?>" class="btn btn-danger">Supprimer</a>
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
