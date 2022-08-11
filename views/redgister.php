<?php
require('../inc/header.php');
require_once '../controllers/form_controller.php';
if ($showForm) { ?>
    <h1 class="m-5 text-center">Formulaire de contact</h1>
    <form action="" method="POST">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-11 border border-secondary rounded shadow p-4">
                <div class="mb-3 col-11">
                    <label for="">Nom et Prénom </label>
                    <span class="ms-2 text-danger"><?= isset($errors['lastname']) ? $errors['lastname'] : '' ?></span>
                    <span class="ms-2 text-danger"><?= isset($errors['firstname']) ? $errors['firstname'] : '' ?></span>
                    <div class="input-group">
                        <input type="text" aria-label="First name" placeholder="Nom" class="form-control" required>
                        <input type="text" aria-label="Last name" placeholder="Prénom" class="form-control" required>
                    </div>
                </div>
                <div class="mb-3 col-11">
                    <label for="">Email</label>
                    <span class="ms-2 text-danger"><?= isset($errors['password']) ? $errors['password'] : '' ?></span>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username" required>
                        <span class="input-group-text">@</span>
                        <input type="text" class="form-control" placeholder="Server" aria-label="Server" required>
                    </div>
                </div>
                <div class="mb-3 col-11">
                    <label for="phone">Numéro de téléphone</label>
                    <span class="ms-2 text-danger"><?= isset($errors['phone']) ? $errors['phone'] : '' ?></span>
                    <div class="input-group">
                        <input type="phone" class="form-control" placeholder="Ex: 07 00 00 00 00" id="phone" name="phone" value="<?= isset($_POST['phone']) ? $_POST['phone'] : '' ?>" required pattern="[0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}">
                    </div>
                </div>
                <div class="mb-3 col-11">
                    <label for="password">Mot de passe</label>
                    <span class="ms-2 text-danger"><?= isset($errors['password']) ? $errors['password'] : '' ?></span>
                    <div class="input-group">
                        <input type="password" class="form-control" id="password" name="password" value="<?= isset($_POST['password']) ? $_POST['password'] : '' ?>">
                    </div>
                </div>
                <div class="mb-3 col-11">
                    <label for="confirmPassword">Confirmation du mot de passe</label>
                    <span class="ms-2 text-danger"><?= isset($errors['confirmPassword']) ? $errors['confirmPassword'] : '' ?></span>
                    <div class="input-group">
                        <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" value="<?= isset($_POST['confirmPassword']) ? $_POST['confirmPassword'] : '' ?>">
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
} else { ?>
    <div class="row justify-content-center">
        <div class="col-4 border border-secondary rounded shadow p-4">
            <a href="index.php" class="btn btn-secondary">Retour à la page d'accueil</a>
            <div class="info me-5-lg">
                <p>Nom : <?= safeInput($_POST['lastname']) ?></p>
                <p>Prénom : <?= safeInput($_POST['firstname']) ?></p>
                <p>Mail : <?= safeInput($_POST['mail']) ?></p>
                <p>Formule : <?= $arrayFormula[safeInput($_POST['formula'])] ?></p>
            </div>
        </div>
    </div>
<?php }
require('../inc/footer.php');
?>