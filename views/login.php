<?php
session_start();
require_once '../controllers/form_controller.php';
require_once '../controllers/login_controller.php';
include('../inc/header.php');
?>
<div class="mt-5">
    <h2 class="text-center">Connection</h2>
    <form action="" method="POST">
        <div class="row justify-content-center">
            <div class="col-8 border border-secondary rounded shadow p-4 login">
                <div class="my-2">
                    <label for="mail">Courriel
                        <span class="ms-2 text-danger"><?= isset($errors['mail']) ? $errors['mail'] : '' ?></span>
                    </label>
                    <br>
                    <input type="mail" class="form-control" id="mail" name="mail" placeholder="ex. jean.durant@mail.fr" value="<?= isset($_POST['mail']) ? $_POST['mail'] : '' ?>">
                </div>
                <div class="my-2">
                    <label for="password">Mot de passe
                        <span class="ms-2 text-danger"><?= isset($errors['password']) ? $errors['password'] : '' ?></span>
                    </label>
                    <br>
                    <input type="password" class="form-control" id="password" name="password" value="<?= isset($_POST['password']) ? $_POST['password'] : '' ?>">
                </div>
                <div class="">
                    <span class="ms-2 my-2 text-danger"><?= isset($errors['all']) ? $errors['all'] : '' ?></span>
                </div>
                <div class="my-2 text-center">
                    <button class="btn btn-dark my-3">Valider</button>
                </div>
            </div>
        </div>
    </form>
    <p class="text-center mt-3"><a href="passlost.php">Mot de passe oublier?</a></p>
</div>
<?php
include('../inc/footer.php');

include('../inc/end.php');
