<?php
session_start();
require_once '../controllers/admin_users_controller.php';
require('inc/header.php');
?>
<pre>
    <?php
    print_r($_SESSION['user']);
    ?>
</pre>
<div class="row justify-content-center">
    <div class="back">
        <a class="btn btn-danger rounded mb-5" href="home.php">Retour à la page d'accueil</a>
        <a class="btn btn-primary rounded mb-5" href="redgister.php">Modifier mon profil</a>
    </div>
    <div class="col-11 my-3">
        <div class="row justify-content-center">
            <p>Mail : <?= $_SESSION['user']['u_email'] ?></p>
            <p>Role : <?= $_SESSION['user']['u_role'] ?></p>
        </div>
    </div>
</div>