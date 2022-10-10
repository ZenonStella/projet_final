<?php
session_start();
require_once '../controllers/editUsers_controller.php';
require('inc/header.php');

?>
<h1 class="m-5 text-center">Formulaire d'ajout d'utilisateurs</h1>
<form action="" method="POST">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-11 border border-secondary rounded shadow p-4">
            <div class="row justify-content-center">
                <div class="mb-3 col-11">
                    <label for="">Nom et Prénom</label>
                    <span class="ms-2 text-danger"><?= isset($errors['firstname']) ? $errors['firstname'] : '' ?></span>
                    <span class="ms-2 text-danger"><?= isset($errors['lastname']) ? $errors['lastname'] : '' ?></span>
                    <div class="input-group">
                        <input type="text" name="firstname" id="firstname" aria-label="First name" placeholder="Nom" class="form-control" value="<?= isset($_POST['firstname']) ? $_POST['firstname'] : $_SESSION['user']['u_firstname'] ?>">
                        <input type="text" name="lastname" id="lastname" aria-label="Last name" placeholder="Prénom" class="form-control" value="<?= isset($_POST['lastname']) ? $_POST['lastname'] : $_SESSION['user']['u_lastname'] ?>">
                    </div>
                </div>
                <div class="mb-3 col-11">
                    <label for="mail">Email</label>
                    <span class="ms-2 text-danger"><?= isset($errors['mail']) ? $errors['mail'] : '' ?></span>
                    <div class="input-group">
                        <input type="text" class="form-control" name="mail" id="mail" placeholder="Email" aria-label="Email" value="<?= isset($_POST['mail']) ? $_POST['mail'] : $_SESSION['user']['u_email'] ?>">
                    </div>
                </div>
                <div class="col-11 mb-3 text-center">
                    <a href="profil.php" class="btn btn-danger">Annuler</a>
                    <button class="btn greenbtn">Envoyer</button>
                </div>
            </div>
        </div>
    </div>
</form>
<?php
require('inc/footer.php'); ?>
<script src="../assets/js/form.js"></script>
<?php
// require_once '../inc/sweetAlert.php';
require('inc/end.php');
?>