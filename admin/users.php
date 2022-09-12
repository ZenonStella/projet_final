<?php
session_start();
require_once '../controllers/admin_users_controller.php';
require('inc/header.php');
?>
<div class="row justify-content-center">
    <div class="back">
        <a class="btn btn-danger rounded mb-5" href="home.php">Retour à la page d'accueil</a>
        
        <a class="btn btn-danger rounded mb-5" href="redgister.php">Ajouter un nouvel utilisateur</a>
    </div>
    <div class="col-11 my-3">
        <div class="row justify-content-center">
            <table class="table table-striped rounded border">
                <thead class="green">
                    <tr>
                        <th scope="col">Adresse mail</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user) { ?>
                        <tr>
                            <td><?= $user['u_email'] ?></td>
                            <td>
                                <a href="details.php?obj=users&id=<?php $user['u_id'] ?>" class="btn btn-warning">Signaler</a>
                                <a href="soft_delete.php?obj=users&action=delete_soft&id=<?php $user['u_id'] ?>" class="btn btn-danger">Supprimer</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <a href="soft_delete.php?obj=users&action=view" class="col-6 mt-3 btn btn-secondary">Voir mes utilisateurs supprimés</a>
        </div>
    </div>
</div>
<?php
require('inc/footer.php');
