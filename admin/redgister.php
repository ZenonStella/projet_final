<?php
require('inc/header.php');
require_once '../controllers/form_controller.php';
?>
<h1 class="m-5 text-center">Formulaire de création d'utilisateurs</h1>
<form action="" method="POST">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-11 border border-secondary rounded shadow p-4">
            <div class="mb-3 col-11">
                <label for="">Email</label>
                <span class="ms-2 text-danger"><?= isset($errors['mail']) ? $errors['mail'] : '' ?></span>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Email" aria-label="Email" required value="<?= isset($_POST['mail']) ? $_POST['mail'] : '' ?>">
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
            <div class="col-11 mb-3 justify-content-center">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                    <label class="form-check-label" for="invalidCheck2">
                        J'ai lu et j'accepte la <a href="politiques.php">politique de confidentialité</a>
                    </label>
                </div>
            </div>
            <div class="col-11 mb-3 text-center">
                <button class="btn btn-primary" type="submit">Envoyer</button>
            </div>
        </div>
    </div>
</form>
<?php
require('inc/footer.php');
?>