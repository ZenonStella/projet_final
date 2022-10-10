<?php
session_start();
require_once '../controllers/admin_users_controller.php';
require('inc/header.php');
?>
<div class="row justify-content-center">
    <div class="back">
        <a class="btn btn-danger rounded mb-5" href="home.php">Retour à la page d'accueil <i class="bi bi-house-fill"></i></a>
        <a class="btn greenbtn rounded mb-5" href="edit_profil.php">Modifier mon profil <i class="bi bi-pencil-fill"></i></a>
    </div>
    <div>
        <h2 class="text-center">Mon profil</h2>
    </div>
    <div class="card text-white col-lg-5 col-11 green my-3 py-5 shadow justify-content-center">
        <div class="row justify-content-center">
            <p>Nom : <?= $_SESSION['user']['u_firstname'] ?></p>
            <p>Prénom : <?= $_SESSION['user']['u_lastname'] ?></p>
            <p>Mail : <?= $_SESSION['user']['u_email'] ?></p>
            <p>Role : <?= $_SESSION['user']['u_role'] ?></p>
        </div>
    </div>
    <div class="col-11 my-3">
        <div class="row justify-content-center">

        </div>
    </div>
</div>

<?php
require('inc/end.php');
require('inc/footer.php');
