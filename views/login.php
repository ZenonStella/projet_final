<?php
session_start();
require_once '../controllers/login_controller.php';
include('../inc/header.php');
?>
<h2>Connection </h2>
<form action="" method="POST">
    <div class="row justify-content-center">
        <div class="col-8 border border-secondary rounded shadow p-4 d-flex flex-wrap justify-content-evenly">
            <div class="my-2">
                <label for="mail">Courriel</label>
                <span class="ms-2 text-danger"><?= isset($errors['mail']) ? $errors['mail'] : '' ?></span>
                <br>
                <input type="mail" class="form-control" id="mail" name="mail" placeholder="ex. jean.durant@mail.fr" value="<?= isset($_POST['mail']) ? $_POST['mail'] : '' ?>">
            </div>
            <div class="my-2">
                <label for="password">Mot de passe</label>
                <span class="ms-2 text-danger"><?= isset($errors['password']) ? $errors['password'] : '' ?></span>
                <br>
                <input type="password" class="form-control" id="password" name="password" value="<?= isset($_POST['password']) ? $_POST['password'] : '' ?>">
            </div>
            <span class="ms-2 text-danger"><?= isset($errors['all']) ? $errors['all'] : '' ?></span>
            <button class="btn btn-dark my-3">Valider</button>
        </div>
    </div>
</form>
<?php
include('../inc/footer.php');
