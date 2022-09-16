<?php
session_start();
require_once '../controllers/form_controller.php';
require_once '../controllers/passlost_controller.php';
include('../inc/header.php');
?>
<h2>Créer un nouvau mot de passe</h2>
<form action="" method="POST">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-11 border border-secondary rounded shadow p-4">
            <div class="row justify-content-center">
                <div class="mb-3 col-11">
                    <label for="mail">Email</label>
                    <span class="ms-2 text-danger"><?= isset($errors['mail']) ? $errors['mail'] : '' ?></span>
                    <div class="input-group">
                        <input type="text" class="form-control" name="mail" id="mail" placeholder="Email" aria-label="Email" value="<?= isset($_POST['mail']) ? $_POST['mail'] : '' ?>">
                    </div>
                </div>
                <div class="mb-3 col-11">
                    <label for="password">Mot de passe</label>
                    <span class="ms-2 text-danger"><?= isset($errors['password']) ? $errors['password'] : '' ?></span>
                    <div class="input-group">
                        <input type="password" class="form-control" id="password" name="password" value="<?= isset($_POST['password']) ? $_POST['password'] : '' ?>" require>
                    </div>
                </div>
                <div class="mb-3 col-11">
                    <label for="confirmPassword">Confirmation du mot de passe</label>
                    <span class="ms-2 text-danger"><?= isset($errors['confirmPassword']) ? $errors['confirmPassword'] : '' ?></span>
                    <div class="input-group">
                        <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" require>
                    </div>
                </div>
                <div class="col-11 mb-3 text-center">
                    <button class="btn btn-primary">Envoyer</button>
                </div>
            </div>
        </div>
    </div>
</form>
<?php
include('../inc/footer.php');
